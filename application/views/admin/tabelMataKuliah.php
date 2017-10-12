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
                      <th>Kode</th>
                      <th>Nama Mata Kuliah  </th>
                      <th>Semester</th>
                      <th>sks</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Kode</th>
                      <th>Nama Mata Kuliah  </th>
                      <th>Semester</th>
                      <th>sks</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($matkul as $matkul_item) { ?>
                    <tr>
                      <td><?php echo $matkul_item['kode']; ?></td>
                      <td><?php echo $matkul_item['nama']; ?></td>
                      <td><?php echo $matkul_item['semester']; ?></td>
                      <td><?php echo $matkul_item['sks']; ?></td>
                      <td>
                        <?php echo anchor(site_url(uri_string() . "/edit/" . $matkul_item['id']), 'Edit', array('title' => 'Edit data','class' => 'btn')); ?>
                        <?php echo anchor(site_url(uri_string() . "/delete/" . $matkul_item['id']), 'Delete', array('title' => 'Edit data','class' => 'btn')); ?>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <?php echo anchor(site_url(uri_string(). "/create"), 'Create new record', array('title' => 'Create new Record', 'class' => 'btn btn-primary')); ?>
            </div>
            </div>
      </div>
    </div>
  </div>
