
@extends('templates.base')

@section('content')
    @include('templates._create-form')

    <div class="flex justify-between items-center">
        <h1 class="text-xl flex-1 text-white">Products</h1>
        <form
            hx-get="/api/products"
            hx-target="#product-list"
            hx-trigger="submit"
            hx-swap="innerHTML "
        >
            <input type="text" name="filter" class="p-2 border border-gray-300 rounded mb-2" autocomplete="off">
        </form>
        <button class="btn btn-primary ml-3 mb-2" data-toggle="modal" data-target="#inputModal">
            ADD
        </button>
    </div>
    <hr>
    <div id="product-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3"
        hx-get="/api/products"
        hx-trigger="load delay:0ms"
        hx-swap="innerHTML"
    ></div>


@endsection
