@extends('layouts.app')

@section('title-block')
    Admin page
@endsection

@section('content')
    <h1>Сторінка адміна</h1>



    <form action="{{ route('admin-form') }}" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="Company">Компанія</label>
            <input type="text" name="Company" placeholder="Введіть назву компанії" id="Company" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="carName">Назва</label>
            <input type="text" name="carName" placeholder="Введіть назву машини" id="carName" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="carClass">Клас</label>
            <input type="text" name="carClass" placeholder="Введіть клас машини" id="carClass" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="foto">Вставте фото</label>
            <input type="file" name="foto" id="foto" class="form-control">
        </div>

            <button type="submit" class="btn btn-success">Відправити</button>
    </form>
@endsection