<div class="container">
   <?php if ($this->session->flashdata()) :  ?>
      <div class="row mt-3">
         <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               Data Mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('data_mahasiswa'); ?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
         </div>
      </div>
   <?php endif; ?>
   <div class="row mt-4">
      <div class="col-md-6">
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahDataMahasiswaModal">
            Tambah Data Mahasiswa
         </button>
         <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
               <?= validation_errors(); ?>
            </div>
         <?php endif; ?>
      </div>
   </div>
   <div class="row mt-3">
      <div class="col-md-6">
         <h3>Daftar Mahasiswa</h3>
         <ul class="list-group">
            <?php foreach ($mahasiswa as $mhs) : ?>
               <li class="list-group-item">
                  <?= $mhs['nama'] ?>
                  <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-right" onclick="return confirm('Anda akan menghapus data <?= $mhs['nama'] ?>')"> Hapus</a>
                  <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-info float-right"> Lihat Detail</a>
                  <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id'] ?>" class="badge badge-warning float-right" onclick="return confirm('Anda akan menghapus data <?= $mhs['nama'] ?>')"> Ubah</a>
                  <!-- mahasiswa/hapus/< $mhs['id'] > (jika ada data yang akan dikirimkan) -->
                  <!-- mahasiswa/hapus (jika tidak ada data yang akan dikirimkan) -->
               </li>
            <?php endforeach ?>
         </ul>
      </div>
   </div>
</div>


<!-- Modal -->
<div class="modal fade" id="tambahDataMahasiswaModal" tabindex="-1" role="dialog" aria-labelledby="tambahDataMahasiswaModalLabel" aria-hidden="true" data-backdrop="static">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="tambahDataMahasiswaModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">

            <form action="<?= base_url(); ?>mahasiswa/tambah" method="post">
               <div class="form-group">
                  <label for="inputNama">Nama Mahasiswa</label>
                  <input type="text" class="form-control" id="inputNama" placeholder="Masukkan Nama Mahasiswa" name="nama">
               </div>
               <div class="form-group">
                  <label for="inputNIM">NIM</label>
                  <input type="number" class="form-control" id="inputNIM" placeholder="Masukkan NIM Mahasiswa" name="nim">
               </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alamat Email" name="email">
                  <small id="emailHelp" class="form-text text-muted">Kami tidak akan membagikan alamat email Anda kepada orang lain.</small>
               </div>
               <div class="form-group">
                  <label for="selectJurusan">Jurusan</label>
                  <select class="form-control" id="selectJurusan" name="jurusan">
                     <option>Teknik Informatika</option>
                     <option>Teknik Komputer</option>
                     <option>Sistem Informasi</option>
                     <option>Desain Interior</option>
                     <option>Desain Komunikasi Visual</option>
                     <option>Ilmu Komunikasi</option>
                  </select>
               </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Tambahkan Data Mahasiswa</button>
            </form>
         </div>
      </div>
   </div>
</div>