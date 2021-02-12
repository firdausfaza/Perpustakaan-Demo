<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

<div class="card mb-3">

          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Buku</div>
          <div class="card-body">
            <div class="table-responsive">
              <?php
              include "../koneksi.php";
              $tampil = mysqli_query($menyambung,"SELECT * FROM tbbuku");

              ?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <div class="text-left">
                  <a href="?hal=TambahBuku" class="btn btn-primary">Tambah Buku <i class="fa fa-book"></i> </a> 
                  
                </div>
                <br>
                <thead>
                  <tr>
                    <th>no</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Stok</th>
                    <th>ISBN</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
               
                <tbody>
                    <?php
                      while($data = mysqli_fetch_array($tampil)){


                    ?>
             
                  <tr>
                    <td><?php echo $data['isbn'] ?></td>
                    <td><?php echo $data['judul_buku'] ?></td>
                    <td><?php echo $data['pengarang'] ?></td>
                    <td><?php echo $data['tahun_terbit'] ?></td>
                     <td><?php echo $data['stok'] ?></td>
                     <td><?php echo $data['ib'] ?></td>
                    <td>
                      <a class="btn btn-primary" href="beranda.php?hal=InfoBuku&isbn=<?php echo $data['isbn'] ?>">Info Buku</a>
                      <a class="btn btn-success" href="beranda.php?hal=UbahBuku&isbn=<?php echo $data['isbn'] ?>">Ubah</a>
                      <a class="btn btn-warning" onclick="return confirm('Apakah Anda Yakin Menghapus Buku Ini?')" href="HapusBuku.php?isbn=<?php echo $data['isbn'] ?>">Hapus</a>
                    </td>
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