<div class="modal fade" id="editCategoryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fas fa-x"></i></button>
            </div>
            <form id="edit-form-category" class="needs-validation" novalidate action="" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit-name-category" class="col-form-label">Destination Name</label>
                        <input type="text" class="form-control" id="edit-name-category" name="name" required>
                        <div class="invalid-feedback">
                            Category name is required
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
