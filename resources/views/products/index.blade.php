@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h1>Products</h1>
                  @auth
                    <a href="{{ route('products.create') }}">
                      New Product
                    </a>
                  @endauth
                </div>

                <div class="card-body">

                  <div class="d-flex flex-wrap justify-content-around">

                    @foreach ($prods as $prod)
                      <div class="card mb-3" style="width: calc(25% - 10px);">
                        <img class="card-img-top" src="{{ $prod -> img }}" alt="Product Image">
                        <div class="card-body">
                          <h5 class="card-title">{{ $prod -> name }}</h5>
                          <p class="card-text">
                            {{ $prod -> short_desc }}
                          </p>
                          <a href="{{ route('products.show', $prod -> id) }}" class="btn btn-primary">Show</a>
                        </div>
                      </div>
                    @endforeach
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
