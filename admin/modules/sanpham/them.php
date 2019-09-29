<div class="container">
    <div class="row">
        <div class="col-sm-10 border-right" >
            <form action="modules/sanpham/xuly.php" method="post" enctype="multipart/form-data">
                <h3>&nbsp;</h3>
                <table width="100%" >
                    <tr style="margin-bottom: 1%">
                        <td colspan="2" style="text-align:center; font-size:25px;margin-bottom:1%">Thêm loại sản phẩm</td>
                    </tr>
                    <tr>
                        <td width="97">Mã Sản Phẩm</td>
                        <td width="87"><input type="text" name="masp"></td>
                    </tr>
                    <tr>
                        <td width="97">Tên Sản Phẩm</td>
                        <td width="87"><input type="text" name="tensp"></td>
                    </tr>
                    <tr>
                        <td width="97">Hình Ảnh</td>
                        <td width="87"><input type="file" name="hinhanh"></td>
                    </tr>
                    <tr>
                        <td width="97">Giá Đề Xuất</td>
                        <td width="87"><input type="number" name="giadexuat" id="giadexuat"></td>
                    </tr>
                    <tr>
                        <td width="97">Giảm Giá</td>
                        <td width="87"><input type="number" name="giamgia" id="giamgia" ></td>
                    </tr>
                    <tr>
                        <td width="97"><a class="btn btn-success salary">Giá</a></td>
                        <td width="87"><input type="number" name="gia" id="gia"  disabled></td>
                    </tr>
                    <tr>
                        <td width="97">Số Lượng</td>
                        <td width="87"><input type="text" name="soluong"></td>
                    </tr>
                    <tr>
                        <?php 
                            $sql_loaisp = "SELECT idloaisp,tenloai FROM loaisanpham";
                            $row_loaisp = $conn->query($sql_loaisp);
                        ?>
                        <td width="97">Loại Sản Phẩm</td>
                        <td width="87"><select name="loaisp" id="">
                            <?php 
                                while($dong_loaisp=$row_loaisp->fetch()){
                            ?>
                            <option value="<?php echo $dong_loaisp['idloaisp'] ?>"><?php echo $dong_loaisp['tenloai'] ?></option>
                            <?php 
                            }
                            ?>
                        </select></td>
                    </tr>
                    <tr>
                        <?php 
                            $sql_hieusp = "SELECT id,tenhieu FROM hieusanpham";
                            $row_hieusp = $conn->query($sql_hieusp);
                        ?>
                        <td width="97">Hiệu Sản Phẩm</td>
                        <td width="87"><select name="hieusp" id="">
                            <?php 
                                while($dong_hieusp = $row_hieusp->fetch()){
                            ?>
                            <option value="<?php echo $dong_hieusp['id'] ?>">
                                    <?php echo $dong_hieusp['tenhieu'] ?>
                            </option>
                            <?php 
                                }
                            ?>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Tình Trạng</td>
                        <td><select name="tinhtrang">
                                <option value="1">Kích hoạt</option>
                                <option value="2">Không kích hoạt</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td width="97">Nội Dung</td>
                        <td width="87"><textarea type="text" name="noidung" cols="40" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div align="center">
                                <input class="btn btn-outline-success" type="submit" name="them" value="Thêm">
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <div class="col-sm-2">
        <h3>&nbsp;</h3>
            <a href="index.php?quanly=sanpham&ac=lietke" class="btn btn-outline-danger">Liệt Kê Loại Sản Phẩm</a>
        </div>
    </div>
</div>
