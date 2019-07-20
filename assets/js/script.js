$(function() {
	//onReady
	$('#tampilModalTambah').on('click', function() {
		//ubah tampilan ketika tombol di klik
		console.log('id tampilModalTambah di klik');
		$('#dataMahasiswaModalLabel').html('Tambah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Tambahkan Data');
		$('#inputNama').val('');
		$('#inputNIM').val('');
		$('#inputEmail').val('');
		$('#selectJurusan').val('-- Pilih Jurusan --');
	});

	$('.tampilModalUbah').on('click', function() {
		//ubah tampilan ketika tombol di klik
		console.log('id tampilModalUbah di klik');
		$('#dataMahasiswaModalLabel').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');

		//get data detail mahasiswa
		const id = $(this).data('id');
		$.ajax({
			url: 'http://localhost/ci_app/mahasiswa/get_detail_to_update',
			method: 'post',
			data: { id: id },
			dataType: 'json',
			success: function(data) {
				$('#id').val(data.id);
				$('#inputNama').val(data.nama);
				$('#inputNIM').val(data.nim);
				$('#inputEmail').val(data.email);
				$('#selectJurusan').val(data.jurusan);
			},
			error: function() {
				console.log('failure');
			}
		});
	});
});
