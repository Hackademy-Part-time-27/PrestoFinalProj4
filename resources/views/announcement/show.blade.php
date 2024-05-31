<x-layout>
<div class="container-fluid p-5  bg-2 shadow mb-4"> 
  <div class="row">
        <div class="col-12  p-5">
           <h1 class="display-2 text-center text-3">{{$announcement->title}} </h1>
        </div> 
  </div>  
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12 text-center">
      <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              @if(!$announcement->images()->get()->isEmpty())
                  @foreach($announcement->images as $key =>$image)
                    <div class="carousel-item text-center  @if($key==0)active @endif">
                      <img style="width: 24rem;" src="{{ Storage::url($image->path)}}" class="" alt="...">
                    </div>
                  @endforeach
              @else
              <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
              @endif
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="text-center fs-4">
                <h3 class="card-title text-3">{{$announcement->title}}</h3>
                <p class="card-text">{{$announcement->body}}</p>
                <p class="card-text text-3">{{Number::currency($announcement->price, in: 'EUR', locale: 'de')}}</p>
                <a href="{{route('announcements.category-filter',['category'=>$announcement->category])}}" class="my-2 border-top pt-2 border-dark card-link sadow btn-btn-success">{{__('ui.category_name') }}: {{$announcement->category->name}}</a>
              </div>
      </div>
  </div>
</div>



</x-layout>

