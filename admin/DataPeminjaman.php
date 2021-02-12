<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data Peminjaman buku</li>
        </ol>

<div class="card mb-3">

          <div class="card-header">
            <i class="fas fa-arrow-left"></i>
            Data Peminjaman Buku</div>
          <div class="card-body">
            <div class="table-responsive">
            	<?php
            	include "../koneksi.php";
            	$tampil = mysqli_query($menyambung,"SELECT * from tbpeminjaman left join tbbuku on tbpeminjaman.isbn = tbbuku.isbn left join tbanggota on tbpeminjaman.id_anggota = tbanggota.id_anggota where tbpeminjaman.status = 'Pinjam'");

            	?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<div class="text-left">
              		<a href="?hal=Peminjaman" class="btn btn-primary">Tambah Data <i class="fa fa-book"></i> </a> 
              		
              	</div>
              	<br>
                <thead>
                  <tr>
                    <th>Id Pinjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Kembali</th>
                    <th>Nama Anggota</th>
                    <th>aksi</th>
                    
                  </tr>
                </thead>
               
                <tbody>
                  	<?php
                  		while($data = mysqli_fetch_array($tampil)){


                  	?>
             
                  <tr>
                    <td><?php echo $data['id_pinjam'] ?></td>
                    <td><?php echo $data['tgl_pinjam'] ?></td>
                    <td><?php echo $data['judul_buku'] ?></td>
                    <td><?php echo $data['tgl_kembali'] ?></td>
                     <td><?php echo $data['nama_anggota'] ?></td>
                      <td><a class="btn btn-warning" onclick="return confirm('Apakah Anda Yakin Menghapus Buku Ini Dari Daftar Peminjaman?')" href="HapusPinjaman.php?id=<?php echo $data['id_pinjam'] ?>">Pengembalian</a></td>
                    
                  </tr>
                  
                </tbody>
                <?php
            	}
            ?>
              </table>
            </div>
          </div>
         
        </div>

      </div>