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
    return $a['nama_merek'] <=> $b['nama_merek'];
});
?>

<div class="card mb-4">
    <div class="card-header bg-success text-white">Data ATV</div>
    <div class="card-body">
        <table class="table table-bordered" id="tabel-responsif">
            <thead>
                <tr>
                    <th>Nama Merek</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_atv as $index => $atv): ?>
                    <tr>
                        <td><?php echo $atv['nama_merek']; ?></td>
                        <td><?php echo $atv['keterangan']; ?></td>
                        <td>
                            <a href="<?php echo base_url('atvmerek/edit/' . $atv['id_merek']); ?>" class="btn btn-info btn-sm">Edit</a>
                            <a href="<?php echo base_url('atvmerek/delete/' . $atv['id_merek']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        // Debug checks
        console.log('jQuery version:', $.fn.jquery);
        console.log('DataTables:', typeof $.fn.DataTable);
        
        if (typeof $.fn.DataTable === 'undefined') {
            console.error('DataTables is not loaded!');
            return;
        }

        try {
            let table = $('#tabel-responsif').DataTable({
                processing: true,
                pageLength: 10,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json'
                }
            });
            console.log('DataTable initialized successfully');
        } catch (error) {
            console.error('Error initializing DataTable:', error);
        }
    });
</script>
