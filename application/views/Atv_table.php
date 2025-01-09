<div class="card mb-4">
    <div class="card-header bg-success text-white">Data ATV</div>
    <div class="card-body">
      

        <br>
        <!-- Tabel Data ATV -->
        <table class="table table-bordered" id="tabel-responsif">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Merek</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_atv as $index => $atv): ?>
                    <tr>
                        <td><?php echo $atv['nomor']; ?></td>

                        <?php 
                            // Mencocokkan fk_merek dengan nama merek
                            $merek_name = ''; 
                            foreach ($merek_atv as $merek) {
                                if ($merek['id_merek'] == $atv['fk_merek']) {
                                    $merek_name = $merek['nama_merek'];
                                    break;
                                }
                            }
                        ?>

                        <td><?php echo $merek_name; ?></td> <!-- Tampilkan nama merek -->
                        <td><?php echo $atv['keterangan']; ?></td>
                        <td>
                            <a href="<?php echo base_url('atv/edit/' . $atv['id']); ?>" class="btn btn-info btn-sm">Edit</a>
                            <a href="<?php echo base_url('atv/delete/' . $atv['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
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

<script>
    console.log('Data ATV:', <?php echo json_encode($data_atv); ?>);
</script>
