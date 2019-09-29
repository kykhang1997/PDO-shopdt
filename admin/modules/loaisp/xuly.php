<?php 
    include ('../../controllers/connectdb.php');
    $tenloai = $_POST['tenloai'];
    $tinhtrang = $_POST['tinhtrang'];

    if(isset($_POST['them'])){
        $sql_themloaisp = "INSERT INTO loaisanpham(tenloai,tinhtrang) VALUES ('".$tenloai."','".$tinhtrang."')";
        $conn->exec($sql_themloaisp);
        header('location:../../index.php?quanly=loaisp&ac=lietke');
    } elseif (isset($_POST['sua'])) {
        $sql_sualoaisp = "UPDATE loaisanpham SET tenloai='".$tenloai."',tinhtrang='".$tinhtrang."' WHERE idloaisp='$_GET[id]'";
        $conn->exec($sql_sualoaisp);
        header('location:../../index.php?quanly=loaisp&ac=lietke');
    } else {
        $sql_xoaloaisp = "DELETE FROM loaisanpham WHERE idloaisp = $_GET[id]";
        $conn->query($sql_xoaloaisp);
        header('location:../../index.php?quanly=loaisp&ac=lietke');
    }