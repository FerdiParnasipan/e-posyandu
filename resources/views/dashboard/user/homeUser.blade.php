@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat datang di E-POSYANDU, {{Auth::user()->name}}</h1>
</div>

<div class="container">
    <div class="row justify-content-start">
        <div class="new2">
            <img src={{ asset('image/1.JPG') }} style="width : 100%"
        </div>
@endsection