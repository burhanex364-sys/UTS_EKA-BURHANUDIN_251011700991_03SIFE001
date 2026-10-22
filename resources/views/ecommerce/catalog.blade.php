@extends('layouts.app')

@section('title', 'Katalog - The Midnight Owl')

@section('content')
<div class="text-center mb-4">
    <h1 class="fw-bold text-white">Koleksi The Midnight Owl</h1>
    <p class="text-white">
        Temukan pakaian yang sesuai dengan gaya dan kebutuhanmu.
    </p>
</div>

<form action="{{ route('ecommerce.catalog') }}" method="GET" class="mb-4">
    <div class="input-group mx-auto" style="max-width: 600px;">
        <input
            type="search"
            name="search"
            class="form-control"
            placeholder="Cari nama baju..."
            value="{{ $search ?? '' }}"
            aria-label="Cari nama baju">

        <button type="submit" class="btn btn-dark">Cari</button>

        @if (!empty($search))
        <a href="{{ route('ecommerce.catalog') }}"
            class="btn btn-outline-secondary">Reset</a>
        @endif
    </div>
</form>

<div class="row g-4">
    @forelse ($products as $product)
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card h-100 shadow-sm">
            <img
                src="{{ asset('assets/images/' . $product->image) }}"
                class="card-img-top"
                alt="{{ $product->name }}"
                style="height: 250px; object-fit: contain; padding: 10px;">

            <div class="card-body d-flex flex-column">
                <span class="badge bg-secondary align-self-start mb-2">
                    {{ $product->category }}
                </span>

                <h5 class="card-title fw-bold">{{ $product->name }}</h5>

                <p class="card-text text-muted">
                    {{ $product->description }}
                </p>

                <p class="fw-bold text-primary fs-5 mt-auto">
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </p>

                <a href="{{ route('ecommerce.show', $product->id) }}"
                    class="btn btn-dark w-100">
                    Lihat Detail
                </a>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12">
        <div class="alert alert-info text-center">
            Produk tidak ditemukan.
        </div>
    </div>
    @endforelse
</div>
@endsection