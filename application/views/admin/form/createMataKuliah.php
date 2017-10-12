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
              <label for="exampleInputEmail1">Kode</label>

              <?php $txtKode = array('name' => 'kode', 'class' => 'form-control', 'placeholder' => 'Masukan Username', 'autofocus' =>'autofocus');
      	     echo form_input($txtKode);?>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nama Mata Kuliah</label>
              <?php $txtNama = array('name' => 'nama', 'class' => 'form-control', 'placeholder' => 'Nama Mata Kuliah');
          	 echo form_password($txtNama); ?>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Semester</label>
              <?php $txtSemester = array('name' => 'semester', 'class' => 'form-control', 'placeholder' => 'Semester');
          	 echo form_password($txtSemester); ?>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">SKS</label>
              <?php $txtSks = array('name' => 'sks', 'class' => 'form-control', 'placeholder' => 'SKS');
          	 echo form_password($txtSks); ?>
            </div>

            <?php $button = array('name' => 'Submit', 'class' => 'btn btn-lg btn-primary', 'type' => 'submit');?>
            <div class="row">
            <?php echo form_button($button,'Submit');
             echo anchor(site_url('admin/tabel/matakuliah'), 'Cancel', array('title' => 'Cancel', 'class' => 'btn'));
             echo form_close(); ?>
           </div>
        </div>

      </div>
    </div>
