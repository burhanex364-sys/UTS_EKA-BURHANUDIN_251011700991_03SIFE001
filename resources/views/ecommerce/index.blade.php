@extends('layouts.app')

@section('title', 'Beranda - The Midnight Owl')

@section('content')
<div class="row justify-content-center py-0">
    <div class="col-lg-3 col-xl-10">
        <div class="rounded-4 p-4 p-md-5 text-center"
            style="background: rgba(16, 24, 39, 0.82);">

            <h1 class="display-5 fw-bold text-white mb-3">
                The Midnight Owl
            </h1>

            <p class="lead text-white mb-4">
                Temukan Gaya Terbaikmu di The Midnight Owl.
            </p>

            <hr class="border-light opacity-50">

            <h2 class="h4 fw-bold text-white mt-4 mb-3">
                Tentang Kami
            </h2>

            <p class="text-white text-start">
                The Midnight Owl adalah toko fashion online yang menyediakan
                berbagai pilihan pakaian untuk menunjang gaya dan aktivitas
                sehari-hari.
            </p>

            <p class="text-white text-start">
                Kami menghadirkan enam kategori pakaian, yaitu Kaos,
                Kemeja, Polo, Sweater &amp; Hoodie, Jaket, dan Celana.
                Setiap kategori memudahkan pengunjung menemukan jenis
                pakaian sesuai kebutuhan dan gaya masing-masing.
            </p>

            <p class="text-white text-start mb-4">
                Website ini dirancang agar pengunjung dapat menjelajahi
                kategori, mencari produk, serta melihat informasi dan
                harga pakaian dengan mudah.
            </p>

            <a href="{{ route('ecommerce.catalog') }}"
                class="btn btn-primary btn-lg">
                Jelajahi Koleksi
            </a>
        </div>
    </div>
</div>
@endsection