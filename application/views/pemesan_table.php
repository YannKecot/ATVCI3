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
<?php
usort($data_atv, function ($a, $b) {
    return $a['nama'] <=> $b['nama'];
});
?>

<div class="card mb-4">
    <div class="card-header bg-success text-white">Data ATV</div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_atv as $index => $pemesan): ?>
                    <tr>
                        <td><?php echo $pemesan['nama']; ?></td>
                        <td><?php echo $pemesan['nomor_telp']; ?></td>
                        <td><?php echo $pemesan['alamat']; ?></td>
                        <td>
                            <a href="<?php echo base_url('pemesan/edit/' . $pemesan['id_pemesan']); ?>" class="btn btn-info btn-sm">Edit</a>
                            <a href="<?php echo base_url('pemesan/delete/' . $pemesan['id_pemesan']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
