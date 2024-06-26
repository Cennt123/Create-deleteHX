@extends('templates.base')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-4xl font-bold text-gray-800">Products</h1>
        <form hx-get="/api/products"
              hx-target="#products-list"
              hx-trigger="submit"
              class="flex items-center">
            <input type="text"
                   name="filter"
                   class="p-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                   placeholder="Search product">
            <button type="submit" class="btn bg-blue-500 text-white px-4 py-2 rounded-r-md hover:bg-blue-700 transition duration-300">Search</button>
        </form>
        <button id="openModalBtn" class="btn bg-blue-500 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-blue-700 transition duration-300">Add Product</button>
    </div>
    <hr class="my-4 border-gray-300">
    <div id="products-list" class="flex flex-wrap gap-4" hx-get="/api/products" hx-trigger="load" hx-swap="innerHTML"></div>

    <div id="myModal" class="modal fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="modal-content bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-xl font-bold mb-4">Add Product</h2>
            <form id="modalForm" hx-post="/api/products" hx-target="#products-list" hx-swap="innerHTML">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 mb-2">Product Name</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 mb-2">Description</label>
                    <textarea id="description" name="description" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-gray-700 mb-2">Price</label>
                    <input type="number" id="price" name="price" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="quantity" class="block text-gray-700 mb-2">Quantity</label>
                    <input type="number" id="quantity" name="quantity" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex justify-end space-x-3">
                    <button type="button" class="btn bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700 transition duration-300" onclick="closeModal()">Cancel</button>
                    <button type="submit" class="btn bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById("openModalBtn").addEventListener('click', function() {
        var modal = document.getElementById("myModal");
        modal.classList.remove("hidden");
    });
});

function closeModal() {
    var modal = document.querySelector('.modal');
    if (modal) {
        modal.classList.add('hidden');
    }

    var inputs = document.querySelectorAll('#modalForm input');
    inputs.forEach(function(input) {
        input.value = '';
    });

    var message = document.getElementById('message');
    var name_message = document.getElementById('name_message');
    var description_message = document.getElementById('description_message');
    var price_message = document.getElementById('price_message');
    var quantity_message = document.getElementById('quantity_message');

    if (message) {
        message.style.display = 'none';
    }
    if (name_message) {
        name_message.style.display = 'none';
    }
    if (description_message) {
        description_message.style.display = 'none';
    }
    if (price_message) {
        price_message.style.display = 'none';
    }
    if (quantity_message) {
        quantity_message.style.display = 'none';
    }
}
</script>
@endsection
