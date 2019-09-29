<?php
$sql = "SELECT * FROM hieusanpham WHERE id = '$_GET[id]'";
$row = $conn->query($sql);
$dong = $row->fetch();
?>
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <form action="modules/hieusp/xuly.php?id=<?php echo $dong['id'] ?>" method="post" enctype="multipart/form-data">
                <h3>&nbsp;</h3>
                <table width="100%">
                    <tr>
                        <td colspan="2" style="text-align:center; font-size:25px">Sửa loại sản phẩm</td>
                    </tr>
                    <tr>
                        <td width="97">Tên Hiệu Sản Phẩm</td>
                        <td width="87"><input type="text" name="tenhieu" value="<?php echo $dong['tenhieu'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Tình trạng</td>
                        <td><select name="tinhtrang">
                                <?php
                                if ($dong['tinhtrang'] == 1) {
                                    ?>
                                    <option value="1" selected="selected">Kích hoạt</option>
                                    <option value="2">Không kích hoạt</option>
                                <?php
                                } else {
                                    ?>
                                    <option value="1">Kích hoạt</option>
                                    <option value="2" selected="selected">Không kích hoạt</option>
                                <?php
                                }
                                ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div align="center">
                                <input type="submit" name="sua" value="Sửa">
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-sm-2">
            
                <h3>&nbsp;</h3>
                <a class="btn btn-outline-danger" href="index.php?quanly=hieusp&ac=lietke">Liệt kê sp</a>
            
        </div>
    </div>
</div>