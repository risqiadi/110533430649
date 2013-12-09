<!DOCTYPE HTML>
<html>
        <head>
                <title>Tugas Praktikum</title>
                <link rel="stylesheet" href="prakstyle.css" type="text/css"/>
        </head>
        <body>
                <h2>Pengurutan Data</h2>
                <?php
                        require_once './koneksi.php';
                        if(isset($_GET['do'])){
                                $do                = $_GET['do'];
                                if($do == 'no'){
                                        $sql        = "SELECT * FROM mahasiswa ORDER BY nim";
                                        $res        = mysql_query($sql);
                                }else if($do == 'name'){
                                        $sql        = "SELECT * FROM mahasiswa ORDER BY nama";
                                        $res        = mysql_query($sql);
                                } else if($do == 'alamat'){
                                        $sql        = "SELECT * FROM mahasiswa ORDER BY alamat";
                                        $res        = mysql_query($sql);
                                }
                        }else {
                                $sql        = "SELECT * FROM mahasiswa";
                                $res        = mysql_query($sql);
                        }
                        ?>
                        <form name="form1" method="get">
                                <table border=0 cellspacing=3 cellpadding=5>
                                        <tr>
                                                <th>#</th>
                                                <th width=100><a href="tugas_prak.php?do=no">NIM</a></th>
                                                <th width=150><a href="tugas_prak.php?do=name">Nama</a></th>
                                                <th width=200><a href="tugas_prak.php?do=alamat">Alamat</a></th>
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
                        </form>
        </body>
</html>