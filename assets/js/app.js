function showsuccess(from, align){

    $.notify({
        icon: "add_alert",
        message: "Data Berhasil Di Tambahkan "

    },{
        type: 'success',
        timer: 4000,
        placement: {
            from: from,
            align: align
        }
    });

}

function hapus() {
    $.ready(function () {
        $('#tombol').on('click' , function () {
            console.log('ahh ahh ahh ');
        })
    })
}