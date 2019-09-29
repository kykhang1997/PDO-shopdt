<?php 
    include ('../../controllers/connectdb.php');
    $tenhieu = $_POST['tenhieu'];
    $tinhtrang = $_POST['tinhtrang'];

    if(isset($_POST['them'])) {
        $sql_themhieusp = "INSERT INTO hieusanpham(tenhieu,tinhtrang) VALUES ('".$tenhieu."','".$tinhtrang."')";
        $conn -> exec($sql_themhieusp);
        header('location:../../index.php?quanly=hieusp&ac=lietke');
    } elseif (isset($_POST['sua'])) {
        $sql_suahieusp = "UPDATE hieusanpham SET tenhieu='".$tenhieu."',tinhtrang='".$tinhtrang."' WHERE id='$_GET[id]'";
        $conn->exec($sql_suahieusp);
        header('location:../../index.php?quanly=hieusp&ac=lietke');
    } else {
        $sql_xoahieusp = "DELETE FROM hieusanpham WHERE id = $_GET[id]";
        $conn->exec($sql_xoahieusp);
        header('location:../../index.php?quanly=hieusp&ac=lietke');
    }
?>