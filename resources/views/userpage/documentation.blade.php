@extends('layout.layout')

@section('title', 'Dokumentasi Donasi - HopeAid')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">Dokumentasi Donasi</h1>
    <p class="text-center text-muted mb-5">
        Terima kasih atas donasi Anda! Berikut adalah beberapa momen di mana donasi Anda telah membantu para korban bencana.
    </p>
    @if($documentations->count() > 0)
        <div class="d-flex flex-wrap">
            @foreach($documentations as $doc)
            <div class="card ms-5 mt-5" style="width: 18rem;">
                <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            @endforeach
        </div>  
    @else
        <div class="text-center">
            <p class="text-muted">Belum ada dokumentasi donasi yang tersedia.</p>
        </div>
    @endif
</div>
@endsection
