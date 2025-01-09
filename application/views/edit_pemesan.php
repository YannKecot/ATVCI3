<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data ATV</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow mb-4">
        <div class="card-header bg-primary text-white d-flex align-items-center">
            <i class="fas fa-edit me-2"></i>
            <h5 class="mb-0">Edit Data ATV</h5>
        </div>
        <div class="card-body">
            <!-- Form Action Updated -->
            <form action="<?php echo base_url('pemesan/update/' . $pemesan['id_pemesan']); ?>" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label fw-bold">Nama Merek</label>
                    <div class="input-group">
                        <span class="input-group-text bg-primary text-white"><i class="fas fa-hashtag"></i></span>
                        <!-- Make sure the value is coming from $pemesan array -->
                        <input type="text" name="nama" id="nama" class="form-control" 
                               value="<?php echo $pemesan['nama']; ?>" required placeholder="Masukkan nama" />
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nomor_telp" class="form-label fw-bold">Nomor Telepon</label>
                    <div class="input-group">
                    <span class="input-group-text bg-primary text-white"><i class="fas fa-hashtag"></i></span>
                        <!-- Make sure the value is coming from $pemesan array -->
                        <input type="text" name="nomor_telp" id="nomor_telp" class="form-control" 
                               value="<?php echo $pemesan['nomor_telp']; ?>" required placeholder="Masukkan Nomor Telepon" />
                    </div>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label fw-bold">Alamat</label>
                    <div class="input-group">
                        <span class="input-group-text bg-primary text-white"><i class="fas fa-hashtag"></i></span>
                        <!-- Make sure the value is coming from $pemesan array -->
                        <input type="text" name="alamat" id="alamat" class="form-control" 
                               value="<?php echo $pemesan['alamat']; ?>" required placeholder="Masukkan alamat" />
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">
                        <i class="fas fa-save"></i> Update
                    </button>
                    <a href="<?php echo base_url('pemesan'); ?>" class="btn btn-danger">
                        <i class="fas fa-times"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
