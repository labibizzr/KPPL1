<!-- Script alert -->
  <script language="javascript">

  function validasi(form){
    if (form.nip.value==""){
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

            <p>Edit Dosen</p>
          </div>
          <div class="col-6">
          <?php
            $frm_edit_dosen = array('onsubmit' => 'return validasi(this)');
            echo form_open(current_url(),$frm_edit_dosen);
          ?>

          <div class="form-group">
            <div class="form-group">
              <label for="exampleInputEmail1">NIP</label>

              <?php $txtKode = array('name' => 'nip','value' => $dosen[0]['nip'], 'class' => 'form-control', 'placeholder' => 'Masukan NIP Dosen', 'autofocus' =>'autofocus');
      	     echo form_input($txtKode);?>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nama Dosen</label>
              <?php $txtNama = array('name' => 'nama','value' => $dosen[0]['nama'], 'class' => 'form-control', 'placeholder' => 'Nama Dosen');
          	 echo form_input($txtNama); ?>
            </div>

            <?php $button = array('name' => 'Submit', 'class' => 'btn btn-lg btn-primary', 'type' => 'submit');?>
            <div class="row">
            <?php echo form_button($button,'Submit');
             echo anchor(site_url('admin/tabel/dosen'), 'Cancel', array('title' => 'Cancel', 'class' => 'btn'));
             echo form_close(); ?>
           </div>
        </div>

      </div>
    </div>
