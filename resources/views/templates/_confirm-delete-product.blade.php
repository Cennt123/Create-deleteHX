<div id="deleteProduct{{$product->id}}" class="fixed inset-0 bg-gray-600 bg-opacity-80 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Delete Product
                    </h3>
                    <div class="mt-2">
                        <div class="py-3">
                            You are about to delete this product: <br>
                            <strong>{{$product->name}}</strong> ({{$product->description}})
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between">
            <button class="py-2 px-4 rounded bg-gray-200 border border-gray-400 text-gray-800"
                onclick="document.getElementById('deleteProduct{{$product->id}}').classList.add('hidden')">
                Cancel
            </button>
            <button class="py-2 px-4 rounded bg-red-200 border border-red-400 text-red-600"
                hx-delete="/api/products/{{$product->id}}"
                hx-target="#product{{$product->id}}"
                hx-swap="outerHTML swap:1.1s">
                Delete
            </button>

        </div>
    </div>
</div>


