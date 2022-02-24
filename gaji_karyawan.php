<?php

?>
<section id="content">
        <!--breadcrumbs start-->
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h2 class="left">Halaman Gaji Karyawan</h2>
                <ol class="breadcrumb">
                  </li>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->

<table class="table display" id="data-table-simple" cellspacing="5">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="nama">Nama</th>
              <th data-field="gaji">Gaji (Perbulan)</th>
              <th data-field="level">Level Jabatan</th>
              <th data-field="region">Region</th>
          </tr>
        </thead>
        <tbody>
        <?php 
		include('koneksi.php');
		$pgn=$mysqli->query("select * from karyawan");

		while($pg=mysqli_fetch_array($pgn)){
		?>
          <tr>
            <td><?php echo $pg['ID'] ?></td>
            <td><?php echo $pg['nama'] ?></td>
            <td><?php echo $pg['gaji'] ?></td>
            <td><?php echo $pg['level_jabatan'] ?></td>
            <td><?php echo $pg['region'] ?></td>
          </tr>
         <?php 
		 }
		 ?>
        </tbody>
      </table>
      <br />
   </div>     
</section>

<?php

?>
<section id="content">
        <!--breadcrumbs start-->
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h3 class="left">a. Bila gaji lebih dari Rp15.000.000, maka karyawan mendapat tunjangan 10% dari gaji, namun jika di bawah Rp15.000.000 tapi di atas Rp10.000.000 karyawan mendapat tunjangan 12% dari gaji, selainnya mendapat 15% dari gaji.</h3>
                <ol class="breadcrumb">
                  </li>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->

<table class="table display" id="data-table-simple" cellspacing="5">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="nama">Nama</th>
              <th data-field="gaji">Gaji (Perbulan)</th>
              <th data-field="level">Level Jabatan</th>
              <th data-field="region">Region</th>
          </tr>
        </thead>
        <tbody>
        <?php 
		include('koneksi.php');
		$pgn=$mysqli->query("select * from pertanyaan_a");

		while($pg=mysqli_fetch_array($pgn)){
		?>
          <tr>
            <td><?php echo $pg['ID'] ?></td>
            <td><?php echo $pg['nama'] ?></td>
            <td><?php echo $pg['gaji'] ?></td>
            <td><?php echo $pg['level_jabatan'] ?></td>
            <td><?php echo $pg['region'] ?></td>
          </tr>
         <?php 
		 }
		 ?>
        </tbody>
      </table>
      <br />
   </div>     
</section>

<?php

?>
<section id="content">
        <!--breadcrumbs start-->
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h3 class="left">b. Bila karyawan tersebut berada di region Jakarta, maka pendapatan total karyawan dipotong 2.5%, jika berada di Bandung, maka dipotong 2%, selainnya 1.8%.</h3>
                <ol class="breadcrumb">
                  </li>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->

<table class="table display" id="data-table-simple" cellspacing="5">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="nama">Nama</th>
              <th data-field="gaji">Gaji (Perbulan)</th>
              <th data-field="level">Level Jabatan</th>
              <th data-field="region">Region</th>
          </tr>
        </thead>
        <tbody>
        <?php 
		include('koneksi.php');
		$pgn=$mysqli->query("select * from pertanyaan_b");

		while($pg=mysqli_fetch_array($pgn)){
		?>
          <tr>
            <td><?php echo $pg['ID'] ?></td>
            <td><?php echo $pg['nama'] ?></td>
            <td><?php echo $pg['gaji'] ?></td>
            <td><?php echo $pg['level_jabatan'] ?></td>
            <td><?php echo $pg['region'] ?></td>
          </tr>
         <?php 
		 }
		 ?>
        </tbody>
      </table>
      <br />
   </div>     
</section>

<?php

?>
<section id="content">
        <!--breadcrumbs start-->
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h3 class="left">c. Selain mendapatkan tunjangan, karyawan juga mendapatkan bonus per bulan bergantung pada level jabatannya, untuk Manager mendapat Rp250.000, Ass. Manager Rp175.000, Senior Officer Rp150.000, Middle Officer Rp125.000, dan Junior Officer Rp.100.000.</h3>
                <ol class="breadcrumb">
                  </li>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->

<table class="table display" id="data-table-simple" cellspacing="5">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="nama">Nama</th>
              <th data-field="gaji">Gaji (Perbulan)</th>
              <th data-field="level">Level Jabatan</th>
              <th data-field="region">Region</th>
          </tr>
        </thead>
        <tbody>
        <?php 
		include('koneksi.php');
		$pgn=$mysqli->query("select * from pertanyaan_c");

		while($pg=mysqli_fetch_array($pgn)){
		?>
          <tr>
            <td><?php echo $pg['ID'] ?></td>
            <td><?php echo $pg['nama'] ?></td>
            <td><?php echo $pg['gaji'] ?></td>
            <td><?php echo $pg['level_jabatan'] ?></td>
            <td><?php echo $pg['region'] ?></td>
          </tr>
         <?php 
		 }
		 ?>
        </tbody>
      </table>
      <br />
   </div>     
</section>