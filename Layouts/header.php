<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./public/bootstrap-5.3.2/dist/css/bootstrap.css">
    <script src="./public/bootstrap-5.3.2/dist/js/bootstrap.js"></script>
    <title>Khóa học online</title>
    <style>
 .cha {
    position: relative;
    right: 50px;
    width: 250px;
    height: 35px;
    padding: 0;

}

.cha li {
    padding: 5px 0;
    list-style: none;
  
}

.cha li a {
    padding-left:-20px;
    color: white;
    font-weight: 700;
    text-decoration: none;
}

.con {
    display: none;
    margin-top: 5px;
    z-index: 10;
    padding: 0;
    position: absolute;
    width: 180px;
    height: 85px;
    cursor: pointer;
    background-color: white;
    box-shadow: 0 0 5px black;
}

.cha:hover .con {
    display: block;
}

hr {
    margin: 0 0 10px 0;
}

.con li {
    list-style: none;
    display: block;
    padding: 10px;
}

.con li a {
    padding: 10px 5px;
    color: dimgray;
}


    .menu-dm {
        width: 100%;
        height: 40px;

    }

    .menu-dm ul {
        width: 40%;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .menu-dm ul li {
        list-style: none;
        padding: 5px 10px;
    }




    .menu-dm ul li a {
        font-family: Arial, Helvetica, sans-serif, ;
        color: white;
        font-size: 20px;
        text-decoration: none;
    }

    .menu-dm ul li {
        list-style: none;
        padding: 5px 15px;
        /* Adjust padding as needed */
        margin-right: 0;
        /* Remove right margin */
    }

    <style>
    /* ... Your existing styles ... */

    .menu-dm {
        width: 100%;
        background-color: orangered;
        height: 40px;
        text-align: left;
        /* Align text to the left */
    }

    .menu-dm ul {
        width: 100%;
        /* Occupy full width */
        padding: 0;
        display: flex;
        align-items: left;
        justify-content: flex-start;

    }

    .menu-dm ul li {
        list-style: none;
        padding: 5px 20px;
        margin-right: 0;
        /* Remove right margin */
    }
    </style>

    </style>

</head>

<body>

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="row my-12 ">
                        <div class="col-4">

                        </div>
                        <div class="col-4">
                            <a href="./index.php"> <img style="width: 200px; height: 60px;" src="./images/logo.jpg"
                                    alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="col-5">
                    <div class="row my-3">
                        <div class="col-12">
                            <div class="input-group ">
                                <input type="text" class="form-control" placeholder="Tìm kiếm"
                                    aria-label="Example text with button addon" aria-describedby="button-addon1">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 ">
                    <div class="row justify-content-end my-3">
                        <?php if(isset($_SESSION['user_name'])) {extract($_SESSION['user_name']) ?>
                        <div class="col-5 ">
                            <ul class="cha">
                                <li><a href=""><?=$name?></a>
                                    <ul class="con">
                                        <?php if($role == 0){?>
                                        <li><a href="index.php?action=khachhang">Vào trang cá nhân</a></li>
                                        <?php } else{?>
                                        <li><a href="./admin/index.php">Vào trang admin</a></li>
                                        <?php }?>
                                        <li><a href="index.php?action=thoat">Thoát</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <?php } else{?>
                        <div class="col-5 ">
                            <li class="dangnhap"><a href="index.php?action=dangki">Đăng kí</a></li>
                        </div>
                        <div class="col-5 ">
                            <li class="dangnhap "><a href="Layouts/login.php">Đăng nhập</a></li>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="container-fluid row">
                <div class="col-4 menu-dm">
                    <ul>
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li><a href="index.php?action=gioithieu">Giới thiệu</a></li>
                        <li><a href="index.php?action=khoahoc">Khóa học</a></li>
                        <li><a href="index.php?action=lienhe">Liên hệ</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <hr>
        <?php if(isset($_GET['action']) ){?>

        <?php }else{?>

        <div class="container-header " style="margin-top:-10px;">


            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <!-- Set interval to 5000 (5 seconds) -->
                        <img style="width: 100%; height: 400px;" src="./images/bannerf8.png" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <!-- Set interval to 5000 (5 seconds) -->
                        <img style="width: 100%; height: 400px;" src="./images/Bannerf82.png" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <!-- Set interval to 5000 (5 seconds) -->
                        <img style="width: 100%; height: 400px;" src="./images/bannerf83.png" class="d-block w-100"
                            alt="...">
                    </div>

                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> -->


                </div>
            </div>
        </div>
        <?php }?>
    </header>