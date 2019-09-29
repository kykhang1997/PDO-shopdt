<?php
$sql_lietkehieusp = "SELECT * FROM hieusanpham ORDER BY id desc";
$row_lietkehieusp = $conn->query($sql_lietkehieusp);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <table class="table "  >
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Hiệu Sản Phẩm</th>
                        <th>Tình Trạng</th>
                        <th colspan="2">Quản Lý</th>
                    </tr>
                </thead>
                <?php
                $i = 1;
                while ($dong = $row_lietkehieusp->fetch()) {
                    ?>
                    <tbody>
                        <tr>
                            <td scope="row"><?php echo $i; ?></td>
                            <td><?php echo $dong['tenhieu']; ?></td>
                            <td><?php if ($dong['tinhtrang'] == 1) {
                                        echo 'Kích Hoạt';
                                    } else {
                                        echo 'Không Kích Hoạt';
                                    } ?></td>
                            <td><a href="index.php?quanly=hieusp&ac=sua&id=<?php echo $dong['id'] ?>" class="btn btn-outline-info">
                                    Sửa</a>
                            
                            <a onclick="return confirm('Bạn Có Muốn Xoá?')" class="btn btn-outline-danger" href="modules/hieusp/xuly.php?id=<?php echo $dong['id']?>" >Xoá</a></td>
                        </tr>
                    </tbody>
                <?php
                    $i++;
                }
                ?>
            </table>
        </div>
        <div class="col-sm-2 ">
            <a class="btn btn-outline-success" href="index.php?quanly=hieusp&ac=them">Thêm Mới</a>
        </div>
    </div>

</div>