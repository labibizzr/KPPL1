<!-- Script alert -->
  <script language="javascript">

  function validasi(form){
    if (form.matkulId.value==""){
    alert("Mata kuliah masih kosong");
    form.username.focus();
    return (false);
  }
    if (form.dosenId.value==""){
    alert("Nama dosen masih kosong");
    form.password.focus();
    return (false);
  }
  if (form.nama.value==""){
    alert("Nama masih kosong");
    form.password.focus();
    return (false);
  }
  return (true);
  }
  </script>
<!-- end of script alert  -->

  <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <!-- <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active"><?php echo $page ?></li>
        </ol> -->
        <div class="row">

            <p>Edit Kelas</p>
          </div>
          <div class="col-6">
          <?php
            $frm_edit_kelas = array('onsubmit' => 'return validasi(this)');
            echo form_open(current_url(),$frm_edit_kelas);
          ?>

          <div class="form-group">
            <div class="form-group">
              <label for="matkul">Mata Kuliah</label>
            <br>
            <select class="form-control" id="matkul" name='matkulId'>
              <?php

              foreach($matkul as $row)
              {
                if(strcmp($kelas[0]['mata_kuliahId'], $row['id']) == 0)
                  echo '<option value="'.$row['id'].'" selected>'. $row['nama'].'</option>';
                  else{
                echo '<option value="'.$row['id'].'">'. $row['nama'].'</option>';
              }
              }

              ?>
              </select>

            </div>
            <div class="form-group">
              <label for="nama">Nama Kelas</label>
              <?php $txtNama = array('value' => $kelas[0]['nama'], 'name' => 'nama', 'class' => 'form-control', 'placeholder' => 'Nama Mata Kuliah');
             echo form_input($txtNama); ?>
            </div>
            <div class="form-group">
            <label for="dosen">Nama Dosen</label>
            <br>
            <select id="dosen" class="form-control" name='dosenId'>
              <?php

              foreach($dosen as $row)
              {
                if(strcmp($kelas[0]['dosenId'], $row['id']) == 0)
                  echo '<option value="'.$row['id'].'" selected>'. $row['nama'].'</option>';
                  else
                echo '<option value="'.$row['id'].'">'. $row['nama'].'</option>';
              }

              ?>
              </select>
              </div>
            <?php $button = array('name' => 'Submit', 'class' => 'btn btn-lg btn-primary', 'type' => 'submit');
            echo form_button($button,'Submit');
             echo anchor(site_url('admin/tabel/kelas'), 'Cancel', array('title' => 'Cancel', 'class' => 'btn'));
             echo form_close(); ?>
           </div>
        </div>

      </div>
    </div>
