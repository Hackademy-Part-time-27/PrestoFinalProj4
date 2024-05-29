<x-layout>
    
<div class="row bg-2 m-0 py-4 w-100 position-relative">
    <div class="col-md-8 mx-auto py-4 ">  
            <h1><span class="text-3 ">{{__('ui.welcome') }}</span></h1>
            <span class="d-flex align-items-center align-content-center justify-content-start"> <h2 class="me-3 mb-0 fs-3">{{__('ui.look_at_your_ads') }}</h2> <a class="text-3 text-decoration-none fs-4 hover" href="{{ route('announcements.list') }}">{{__('ui.view_all') }}</a></span>
            <x-success/>

            <div class="modale" id="modal">
                <div style="cursor: pointer;" class="closing">
                        <span onclick="closeModal()" class="material-symbols-outlined">
                            close
                        </span>
                        </div>
                <div class="contenitore">
                    <div class="mt-5">
                        <h2>{{__('ui.modal_ads') }}</h2>
                    </div>
                    <div>
                            <a class="btn-custom text-decoration-none" href="{{ route('announcement.create')}}">{{__('ui.modal_add_ads') }}</a>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-md-2 py-4">
        <div>
            <a class="btn-custom text-decoration-none fs-4" href="{{ route('announcement.create') }}">{{__('ui.create_ads') }}</a>
        </div>
    </div>
</div>
<div class="container-fluid mt-5 ">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="container-sm">
                <div class="row justify-content-center">
                    @foreach($announcements as $announcement)
                        <div class="col-4 mb-4">
                            <div class="card-custom mx-4 my-3">
                                    <div class="div-img">
                                        <img class="img-fluid rounded-1 w-100" src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/200)' }}" class="card-img-top p-3 rounded" alt="...">
                                    </div>
                                    <div class="text-start pt-2 div-text-card " >
                                        <h2 class="card-title text-3 border-bttm">{{$announcement->title}}</h2>
                                        <p class="card-text fs-4 text-danger ">{{ $announcement->category->name}} </p>
                                        <p class="card-text fs-5 border-bttm">{{$announcement->body}}</p>
                                        <span class="text-end "><p class="card-text fs-3 text-danger pe-4 ">{{Number::currency($announcement->price, in: 'EUR', locale: 'de')}}</p></span>
                                        
                                        <div class="my-4">
                                            <a href="{{ route('announcements.show', ['announcement' => $announcement->id]) }}" class="btn-custom text-decoration-none fs-4 ">{{__('ui.ads_view') }}</a>
                                        </div>
                                    
                                        <div class="d-flex justify-content-end text-end pe-3 mb-0">
                                            <p class="card-footer fs-6">{{__('ui.ads_published') }} {{$announcement->created_at->format('d/m/Y')}}</p>
                                        </div> 
                                    </div>
                            </div>
                        </div>    
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
</div>

    
</x-layout>