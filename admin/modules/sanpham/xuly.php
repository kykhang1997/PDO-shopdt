
<?php
include('../../controllers/connectdb.php');
$tensp = $_POST['tensp'];
$masp = $_POST['masp'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
move_uploaded_file($hinhanh_tmp, 'img/'.$hinhanh);
$giadexuat = $_POST['giadexuat'];
$giamgia = $_POST['giamgia'];
$gia = $_POST['gia'];
$loaisp = $_POST['loaisp'];
$hieusp = $_POST['hieusp'];
$tinhtrang = $_POST['tinhtrang'];
$soluong = $_POST['soluong'];
$noidung = $_POST['noidung'];

if (isset($_POST['them'])) {
    $sql_themsp = "INSERT INTO sanpham(masp,tensp,hinhanh,gia,giamgia,giadexuat,soluong,loaisp,hieusp,tinhtrang,noidung)
        VALUES 
        ('" . $masp . "',
        '" . $tensp . "',
        '" . $hinhanh . "',
        '" . $gia . "',
        '" . $giamgia . "',
        '" . $giadexuat . "',
        '" . $soluong . "',
        '" . $loaisp . "',
        '" . $hieusp . "',
        '" . $tinhtrang . "',
        '" . $noidung . "')";
    $conn->exec($sql_themsp);
    header('location:../../index.php?quanly=sanpham&ac=lietke');
} elseif (isset($_POST['sua'])) {
    if ($hinhanh != '') {
        $sql_suasp = "UPDATE sanpham SET masp ='" . $masp . "',tensp='" . $tensp . "',hinhanh='" . $hinhanh . "',gia='" . $gia . "',giamgia='" . $giamgia . "',giadexuat='" . $giadexuat . "',soluong='" . $soluong . "',loaisp='" . $loaisp . "',hieusp='" . $hieusp . "',tinhtrang='" . $tinhtrang . "',noidung='" . $noidung . "' WHERE idsanpham = '$_GET[id]'";
    } else {
        $sql_suasp = "UPDATE sanpham SET masp ='" . $masp . "',tensp='" . $tensp . "',gia='" . $gia . "',giamgia='" . $giamgia . "',giadexuat='" . $giadexuat . "',soluong='" . $soluong . "',loaisp='" . $loaisp . "',hieusp='" . $hieusp . "',tinhtrang='" . $tinhtrang . "',noidung='" . $noidung . "' WHERE idsanpham = '$_GET[id]'";
    }
    $conn->exec($sql_suasp);
    header('location:../../index.php?quanly=sanpham&ac=lietke');
} else {
    $sql_xoasp = "DELETE FROM sanpham WHERE idsanpham = $_GET[id]";
    $conn->query($sql_xoasp);
    header('location:../../index.php?quanly=sanpham&ac=lietke');
}
?>
