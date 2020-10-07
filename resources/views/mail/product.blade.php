@extends('mail.layouts.app')

@section('content')

  <h2>
    {{ $user -> name }}: {{ $action }}
  </h2>

  <ul>
    <li>
      PRODUCT: {{ $prod -> name }}
    </li>
    <li>
      SHORT DESC: {{ $prod -> short_desc }}
    </li>
    <li>
      DESC: {{ $prod -> desc }}
    </li>
    <li>
      PRICE: {{ $prod -> price }}
    </li>
    <li>
      QTY: {{ $prod -> qty }}
    </li>
    <li>
      <img src="{{ $prod -> img }}" alt="{{ $prod -> img }}">
    </li>
  </ul>

@endsection
