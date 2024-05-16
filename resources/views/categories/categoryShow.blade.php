<x-layout>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="mt-4">
                
                <h1>Benvenuto su {{ config('app.name') }}</h1>
      
            </div>
         

 


</div>
<div class="container mt-4">
           <div class="row">
                @forelse($category->announcements as $announcement)
                <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img class="w-50 img-fluid m-3" src="https://picsum.photos/id/1/200/300" class="card-img-top p-3 rounded" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">{{$announcement->title}}</h5>
                            <p class="card-text">{{$announcement->body}}</p>
                            <p class="card-text">prezzo:{{$announcement->price}}</p>
                            <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>

                            <a href="#" class="btn-custom-2 text-decoration-none">Visualizza</a>
                        </div>
                    </div>
           </div>
           @empty
           <div>
                  <p>Non sono presenti annunci per questa categoria</p>
               
                  <p>Pubblicane uno : <a class="btn-custom text-decoration-none" href="{{route('announcement.create')}}">Crea annuncio  </a> </p>
                 
           </div>
           @endforelse
                </div>
             
                 </div>
        
</div>




</x-layout>