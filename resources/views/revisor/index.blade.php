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
        <div class="row mx-auto justify-content-center">
            <div class="col-12 col-lg-6">
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
            <div class="col-12 col-lg-3 mt-2">
                <p>Tags</p>
                <div class="mt-2">
                    @if($image->labels)
                        @foreach($image->labels as $label)
                            <p class="d-inline">{{ $label }}</p>
                        @endforeach
                    @endif        
                </div>
                
            </div>
            <div class="col-12 col-lg-3 mt-2">
                        <div class="card-body"></div>
                        <h5 class="tc-accent">Revisioni Immagini</h5>
                        <p>Adulti: <span class="{{$image->adult}}"></span></p>
                        <p>Satira: <span class="{{$image->spoof}}"></span></p>
                        <p>Medicina: <span class="{{$image->medical}}"></span></p>
                        <p>Violenza: <span class="{{$image->violence}}"></span></p>
                        <p>Contenuto Ammicante: <span class="{{$image->racy}}"></span></p>
                        </div>
              </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="row justify-content-start w-100 ">
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