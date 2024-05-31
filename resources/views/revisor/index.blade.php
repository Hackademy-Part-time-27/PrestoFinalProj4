<x-layout>
<div class="row bg-2 m-0 py-4 w-100">
    <div class="col-md-8 mx-auto py-4 " >  
        <h1>
            {{$announcement_to_check ? __('ui.revisor_ads_page_text')  : __('ui.no_revisor_ads_page_text') }}
        </h1>
        <div class="col-4">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    </div>

</div>
@if(!$announcement_to_check)
        <div class="container pt-3 ">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                <div>
                    <a class="btn btn-xl btn-secondary text-decoration-none " href="{{ route('revisor.getBack') }}">{{__('ui.come_back_button') }}</a>
                </div>
                </div>
            </div>
        </div>
 @else       
    <div class="container">
        <div class="row mx-auto">
            <div class="col-lg-12">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        @if($announcement_to_check->images)
                            @foreach($announcement_to_check->images as $key => $image)
                                <div class="carousel-item @if($key == 0) active @endif text-center">
                                    <img class="img-fluid" style="width:300px; height:auto;" src="{{ $image->getUrl(300,300)  }}" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        @else
                            
                            <div class="carousel-item active">
                                <img class="img-fluid" src="https://picsum.photos/200/300?grayscale" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="https://picsum.photos/200/300?grayscale" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="https://picsum.photos/200/300?grayscale" class="d-block w-100" alt="...">
                            </div>
                        @endif
                    </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                </div>
                <div class="mt-2">
                    <h3>{{__('ui.revisor_ads_title') }}{{ $announcement_to_check->title }}</h3>
                    <p>{{__('ui.revisor_ads_description') }} {{ $announcement_to_check->body }} </p>
                    <p>{{__('ui.ads_published') }} {{ $announcement_to_check->created_at->format('D/m/Y') }} </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col-lg-12">
                <div class="row justify-content-start w-75 ">
                    <div class="col">
                        <form action="{{ route('revisor.accept_announcement',['announcement' => $announcement_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-success" type="submit">{{__('ui.revisor_accept') }}</button>                        
                        </form>
                    </div>
                    <div class="col">
                        <form action="{{ route('revisor.reject_announcement',['announcement' => $announcement_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-danger" type="submit">{{__('ui.revisor_refuse') }}</button>                        
                        </form>
                    </div>
                    <div class="col">
                    <div>
                        <a class="btn btn-xl btn-secondary text-decoration-none " href="{{ route('revisor.getBack') }}">{{__('ui.come_back_button') }}</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
@endif
</x-layout>