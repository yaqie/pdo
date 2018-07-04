<?php
include 'conn/koneksi.php';
?>

<?php
$c = $_GET['id'];
$result = $conn->query("SELECT * FROM artikel WHERE id_artikel = '$c' ");
$row = $result->fetch(PDO::FETCH_OBJ);
?>
<form action="model/database_action.php?act=edit" method="post">
  <input type="hidden" name="id" value="<?= $row->id_artikel ?>">
  <input type="text" name="judul" value="<?= $row->judul ?>">
  <br>
  <textarea name="isi" rows="8" cols="80"><?= $row->isi ?></textarea>
  <br>
  <input type="submit" value="Edit">
</form>


<?php
$conn = null;
?>
