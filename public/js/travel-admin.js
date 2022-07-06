$(document).ready(function() {
    // Passing data to edit destination modal
    $('.edit-destination').on('click', function() {
        $.ajax({
            url: `/destinations/${$(this).val()}/edit`,
            type: 'GET',
            success: ({ destinations, categories, images }) => {
                console.log(destinations)

                $('#edit-form').attr('action', `/destinations/${destinations.id}`)

                $('#edit-thumbnail-img').attr('src', '/uploads/destinations/thumbnails/' + destinations.thumbnail_img)
                $('#edit-hero-img').attr('src', '/uploads/destinations/heros/' + destinations.hero_img)

                $('#edit-name').val(destinations.name)
                $('#edit-fact').val(destinations.fact)
                $('#edit-review').val(destinations.review)
                $('#edit-price').val(destinations.price)
                $('#edit-time').val(destinations.time)
                $('#edit-location').val(destinations.location)
                $('#edit-description').html(destinations.description)
                
                if(destinations.status == 1) {
                    $('#edit-status').attr('checked', 'checked')
                } else {
                    $('#edit-status').removeAttr('checked', 'checked')
                }

                // images.forEach((item) => {                    
                //     if(item.destination_id == destinations.id) {
                //         $('.edit-hero-container').append(`<img class="m-2" width="100" src="/uploads/destinations/images/${item.image}" alt="">`)
                //     }
                // })

                categories.forEach((item) => {
                    $('#optgroup-categories').append(`<option value="${item.id}">${item.name}</option>`)
                })

                const destination_cate_id = destinations.category_id                

                $('#edit-category_id').val(destination_cate_id)

                // Reset form and image after close the modal
                $('#btn-close').on('click', function() {
                    $('#edit-form')[0].reset()
                    $('.edit-hero-container').html('')
                    $('#edit-thumbnail-img').attr('src', '')                   
                })
            }
        })
    })

    // Passing data to edit category modal
    $('.edit-category').on('click', function() {
        $.ajax({
            url: `/categories/${$(this).val()}/edit`,
            type: 'GET',
            success: ({ categories }) => {

                $('#edit-form-category').attr('action', `/categories/${categories.id}`)
                $('#edit-thumbnail-img-category').attr('src', '/uploads/categories/thumbnails/' + categories.thumbnail)

                $('#edit-name-category').val(categories.name)                
                $('#edit-description-category').html(categories.description)                
            }
        })
    })
})