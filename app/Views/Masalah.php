<div class="container">
<?php
foreach ($masalah as $key) {
    if ($key->id_masalah === 1) {
?>
    <tr>
      
        <td align="center" scope="col"><?= $key->Nama?></td>
       
<?php
    }
}
?>
<div>