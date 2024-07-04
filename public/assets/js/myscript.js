const swal = $('.swal').data('swal');
if ('swal') {
    Swal.fire({
        title: 'Data Berhasil',
        text: swal,
        icon: 'success'
    })
}