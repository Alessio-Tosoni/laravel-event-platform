@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
                @foreach ($events as $event)
                    <div class="col">
                        <div class="card">
                            <div class="card-header text-center"><h4>{{ $event->name }}</h4></div>
                            
                            <div class="card-body text-center">
                                <p>{{ $event->description }}</p>
                                <div class="d-flex justify-content-evenly">
                                    <div>{{ $event->location}}</div>
                                    <div>{{ $event->date}}</div>
                                    
                                </div>
                                <div class="card-body text-center">
                                    @if(count($event->tags) > 0 )
                                        @foreach($event->tags as $tag)
                                        <span>{{ $tag->name}}</span>
                                        @endforeach
                                    @else
                                        <span>no tags linked</span>
                                    @endif
                                    
                                    <div class="d-flex justify-content-evenly">
                                        <div class=" mx-1">
                                            <a href="{{ route("admin.events.show", $event->id) }}" class="btn btn-primary">Dettaglio</a>
                                        </div>

                                        <div class=" mx-1">
                                            <a href="{{ route("admin.events.edit", $event->id) }}" class="btn btn-warning">Modifica</a>
                                        </div>

                                        <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Cancella" class="btn btn-danger">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
        
        
                                       