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
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
        
        
                                       