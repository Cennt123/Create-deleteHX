<div class="modal-header flex justify-between items-center border-b pb-2">
    <h4 class="text-xl">Create Product</h4>
</div>
<div class="modal-body my-4">
    <form id="modalForm" hx-post="api/create-product" hx-target="#products-list" hx-swap="afterbegin" hx-swap-delay="1500">
       <div class="form-group">
            <label for="name" class="block mt-2">Name:</label>
            <input type="text" id="name" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter product name" name="name">
        </div>
        <div id="name_message"></div>

        <div class="form-group">
            <label for="description" class="block mt-2">Description:</label>
            <input type="text" id="description" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter product description" name="description">
        </div>
        <div id="description_message"></div>

        <div class="form-group">
            <label for="price" class="block mt-2">Price:</label>
            <input type="text" id="price" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter product price" name="price">
        </div>
        <div id="price_message"></div>

        <div class="form-group">
            <label for="quantity" class="block mt-2">Quantity:</label>
            <input type="text" id="quantity" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter product quantity" name="quantity">
        </div>
        <div id="quantity_message"></div>

        <div id="message"></div>

        <button type="submit" class="btn bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">Add</button>
        <button type="button" onclick="closeModal()" class="btn bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700 transition duration-300">Close</button>
    </form>
</div>
