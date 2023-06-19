@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="">Products</h1>
    <div class=" row justify-content-center">
        @foreach ($data->products as $product)
            <div class=" col-3 my-2">
                <div class="card">
                    <div class="card-header">{{ $product->name }}</div>
                    <div class="card-body d-flex">
                        <button class=" btn btn-warning">Add to cart</button>
                        <button class=" btn ">Buy now</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
