<x-layout>
    <div class="row bg-2 m-0 py-4 w-100">
        <div class="col-md-8 mx-auto py-4 " >  
                <h1 class="text-3">{{__('ui.welcome') }} </h1>
                <h2>{{__('ui.ads_page_text') }} </h2>
        </div>
    </div>
    <div class="container-fluid mt-5 ">
        <div class="row justify-content-start">
            <div class="col-12">
                <div class="container-sm">
                    <div class="row justify-content-start">
                        @forelse($announcements as $announcement)
                            <div class="col-4 mb-4 ">
                                <div class="card-custom mx-4 my-3 card-swipe" id="card">
                                        <div class="div-img">
                                            <img class="img-fluid rounded-1 w-100 ps-0" src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/200' }}" class="card-img-top p-3 rounded" alt="...">
                                        </div>
                                        <div class="text-start pt-2 div-text-card " >
                                            <h2 class="card-title text-3 border-bttm">{{$announcement->title}}</h2>
                                            <p class="card-text fs-4 text-danger ">{{ $announcement->category->name}} </p>
                                            <p class="card-text fs-5 border-bttm">{{$announcement->body}}</p>
                                            <span class="text-end "><p class="card-text fs-3 text-danger pe-4 ">{{Number::currency($announcement->price, in: 'EUR', locale: 'de')}}</p></span>
                                            
                                            <div class="my-4">
                                                <a href="{{ route('announcements.show', ['announcement' => $announcement->id]) }}" class="btn-custom text-decoration-none fs-4">{{__('ui.ads_view') }} </a>
                                            </div>
                                        
                                            <div class="d-flex justify-content-end text-end pe-3 mb-0">
                                                <p class="card-footer fs-6">{{__('ui.ads_published') }}  {{$announcement->created_at->format('d/m/Y')}}</p>
                                            </div> 
                                        </div>
                                </div>
                            </div>    
                        @empty
                            <div class="col-12 w-50 mt-5 text-center">
                                <div class="alert alert-warning  py-3 shadow text-center">
                                    <p class="lead">{{__('ui.search_ads') }}</p>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-lg-4 mt-5">
                    {{ $announcements->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>

                    

                    