<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $page ?></li>
      </ol>
      <div class="row">
        <div class="col-12">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i> Tabel Mata kuliah</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Mata Kuliah</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama</th>
                      <th>Mata Kuliah</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($kelas as $kelas_item) { ?>
                    <tr>
                      <td><?php echo $kelas_item['nama']; ?></td>
                      <td><?php echo $kelas_item['mata_kuliah']; ?></td>
                      <td>
                        <?php echo anchor(site_url(uri_string() . "/edit/" . $kelas_item['id']), 'Edit', array('title' => 'Edit data','class' => 'btn')); ?>
                        <?php echo anchor(site_url(uri_string() . "/delete/" . $kelas_item['id']), 'Delete', array('title' => 'Edit data','class' => 'btn')); ?>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <?php echo anchor(site_url(uri_string(). "/create"), 'Buat kelas baru', array('title' => 'Buat kelas baru', 'class' => 'btn btn-primary')); ?>
            </div>
            </div>
      </div>
    </div>
  </div>
