$('.delete').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href')

    Swal.fire({
        type: 'warning',
        title: 'Confirm Delete!',
        text: 'Are you sure you want to delete this record?',
        showCancelButton: true,
        confirmButtonColor: '#fd3636',
        cancelButtonColor: '#00fd22',
        confirmButtonText: 'Delete',
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
})