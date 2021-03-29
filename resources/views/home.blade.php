@extends('layout.main')

@section('title', 'Web Satria')

@section('container')

<div class="container-fluid p-3 bg-light text-justify">
    <img src="fibonacci.jpg" width="100%" height="280px">
    <p>Bilangan fibonacci adalah deretan angka sederhana yang susunan angkanya merupakan
        penjumlahan dari dua angka sebelumnya (0,1,1,2,3,5,8,...dst)
        rumus deret Fibonacci bisa ditulis sebagai berikut Un = Un-2 + Un-1,
        suku ke-n perupakan penjumlahan dari dua suku sebelumnya.</p>
</div>
@endsection
