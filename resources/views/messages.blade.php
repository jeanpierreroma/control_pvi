@extends('layouts.app')

@section('title-block')
    All cars page
@endsection

@section('content')
    <div class="wrapper">
        <div class="gallery">
            @foreach($data as $el)
                <div class="item">
                    <div>
                        <img class="front" src="storage/uploads/{{ $el->foto }}" alt="">
                        <div class="back">
                            <p>Компанія: {{$el->Company}}</p>
                            <p>Марка: {{$el->carName}}</p>
                            <p>Класс: {{$el->carClass}}</p>
                            <p>storage/uploads/{{ $el->foto }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <h2>Пошук</h2>
    <form action="{{ route('cars-search') }}" method="post">
        @csrf
        <div class="form-group mb-5">
            <input type="text" name="search" placeholder="Вкажіть назву" id="search" class="form-control mb-2">
            <button type="submit" class="btn btn-success mb-5">Пошук</button>
        </div>
    </form>
@endsection