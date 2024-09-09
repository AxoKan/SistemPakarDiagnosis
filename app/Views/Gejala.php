<main id="main" class="main">
  <div class="container">
    <div class="pagetitle">
      <h1></h1>
      <nav>
       
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row justify-content-center">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <div class="d-flex justify-content-between align-items-center mb-3">

                <!-- Add a search input on the right side -->
                <div class="search-container">
                  <label for="search">Search:</label>
                  <input type="text" id="search" placeholder="Enter keywords...">
                </div>
              </div>
            
               <a href="<?= base_url("home/Tambah")?>">
		<button class="btn btn-success">Tambah</button>
  </a>

              <!-- Table with stripped rows -->
              <table class="table datatable" id="mitraTable">
                <thead>
                <tr style="font-weight: bold; color: black; font-size: larger;">
    <td align="center" scope="col">No</td>
    <td align="center" scope="col">Kode</td>
    <td align="center" scope="col">Gejala</td>
    <td align="center" scope="col">Masalah</td>
    <td align="center" scope="col">Solusi</td>
    <td align="center" scope="col">Tindakan</td>
    </tr> 
                </thead>
                <tbody>
                <?php
$no = 1;
foreach ($gejala as $key) {
   
?>
    <tr>
          <td align="center" scope="col"><?= $no++ ?></td>
          <td align="center" scope="col"><?= $key->Kode?></td>
        <td align="center" scope="col"><?= $key->NamaG?></td>
        <td align="center" scope="col"><?= $key->Masalah?></td>
        <td align="center" scope="col"><?= $key->Solusi?></td>
        <td align="center">
        <a href="<?= base_url('home/delete/'.$key->id_gejala)?>">
                                <i class="btn btn-danger">delete</i>
                            </a>
            </td>
      </tr>
<?php
    }

?>
                </tbody>
              </table>
               </div>
          </div>

        </div>
      </div>
    </section>

  </div>
</main><!-- End #main -->

<script>
  // Add JavaScript for search functionality
  document.getElementById('search').addEventListener('input', function() {
    const searchValue = this.value.toLowerCase();
    const rows = document.querySelectorAll('#mitraTable tbody tr');

    rows.forEach(row => {
      const rowData = row.textContent.toLowerCase();
      row.style.display = rowData.includes(searchValue) ? '' : 'none';
    });
  });
</script>
