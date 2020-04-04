const deleteData = (id)=>{
  event.preventDefault();
  Swal.fire({
  title: 'Apa anda Yakin?',
  text: "Anda Tidak Bisa Mengurungkan Tindakan Ini!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    window.location = "index.php?proses=hapus&&id="+id;
  }
})
}
