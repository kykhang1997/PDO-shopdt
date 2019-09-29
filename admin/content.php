<div class="content">
    <div class="box-contains">
        <?php 
            if(isset($_GET['quanly'])&&$_GET['ac']){
                $ql = $_GET['quanly'];
                $ac = $_GET['ac'];
            } else {
                $ql = '';
            } if (($ql == 'loaisp') && ($ac == 'them')) {
                include ('modules/loaisp/them.php');
            } elseif (($ql == 'loaisp') && ($ac == 'lietke')){
                include ('modules/loaisp/lietke.php');
            } elseif (($ql == 'loaisp') && ($ac == 'sua')){
                include ('modules/loaisp/sua.php');
            } elseif (($ql == 'hieusp') && ($ac == 'them')) {
                include ('modules/hieusp/them.php');
            } elseif (($ql == 'hieusp') && ($ac == 'lietke')) {
                include ('modules/hieusp/lietke.php');
            } elseif (($ql == 'hieusp') && ($ac == 'sua')) {
                include ('modules/hieusp/sua.php');
            } elseif (($ql == 'sanpham') && ($ac == 'them')) {
                include ('modules/sanpham/them.php');
            } elseif (($ql == 'sanpham') && ($ac == 'lietke')) {
                include ('modules/sanpham/lietke.php');
            } elseif (($ql == 'sanpham') && ($ac == 'sua')) {
                include ('modules/sanpham/sua.php');
            } elseif (($ql == 'tintuc') && ($ac == 'them')) {
                include ('');
            } elseif (($ql == 'tintuc') && ($ac == 'lietke')) {
                include ('');
            } elseif (($ql == 'tintuc') && ($ac == 'sua')) {
                include ('');
            } elseif (($ql == 'timkiem') && ($ac == 'sp')) {
                include ('');
            } elseif (($ql == 'gallery') && ($ac == 'them')) {
                include ('modules/gallery/them.php');
            } elseif (($ql == 'gallery') && ($ac == 'lietke')) {
                include ('modules/gallery/lietke.php');
            } elseif (($ql == 'gallery') && ($ac == 'sua')) {
                include ('');
            } elseif (($ql == 'hoadon') && ($ac == 'lietke')){
                include ('');
            } elseif (($ql == 'hoadon') && ($ac == 'sua')){
                include ('');
            }
        ?>
    </div>
</div>
<div class="clear"></div>