const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal({
        title: 'Data Kontak ',
        text: 'Berhasil ' + flashData,
        type: 'success'
    });
}

// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin',
        text: "data kontak akan dihapus",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});

// tombol-ubah
$('.tombol-ubah').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        text: "data kontak diubah",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});