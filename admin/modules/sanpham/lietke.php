<?php
$sql_lietkesanpham = "SELECT * FROM sanpham,hieusanpham,loaisanpham WHERE loaisanpham.idloaisp=sanpham.loaisp AND hieusanpham.id=sanpham.hieusp ORDER BY sanpham.idsanpham ";
$row_lietkesanpham = $conn->query($sql_lietkesanpham);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Hình Ảnh</th>
                        <th>Giá Đề Xuất</th>
                        <th>Khuyến Mãi</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Loại Sản Phẩm</th>
                        <th>Hiệu Sản Phẩm</th>
                        <th>Tình Trạng</th>
                        <th>Nội Dung</th>
                        <th colspan="2">Quản Lý</th>
                    </tr>
                </thead>
                <?php
                $i = 1;
                while ($dong = $row_lietkesanpham->fetch()) {
                    ?>
                    <tbody>
                        <tr>
                            <td scope="row"><?php echo $i; ?></td>
                            <td><?php echo $dong['masp'] ?></td>
                            <td><?php echo $dong['tensp'] ?></td>
                            <td><img src="modules/sanpham/img/<?php echo $dong['hinhanh'] ?>" width="80" height="80">
                                <a href="index.php?quanly=gallery&ac=lietke&id=<?php echo $dong['idsanpham'] ?> " style="text-align:center;text-decoration:none; font-size:18px;color:#06F;">Gallery</a>
                            </td>
                            <td><?php echo number_format($dong['giadexuat'])  ?></td>
                            <td><?php echo number_format($dong['giamgia']) ?></td>
                            <td><?php echo number_format($dong['gia']) ?></td>
                            <td><?php echo $dong['soluong'] ?></td>
                            <td><?php echo $dong['tenloai'] ?></td>
                            <td><?php echo $dong['tenhieu'] ?></td>

                            <td><?php if ($dong['tinhtrang'] == 1) {
                                        echo 'Kích Hoạt';
                                    } else {
                                        echo 'Không Kích Hoạt';
                                    } ?></td>
                            <td><?php echo $dong['noidung'] ?></td>
                            <td><a href="index.php?quanly=sanpham&ac=sua&id=<?php echo $dong['idsanpham'] ?>" class="btn btn-outline-info">
                                    Sửa</a>

                                <a onclick="return confirm('Bạn Có Muốn Xoá?')" class="btn btn-outline-danger" href="modules/sanpham/xuly.php?id=<?php echo $dong['idsanpham'] ?>">Xoá</a></td>
                        </tr>
                    </tbody>
                <?php
                    $i++;
                }
                ?>
            </table>
        </div>
        <div class="col-sm-2 ">
            <a class="btn btn-outline-success" href="index.php?quanly=sanpham&ac=them">Thêm Mới</a>
        </div>
    </div>

</div>