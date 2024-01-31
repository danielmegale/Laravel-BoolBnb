@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5 text-center">Inserisci i campi richiesti</h1>
        <form action="{{ route('user.houses.store') }}" method="POST" id="form-houses" enctype="multipart/form-data"
            data-type="create">
            @include('includes.form')
        </form>
    </div>
@endsection

@section('scripts')
    @vite(['resources/js/scriptAddress.js'])
    @vite(['resources/js/scriptPreview.js'])
@endsection
