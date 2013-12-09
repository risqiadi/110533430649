<!DOCTYPE HTML>
<html>
        <head>
                <title>Pencarian Data</title>
        </head>
        <body>
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
                        <font style="margin-right:22px;">Nim</font> <input type="text" name="nim" size=40 value="<?php echo $_GET['nim'];?>"/><br/><br/>
                        <font style="margin-right:12px;">Nama</font> <input type="text" name="nama" size=40 value="<?php echo $_GET['nama']; ?>" /><br/><br/>
                        <font style="margin-right:5px;">Alamat</font> <input type="text" name="alamat" size=40 value="<?php echo $_GET['alamat']; ?>" /><br/><br/>
                        <input type="submit" value="CARI" style="height:30px; width:100px;"/><br/><br/>
                </form>
                <?php
                        if (isset($_GET['nim']) && isset($_GET['nama'])) {
                                require_once './koneksi.php';
                                // Kata kunci pencarian
                                $nim         = $_GET['nim'];
                                $nama        = $_GET['nama'];
                                $alamat        = $_GET['alamat'];
                                // Variabel $sql berisi pernyataan SQL pencarian
                                $sql = "SELECT * FROM mahasiswa WHERE nim LIKE '%$nim%' AND nama LIKE '%$nama%'";
                                $res = mysql_query($sql);
                                if ($res) {
                                        $num = mysql_num_rows($res);
                                        if ($num) {
                                                echo 'Ditemukan ' . $num . ' row(s)'; ?>
                                                <table border=1 cellspacing=1 cellpadding=5>
                                                        <tr>
                                                                <th>#</th>
                                                                <th width=100>NIM</th>
                                                                <th width=150>Nama</th>
                                                                <th>Alamat</th>
                                                        </tr>
                                                        <?php
                                                                $i = 1;
                                                                while ($row = mysql_fetch_row($res)) { ?>
                                                                        <tr>
                                                                                <td><?php echo $i;?></td>
                                                                                <td><?php echo $row[0];?></td>
                                                                                <td><?php echo $row[1];?></td>
                                                                                <td><?php echo $row[2];?></td>
                                                                        </tr>
                                                                        <?php
                                                                        $i++;
                                                                }
                                                                ?>
                                                </table>
                                        <?php
                                        } else {
                                                echo 'Data Tidak Ditemukan';
                                        }
                                }
                        } else if (isset($_GET['nim']) && isset($_GET['alamat'])) {
                                require_once './koneksi.php';
                                // Kata kunci pencarian
                                $nim         = $_GET['nim'];
                                $nama        = $_GET['nama'];
                                $alamat        = $_GET['alamat'];
                                // Variabel $sql berisi pernyataan SQL pencarian
                                $sql = "SELECT * FROM mahasiswa WHERE nim LIKE '%$nim%' AND alamat LIKE '%$alamat%'";
                                $res = mysql_query($sql);
                                if ($res) {
                                        $num = mysql_num_rows($res);
                                        if ($num) {
                                                echo 'Ditemukan ' . $num . ' row(s)'; ?>
                                                <table border=1 cellspacing=1 cellpadding=5>
                                                        <tr>
                                                                <th>#</th>
                                                                <th width=100>NIM</th>
                                                                <th width=150>Nama</th>
                                                                <th>Alamat</th>
                                                        </tr>
                                                        <?php
                                                                $i = 1;
                                                                while ($row = mysql_fetch_row($res)) { ?>
                                                                        <tr>
                                                                                <td><?php echo $i;?></td>
                                                                                <td><?php echo $row[0];?></td>
                                                                                <td><?php echo $row[1];?></td>
                                                                                <td><?php echo $row[2];?></td>
                                                                        </tr>
                                                                        <?php
                                                                        $i++;
                                                                }
                                                                ?>
                                                </table>
                                        <?php
                                        } else {
                                                echo 'Data Tidak Ditemukan';
                                        }
                                }
                        } else if (isset($_GET['nama']) && isset($_GET['alamat'])) {
                                require_once './koneksi.php';
                                // Kata kunci pencarian
                                $nim         = $_GET['nim'];
                                $nama        = $_GET['nama'];
                                $alamat        = $_GET['alamat'];
                                // Variabel $sql berisi pernyataan SQL pencarian
                                $sql = "SELECT * FROM mahasiswa WHERE nama LIKE '%$nama%' AND alamat LIKE '%$alamat%'";
                                $res = mysql_query($sql);
                                if ($res) {
                                        $num = mysql_num_rows($res);
                                        if ($num) {
                                                echo 'Ditemukan ' . $num . ' row(s)'; ?>
                                                <table border=1 cellspacing=1 cellpadding=5>
                                                        <tr>
                                                                <th>#</th>
                                                                <th width=100>NIM</th>
                                                                <th width=150>Nama</th>
                                                                <th>Alamat</th>
                                                        </tr>
                                                        <?php
                                                                $i = 1;
                                                                while ($row = mysql_fetch_row($res)) { ?>
                                                                        <tr>
                                                                                <td><?php echo $i;?></td>
                                                                                <td><?php echo $row[0];?></td>
                                                                                <td><?php echo $row[1];?></td>
                                                                                <td><?php echo $row[2];?></td>
                                                                        </tr>
                                                                        <?php
                                                                        $i++;
                                                                }
                                                                ?>
                                                </table>
                                        <?php
                                        } else {
                                                echo 'Data Tidak Ditemukan';
                                        }
                                }
                        } else {
                                echo 'Masukkan kata kunci pencarian';
                        }
                ?>
        </body>
</html>