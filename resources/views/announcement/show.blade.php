<x-layout>
<div class="container-fluid p-5  bg-2 shadow mb-4"> 
  <div class="row">
        <div class="col-12  p-5">
           <h1 class="display-2 text-center text-3">{{$announcement->title}} </h1>
        </div> 
  </div>  
</div>

<div class="container">
   <div class="row ">
        <div class="col-12 mx-auto">
            <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  @if($announcement->images)
                      @foreach($announcement->images as $key => $image)
                      <div class="carousel-item @if($key==0) active @endif ">
                          <img src="{{Storage::url($image->path)}}" class="img-fluid w-30 rounded" alt="">
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
                <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                data-bs-slide="prev">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Next</span>
              </button>
            </div>
              <h5 class="card-title">Titolo {{$announcement->title}}</h5>
              <p class="card-text">Descrizione: {{$announcement->body}}</p>
              <p class="card-text">Prezzo: {{$announcement->price}}</p>
              <a href="{{route('announcements.category-filter',['category'=>$announcement->category])}}" class="my-2 border-top pt-2 border-dark card-link sadow btn-btn-success">Categoria: {{$announcement->category->name}}</a>
         
        </div>
    </div>
</div>
</x-layout>

