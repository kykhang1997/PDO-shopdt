<?php
$sql_lietkeloaisp = "SELECT * FROM loaisanpham ORDER BY idloaisp desc";
$row_lietkeloaisp = $conn->query($sql_lietkeloaisp);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <table class="table "  >
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Loại Sản Phẩm</th>
                        <th>Tình Trạng</th>
                        <th colspan="2">Quản Lý</th>
                    </tr>
                </thead>
                <?php
                $i = 1;
                while ($dong = $row_lietkeloaisp->fetch()) {
                    ?>
                    <tbody>
                        <tr>
                            <td scope="row"><?php echo $i; ?></td>
                            <td><?php echo $dong['tenloai']; ?></td>
                            <td><?php if ($dong['tinhtrang'] == 1) {
                                        echo 'Kích Hoạt';
                                    } else {
                                        echo 'Không Kích Hoạt';
                                    } ?></td>
                            <td><a href="index.php?quanly=loaisp&ac=sua&id=<?php echo $dong['idloaisp'] ?>" class="btn btn-outline-info">
                                    Sửa</a>
                            
                            <a onclick="return confirm('Bạn Có Muốn Xoá?')" class="btn btn-outline-danger" href="modules/loaisp/xuly.php?id=<?php echo $dong['idloaisp']?>" >Xoá</a></td>
                        </tr>
                    </tbody>
                <?php
                    $i++;
                }
                ?>
            </table>
        </div>
        <div class="col-sm-2 ">
            <a class="btn btn-outline-success" href="index.php?quanly=loaisp&ac=them">Thêm Mới</a>
        </div>
    </div>

</div>