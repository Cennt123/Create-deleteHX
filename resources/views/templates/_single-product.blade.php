<div class="p-4 rounded bg-blue-200 w-auto m-2 fade-me-out" id="product{{$product->id}}">

    @include('templates._confirm-delete-product', ['prod'=>$product])

    <h3 class='text-2xl'>{{ $product->name }}</h3>
    <div class='italic text-gray-500'>
        {{ $product->description }}
    </div>
    <div class=' text-left text-gray-500'>Quantity: {{ $product->quantity }}</div>
    <div class='text-red-500 text-4xl text-right'>₱{{ $product->price }}</div>

    <div class='mt-auto flex justify-between'>
        <button class="py-2 px-4 bg-red-300 border border-red-400 text-red-600 rounded mt-3"
            onclick="document.getElementById('deleteProduct{{$product->id}}').classList.remove('hidden')">
            Delete
        </button>
    </div>
</div>



