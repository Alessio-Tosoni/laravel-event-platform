@extends("layouts.app")

@section("content")
<div class="container">
    <div class="row">
       <h1 class="text-center">{{$dettaglio->name}}</h1>
    </div> 

    <div class="row">
        <div class="col-5">
            <p>{{$dettaglio->name}}</p>
           
            <p>{{$dettaglio->description}}</p>
            <p>{{$dettaglio->location}}</p>
            <p>{{$dettaglio->date}}</p>

            
        </div>
       
    </div>

</div>

    
        
       
@endsection