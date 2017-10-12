<!-- Script alert -->
  <script language="javascript">

  function validasi(form){
    if (form.username.value==""){
    alert("Username masih kosong");
    form.username.focus();
    return (false);
  }
    if (form.password.value==""){
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
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $page ?></li>
      </ol>
      <div class="row">
        <div class="col-12">
        <?php
          $frm_edit_matkul = array('onsubmit' => 'return validasi(this)');
          echo form_open($frm_edit_matkul);
        ?>

        <div class="form-group">
          <div class="form-group">
            <label for="exampleInputEmail1">Kode</label>

            <?php $txtKode = array('name' => 'kode', 'class' => 'form-control', 'placeholder' => 'Masukan Username', 'autofocus' =>'autofocus');
    	     echo form_input($txtKode);?>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nama</label>

            <?php $txtNama = array('name' => 'password', 'class' => 'form-control', 'placeholder' => 'Masukan Password');
        	 echo form_password($txtNama); ?>
          </div>
      </div>
    </div>
  </div>
