<?php
include 'conn/koneksi.php';
?>

<a href="input.php">Tambah Data</a>
<br>
<br>
<table border="1">
  <tr>
    <td><b>Judul</b></td>
    <td><b>Isi</b></td>
    <td><b>Aksi</b></td>
  </tr>
<?php
$result = $conn->query('SELECT * FROM artikel');

while($row = $result->fetch(PDO::FETCH_OBJ)) {
?>
  <tr>
    <td><?= $row->judul ?></td>
    <td><?= $row->isi ?></td>
    <td>
      <a href="edit.php?id=<?= $row->id_artikel ?>">Edit</a>
       |
      <a href="model/database_action.php?act=hapus&id=<?= $row->id_artikel ?>" onclick="if(!confirm(\'Are you sure you want to delete this item?\')) return false;">Hapus</a>
    </td>
  </tr>
<?php } ?>



</table>


<?php
$conn = null;
?>
