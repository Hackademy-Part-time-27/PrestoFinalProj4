<x-layout>
    <div class="row bg-2 m-0 py-4 w-100">
        <div class="col-md-8 mx-auto py-4 " >  
                <h1>{{__('ui.category_view_text') }} <span class="text-3 ">{{ $category->name }}</span></h1>
        </div>
    </div>
    <div class="container-fluid mt-5 ">
        <div class="row justify-content-start">
            <div class="col-12">
                <div class="container-sm">
                    <div class="row justify-content-start">
                        @forelse($announcements as $announcement)
                            <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xxl-3 mb-4">
                                <div class="card-custom mx-4 my-3">
                                        <div class="div-img">
                                            <img class="img-fluid rounded-1 w-100" src="{{ !$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/200' }}" class="card-img-top p-3 rounded" alt="...">
                                        </div>
                                        <div class="text-start pt-2 div-text-card " >
                                            <h2 class="card-title text-3 border-bttm">{{$announcement->title}}</h2>
                                            <p class="card-text fs-5 border-bttm">{{$announcement->body}}</p>
                                            <span class="text-end "><p class="card-text fs-3 text-danger pe-4 ">{{Number::currency($announcement->price, in: 'EUR', locale: 'de')}}</p></span>
                                            
                                            <div class="my-4">
                                                <a href="{{ route('announcements.show', ['announcement' => $announcement->id]) }}" class="btn-custom text-decoration-none fs-4">{{__('ui.ads_view') }}</a>
                                            </div>
                                        
                                            <div class="d-flex justify-content-end text-end pe-3 mb-0">
                                                <p class="card-footer fs-6">{{__('ui.ads_published') }} {{$announcement->created_at->format('d/m/Y')}}</p>
                                            </div> 
                                        </div>
                                </div>
                            </div>    
                        @empty
                        <div class="col-12 w-100 text-center">
                            <div class="my-3 text-center">
                                <div class="container-xl text-center">
                                    <h2>{{__('ui.no_category_view_text') }}</h2>
                                    <h3>{{__('ui.create_category_view_text') }} <span class="text-3">{{ $category->name }}</span> ?</h3>

                                    <div class="mt-5 text-center d-flex justify-content-center ">
                                        <a class="btn-custom text-decoration-none" href="{{ route('announcement.create') }}">{{__('ui.create_ads') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

