<div class="modal fade" id="inputModal" tabindex="-1" aria-labelledby="inputModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inputModalLabel">Create Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="resetForm()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="productForm"
                    hx-post="/api/products"
                    hx-trigger="submit"
                    hx-target="#product-list"
                    hx-swap="innerHTML swap:0.5s">
                    <div class="form-group">
                        <label for="productName">Name</label>
                        <input type="text" class="form-control" id="productName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="productDescription">Description</label>
                        <textarea class="form-control" id="productDescription" name="description" required rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="productPrice">Price</label>
                        <input type="number" class="form-control" id="productPrice" name="price" required step="0.01">
                    </div>
                    <div class="form-group">
                        <label for="productQuantity">Quantity</label>
                        <input type="number" class="form-control" id="productQuantity" name="quantity" required>
                    </div>
                    <div id="addProductMessage"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="resetForm()">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function resetForm() {
        document.getElementById('productForm').reset();
        document.getElementById('addProductMessage').classList.add('hidden');
    }
    document.addEventListener('htmx:afterSwap', (event) => {
        if (event.detail.target.id === 'product-list') {
            const newProduct = event.detail.target.firstElementChild;
            newProduct.classList.add('fade-in');
        }
    });
</script>
