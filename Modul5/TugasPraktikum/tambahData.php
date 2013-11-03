<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Data</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	<table width="200" border="0">
      <tr>
        <td>NIM</td>
        <td> <input type="text" name="nim"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td> <input type="text" name="nama" size="40"  /></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td> <input type="text" name="alamat" size="60"  /></td>
      </tr>
      <tr>
        <td colspan="2" align="center"> <input type="submit" value="Simpan"  /></td>
      </tr>
    </table>
</form>

<?php
	require_once './koneksi.php';
	
	if (isset($_POST['nim']) && isset($_POST['nama'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		
		$sql = "INSERT INTO mahasiswa VALUES ('" .$nim. "', '" .$nama. "', '" .$alamat. "')";
		
		$res = mysql_query($sql);
		if ($res) {
			echo 'Data Berhasil Ditambahkan <br />';
			mysql_close($res);
		} else {
			echo 'Gagal menambah Data <br />';
			mysql_error();
		}
	}
	
	echo '<hr />';
	
	require_once './seleksi.php';
?>
</body>
</html>
