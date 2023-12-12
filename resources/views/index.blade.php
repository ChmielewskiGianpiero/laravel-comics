@extends('layouts.app')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <h1>pagina card comics</h1>
                <a href="{{ route ('comics')}}">clicca</a>
            </div>
            {{-- @foreach ($comics as $comic)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">{{ $comic->title }}</p>
                    </div>
                </div>
            @endforeach --}}
        </div>
    </section>
    
@endsection