<!-- Script alert -->
  <script language="javascript">

  function validasi(form){
    if (form.kode.value==""){
    alert("Username masih kosong");
    form.username.focus();
    return (false);
  }
    if (form.nama.value==""){
    alert("Password masih kosong");
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

            <p>Create Mata Kuliah</p>
          </div>
          <div class="col-6">
          <?php
            $frm_edit_matkul = array('onsubmit' => 'return validasi(this)');
            echo form_open(current_url(),$frm_edit_matkul);
          ?>

          <div class="form-group">
            <div class="form-group">
              <label for="exampleInputEmail1">Mata Kuliah</label>

              <?php

              // echo var_dump($matkul);
            //   $txtMataKuliah = array('name' => 'nip', 'class' => 'form-control', 'placeholder' => 'Masukan Kode Mata Kuliah', 'autofocus' =>'autofocus');
      	    //  echo form_input($txtMataKuliah);?>

              <?php

              echo form_dropdown('matkul', $matkul[0]['nama']);
              // foreach($matkul as $row)
              // {
              //   echo '<option value="'.$row['nama'].'">'.$row['nama'].'</option>';
              // }
              ?>

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nama Kelas</label>
              <?php $txtNama = array('name' => 'nama', 'class' => 'form-control', 'placeholder' => 'Nama Mata Kuliah');
          	 echo form_input($txtNama); ?>
            </div>

            <?php $button = array('name' => 'Submit', 'class' => 'btn btn-lg btn-primary', 'type' => 'submit');
            echo form_button($button,'Submit');
             echo anchor(site_url('admin/tabel/kelas'), 'Cancel', array('title' => 'Cancel', 'class' => 'btn'));
             echo form_close(); ?>
           </div>
        </div>

      </div>
    </div>
