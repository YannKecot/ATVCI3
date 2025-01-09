<?php
										$pesan=$this->session->flashdata('pesan');
										if ($pesan=="")
										{
											echo "";	
										}
										else
										{
									
										?>
										
										<div class="alert alert-danger alert-dismissible fade show" role="alert">
									   <button type="button" class="btn btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close">
									  </button>
										<?php echo $pesan; ?>                        
										</div>
										
										<?php
										}
										?>
<div class="card mb-4">
    <div class="card-header bg-primary text-white">Form Data Pemesan</div>
    <div class="card-body">
        <form action="<?php echo base_url('pemesan/create'); ?>" method="POST">
            
            <div class="row mb-3">
                <label class="col-sm-2">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" id="nama" class="form-control" required />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2">Nomor</label>
                <div class="col-sm-10">
                    <input type="text" name="nomor_telp" id="nomor_telp" class="form-control" required />
                </div>
            </div>
           
            <div class="row mb-3">
                <label class="col-sm-2">Alamat</label>
                <div class="col-sm-10">
                    <textarea name="alamat" id="alamat" class="form-control" rows="3" required></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                
                </div>


           