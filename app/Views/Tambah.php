<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your head content here -->
</head>
<body>
    <main id="main" class="main">
        <div class="container">
            <form action="<?= base_url('home/aksi_Tambah')?>" method="post">
                <div class="pagetitle">
                    <h1>Order</h1>
                
                </div><!-- End Page Title -->

                <section class="section">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card">

                                <div class="card-body">
                                   
                                    <!-- General Form Elements -->

                                    <div class="mb-3 mt-3">
                                    <label for="Deskripsi" class="form-label">Gejala</label>
                                    <input class="form-control" id="Deskripsi"  name="namaG"></input>
                                </div>
                                    <div class="mb-3 mt-3">
                                        <label for="jumlah" class="form-label">Masalah</label>
                                        <input class="form-control" id="Deskripsi"  name="namaM"></input>
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="Invoice" class="form-label">Solusi</label>
                                        <input class="form-control" id="Deskripsi"  name="namaS"></input>
                                    </div>

                                    <div class="row mb-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </main>
</body>
</html>
