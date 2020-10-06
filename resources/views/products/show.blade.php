@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h1>Product: {{ $prod -> name }}</h1>
                  <a href="{{ route('products.index') }}">Index Products</a>
                </div>

                <div class="card-body">

                  <div class="media">
                    <img class="mr-3" src="{{ $prod -> img }}" alt="Product Image">
                    <div class="media-body">
                      <h3 class="mt-0 mb-1">{{ $prod -> name }}</h3>
                      <ul class="list-unstyled">
                        <li>
                          SHORT DESC: {{ $prod -> short_desc }}
                        </li>
                        <li>
                          DESC: {{ $prod -> desc }}
                        </li>
                        <li>
                          QUANTITY: {{ $prod -> qty }}
                        </li>
                        <li>
                          PRICE: {{ $prod -> price }} $
                        </li>
                        @auth
                          <li>
                            <a class="btn btn-primary"
                              href="{{ route('products.edit', $prod -> id) }}">
                              Edit
                            </a>
                            <a class="btn btn-danger"
                              href="{{ route('products.destroy', $prod -> id) }}">
                              Delete
                            </a>
                          </li>
                        @endauth
                      </ul>
                    </div>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
