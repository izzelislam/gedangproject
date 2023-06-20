<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<form action="{{ $route.Crypt::encrypt($id) }}" class="d-inline" method="POST">
  @csrf
  @method('DELETE')
  <button 
    type="button" 
    class="btn btn-icon btn-danger delete_confirm"
    data-bs-toggle="tooltip"
    data-bs-offset="0,01"
    data-bs-placement="left"
    data-bs-html="true"
    title="<span>Delete Data</span>"
  >
    <span class="ti ti-trash"></span>
  </button>
</form>

<script>
  $('.delete_confirm').click(function(event) {
  var form =  $(this).closest("form");
  event.preventDefault();
  Swal.fire({
    title: 'Apakah anda yakin?',
    text: "data yang anda hapus tidak dapat kembali lagi!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Iya, hapus!'
  }).then((result) => {
    if (result.isConfirmed) {
      form.submit();
      Swal.fire(
        'Berhasil!',
      'data berhasil dihapus.',
      'success'
    )
  }
  })
});
</script>