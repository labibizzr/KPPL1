<!-- Script alert -->
  <script language="javascript">

  function validasi(form){
    if (form.kode.value==""){
    alert("Kode masih kosong");
    form.username.focus();
    return (false);
  }
    if (form.nama.value==""){
    alert("field Nama masih kosong");
    form.password.focus();
    return (false);
  }
  return (true);
  }
  </script>
<!-- end of script alert  -->
  <div class="content-wrapper">
      <div class="container-fluid">
       
        <div class="row">

            <p>Edit Mata Kuliah</p>
          </div>
          <div class="col-6">
          <?php
            $frm_edit_matkul = array('onsubmit' => 'return validasi(this)');
            echo form_open(current_url(),$frm_edit_matkul);
          ?>

          <div class="form-group">
            <div class="form-group">
              <label for="exampleInputEmail1">Kode</label>

              <?php $txtKode = array('name' => 'kode','value' => $matkul[0]['kode'], 'class' => 'form-control', 'placeholder' => 'Masukan Kode Mata Kuliah', 'autofocus' =>'autofocus');
      	     echo form_input($txtKode);?>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nama Mata Kuliah</label>
              <?php $txtNama = array('name' => 'nama','value' => $matkul[0]['nama'], 'class' => 'form-control', 'placeholder' => 'Nama Mata Kuliah');
          	 echo form_input($txtNama); ?>
            </div>

            <div class="form-group">
            <label for ="semester">Semester</label>
            <?php $options = array(
              '1' => '1',
              '2' => '2',
              '3' => '3',
              '4' => '4',
              '5' => '5',
              '6' => '6',
              '7' => '7',
              '8' => '8'); 

            echo form_dropdown('semester',$options,$matkul[0]['semester'],'class = form-control');
            ?>
            </div>
<!--             <div class="form-group">
              <label for="exampleInputPassword1">Semester</label>
              <?php $txtSemester = array('name' => 'semester','value' => $matkul[0]['semester'], 'class' => 'form-control', 'placeholder' => 'Semester');
          	 echo form_input($txtSemester); ?>
            </div> -->

            <div class="form-group">
            <label for ="sks">SKS</label>
            <?php $options = array(
              
              '2' => '2',
              '3' => '3',
              '4' => '4',
              '5' => '5',
              '6' => '6',
              '7' => '7',
              '8' => '8',); 

            echo form_dropdown('sks',$options,$matkul[0]['sks'],'class = form-control');
            ?>
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
