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
 <!-- 
<pre>
<?php //print_r($merek_atv); ?>
</pre>
-->


<div class="card mb-4">
    <div class="card-header bg-primary text-white">Form Data ATV</div>
    <div class="card-body">
        <form action="<?php echo base_url('atv/create'); ?>" method="POST">
            
            <div class="row mb-3">
                <label class="col-sm-2">Nomor</label>
                <div class="col-sm-10">
                    <input type="text" name="Nomor" id="Nomor" class="form-control" required />
                </div>
            </div>
             <!-- Menambahkan Dropdown (Combo) -->
             <div class="row mb-3">
                <label class="col-sm-2">Pilih Merek</label>
                <div class="col-sm-10">
                    <select id="fk_merek" name="fk_merek" class="form-control" required>
                        <option value="">-- Pilih Merek --</option>
                        <?php if (!empty($merek_atv)): ?>
                            <?php foreach ($merek_atv as $merek): ?>
                                <option value="<?= $merek['id_merek']; ?>"><?= $merek['nama_merek']; ?></option>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <option value="">Tidak ada data merek</option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>


            <div class="row mb-3">
                <label class="col-sm-2">Keterangan</label>
                <div class="col-sm-10">
                    <textarea name="Keterangan" id="Keterangan" class="form-control" rows="3" required></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                
                </div>
             


           