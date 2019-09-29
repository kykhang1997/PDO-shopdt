<?php
if (isset($_POST['logout'])) {
    unset($_SESSION['dangnhap']);
    header('location:login.php');
}
?>
    <div class="container ">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php?quanly=loaisp&ac=lietke">Loại Sản Phẩm <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=hieusp&ac=lietke">Hiệu Sản Phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=sanpham&ac=lietke">Sản Phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=tintuc&ac=lietke">Tin Tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=hoadon&ac=lietke">Hoá Đơn</a>
                    </li>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="submit" name="logout" value="Đăng xuất" class="btn btn-outline-warning nav-link" />
                    </form>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="index.php?quanly=timkiem&ac=sp">
                    <input class="form-control mr-sm-2" type="text" placeholder="Nhập Mã Sản Phẩm .....">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>