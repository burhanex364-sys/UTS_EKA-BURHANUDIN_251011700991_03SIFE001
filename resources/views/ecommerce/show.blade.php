@extends('layouts.app')

@section('title', 'Detail Produk - ' . $product->name)

@section('content')
    <div class="mb-3">
        <a href="{{ route('ecommerce.index') }}" class="btn btn-outline-dark">
            &larr; Kembali ke Katalog
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="row g-0">
            <div class="col-md-5">
                <img
                    src="{{ asset('assets/images/' . $product->image) }}"
                    class="img-fluid rounded-start w-100"
                    alt="{{ $product->name }}"
                    style="height: 400px; object-fit: contain; padding: 20px;"
                >
            </div>

            <div class="col-md-7">
                <div class="card-body p-4">
                    <span class="badge bg-secondary mb-3">
                        {{ $product->category }}
                    </span>

                    <h1 class="h2 fw-bold">{{ $product->name }}</h1>

                    <h3 class="text-primary fw-bold my-3">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </h3>

                    <hr>

                    <h5>Deskripsi Produk</h5>
                    <p class="text-muted">{{ $product->description }}</p>

                    <a href="{{ route('ecommerce.index') }}" class="btn btn-dark mt-3">
                        Kembali Belanja
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection