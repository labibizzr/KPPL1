<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <!-- <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">My Dashboard</li>
    </ol> -->
    <!-- Icon Cards-->

    </div>
    <!-- Tabel mata kuliah-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Tabel Mata kuliah</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Kode</th>
                <th>Nama Mata Kuliah  </th>
                <th>Semester</th>
                <th>sks</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Kode</th>
                <th>Nama Mata Kuliah  </th>
                <th>Semester</th>
                <th>sks</th>
              </tr>
            </tfoot>
            <tbody>
              <?php foreach ($matkul as $matkul_item) { ?>
              <tr>
                <td><?php echo $matkul_item['kode']; ?></td>
                <td><?php echo $matkul_item['nama']; ?></td>
                <td><?php echo $matkul_item['semester']; ?></td>
                <td><?php echo $matkul_item['sks']; ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      </div>

<!-- tabel dosen -->

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Tabel Dosen</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>nip</th>
                  <th>Nama Dosen</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>nip</th>
                  <th>Nama Dosen</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                $i = 0;
                foreach ($dosen as $dosen_item) { ?>
                <tr>
                  <td><?php echo ++$i;?>
                  <td><?php echo $dosen_item['nip']; ?></td>
                  <td><?php echo $dosen_item['nama']; ?></td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        </div>

<!-- tabel kelas -->

<!-- <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Tabel Kelas</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>nip</th>
                  <th>Nama Dosen</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>nip</th>
                  <th>Nama Dosen</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                $i = 0;
                foreach ($dosen as $dosen_item) { ?>
                <tr>
                  <td><?php echo ++$i;?>
                  <td><?php echo $dosen_item['nip']; ?></td>
                  <td><?php echo $dosen_item['nama']; ?></td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        </div> -->
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
