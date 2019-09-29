<!doctype html>
<html lang="en">

<head>
    <title>Trang Quản Lý</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="css/style.css" media="screen">
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <?php
        session_start();
        if(!isset($_SESSION['dangnhap'])){
            header('location:login.php');
        }
       ?>
</head>

<body>
    <div class="wrapper">
        <?php
            include('controllers/connectdb.php');
            include('header.php');
            include('menu.php');
            include('content.php');
        ?>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="js/bootstrap.js"></script>
            <script src="js/delete.js"></script>
            <script src="js/salary.js"></script>
            <script type="text/javascript" src="js/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
            <script type="text/javascript" src="js/tinymce/js/tinymce/tinymce.min.js"></script>
            <script>
                tinymce.init({
                    selector: 'textarea'
                });
            </script>
</body>

</html>