
<?php $this->load->view("/admin/_partials/header.php") ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  <h6 class="m-0 font-weight-bold text-primary">Edit Studio Musik</h6>
  </div>
  <div class="card-body">

  <?php foreach($studio as $u){ ?>
    <?php 
           echo form_open_multipart('admin/studio/update');
           if (isset($error))
           echo '<p>'.$error.'</p>';
        ?>
  <input type="hidden" name="id_studio" value="<?php echo $u->id_studio ?>">
  <div class="form-group">
    <label>Nama Studio</label>
    <input type="text" class="form-control" name="nama_studio" value="<?php echo $u->nama_studio ?>">
  </div>
  <div class="form-group">
    <label>Tarif Sewa</label>
    <input type="number" class="form-control" name="tarif" value="<?php echo $u->tarif ?>">
  </div>
  <div class="form-group">
    <label>Deskripsi</label>
    <textarea class="form-control" name="deskripsi" rows="3"><?php echo $u->deskripsi?></textarea>
  </div>
  <div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="gambar">
    <img src="<?php echo base_url();?>/assets/images/studio/<?php echo $u->gambar ?>" class="img-thumbnail" width="50%">
  </div>
  <button type="submit" class="btn btn-success">UPDATE</button>
</form>
<?php 
  }
              echo form_close(); 
              if(isset($upload_data)):
        ?>
        <p> <?php echo $this->session->flashdata('upload_sukses');?><p>
        <?php 
         endif;
        ?>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php $this->load->view("admin/_partials/footer.php") ?>
