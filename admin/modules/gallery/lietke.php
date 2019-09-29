<?php
$sql =  $conn->query("SELECT * FROM sanpham WHERE idsanpham = '$_GET[id]'");
$dong =  $sql->fetch();
$id = $_GET['id'];
?>
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <table class="table ">
                <thead>
                    <tr>
                        <th>Tên Sản Phẩm</th>
                        <th>Hình Ảnh</th>
                        <th>Gallery</th>
                        <th colspan="2">Quản Lý</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><?php echo $dong['tensp']; ?></td>
                        <td><img src="modules/sanpham/img/<?php echo $dong['hinhanh'] ?>" alt="" srcset=""></td>
                        <td><?php
                            $sql_gal = $conn->query("SELECT hinhanhsp FROM gallery WHERE id_sp = '$_GET[id]'");
                            $count = $sql_gal->rowCount();
                            if ($count > 0) {
                                while ($dong_gal = $sql_gal->fetch()) {
                                    ?>
                                    <p><img src="modules/gallery/uploads/<?php echo $dong_gal['hinhanhsp'] ?>" alt="" srcset=""></p>
                            <?php
                                }
                            } else {
                                echo 'Chưa có hình ảnh sản phẫm. Làm ơn Thêm Gallery';
                            }
                            ?></td>
                        <td>

                            <a onclick="return confirm('Bạn Có Muốn Xoá?')" 
                            class="btn btn-outline-danger" 
                            href="modules/gallery/xuly.php?quanly=xoa&id=<?php echo $id ?>">Xoá Tất Cả Hình Ảnh</a></td>
                    </tr>
                </tbody>

            </table>
        </div>
        <div class="col-sm-2 ">
        <a href="index.php?quanly=gallery&ac=them&id=<?php echo $id ?>">Thêm gallery</a> 
        </div>
        <div class="col-sm-2 ">
            <a class="btn btn-outline-success" href="index.php?quanly=sanpham&ac=them">Thêm Mới</a>
        </div>
    </div>

</div>