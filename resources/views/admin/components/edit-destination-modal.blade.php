<div class="modal fade" id="editDestinationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editDestinationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDestinationModalLabel">Edit Destination</h5>
                <button type="button" class="btn" id="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fas fa-x"></i></button>
            </div>
            <form id="edit-form" class="needs-validation" novalidate action="" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <img id="edit-thumbnail-img" class="d-block mb-3" width="150" src="" alt="">
                        <label for="edit-thumbnail" class="col-form-label">Thumbnail</label>
                        <input class="form-control" type="file" id="edit-thumbnail" name="thumbnail_img">
                    </div>
                    <div class="mb-3">
                        <img id="edit-hero-img" class="d-block mb-3" width="150" src="" alt="">
                        <label for="edit-hero" class="col-form-label">Hero</label>
                        <input class="form-control" type="file" id="edit-hero" name="hero_img">
                    </div>
                    {{-- <div class="mb-3">
                        <div class="edit-hero-container"></div>
                        <label for="images" class="col-form-label">Hero Images</label>
                        <input class="form-control" type="file" id="images" name="images[]" multiple>
                    </div> --}}
                    <div class="mb-3">
                        <label for="edit-name" class="col-form-label">Destination Name</label>
                        <input type="text" class="form-control" id="edit-name" name="name" required>
                        <div class="invalid-feedback">
                            Destination name is required
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="edit-category_id" class="col-form-label">Category</label>
                            <select class="form-control form-select" id="edit-category_id" name="category_id"
                                aria-label="Default select example">
                                <optgroup label="Select Category" id="optgroup-categories">

                                </optgroup>
                            </select>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="edit-location" class="col-form-label">Location</label>
                            <input type="text" class="form-control" id="edit-location" name="location" required>
                            <div class="invalid-feedback">
                                Location is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="edit-price" class="col-form-label">Price</label>
                            <input type="text" class="form-control" id="edit-price" name="price" required>
                            <div class="invalid-feedback">
                                Price is required
                            </div>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="edit-time" class="col-form-label">Time</label>
                            <input type="text" class="form-control" id="edit-time" name="time" required>
                            <div class="invalid-feedback">
                                Time is required
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="edit-description" class="col-form-label">Description</label>
                        <textarea class="form-control" rows="6" name="description" id="edit-description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="edit-status">
                            Status
                        </label>
                        <label class="switch">
                            <input type="checkbox" id="edit-status" name="status">
                            <span class="slider"></span>
                            {{-- <p class="off">No</p>
                            <p class="on">Yes</p> --}}
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
