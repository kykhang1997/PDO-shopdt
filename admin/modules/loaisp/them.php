<div class="container">
    <div class="row">
        <div class="col-sm-10 border-right" >
            <form action="modules/loaisp/xuly.php" method="post" enctype="multipart/form-data">
                <h3>&nbsp;</h3>
                <table width="100%" >
                    <tr style="margin-bottom: 1%">
                        <td colspan="2" style="text-align:center; font-size:25px;margin-bottom:1%">Thêm loại sản phẩm</td>
                    </tr>
                    <tr>
                        <td width="97">Tên Loại Sản Phẩm</td>
                        <td width="87"><input type="text" name="tenloai"></td>
                    </tr>
                    <tr>
                        <td>Tình Trạng</td>
                        <td><select name="tinhtrang">
                                <option value="1">Kích hoạt</option>
                                <option value="2">Không kích hoạt</option>
                            </select></td>
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
            <a href="index.php?quanly=loaisp&ac=lietke" class="btn btn-outline-danger">Liệt Kê Loại Sản Phẩm</a>
        </div>
    </div>
</div>