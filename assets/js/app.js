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
// Hapus notif
function showhapus(from, align){
    $.notify({
        icon: "add_alert",
        message: "Data Berhasil Di hapus "

    },{
        type: 'danger',
        timer: 4000,
        placement: {
            from: from,
            align: align
        }
    });
}
