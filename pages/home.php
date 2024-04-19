<main>
    <div class="container my-5 kh1">
        <div class="row mb-2">
            <div class="col-12">
                <h3>Khóa học Pro</h3>
            </div>
        </div>
        <div class="row">
            <?php 
             if(isset($_SESSION['user_name']))
             extract($_SESSION['user_name']);
               $load_product_pro=load_product_pro();
               foreach ( $load_product_pro as $load) {
                    $img_path="./uploads/";
                  extract($load) ; 
                  $imgh=$img_path.$img;           
            ?>
            <div class="col-3">
                <a class="text-decoration-none"
                    href="index.php?action=ctkhoahoc&&id_product=<?=$id_product?>&&id_user=<?php if(isset($id_user)) echo $id_user?>">
                    <div class="img">
                        <img style="width:90%; height: 100%; border-radius: 10px;" src="<?=$imgh?>" alt="">
                    </div>
                    <div class="name-khoc5 mt-2">
                        <h6><?=$name_product?></h6>
                    </div>
                    <div class="price">
                        <span><?=number_format($price_product,0,'.',',')?>đ</span>
                    </div>
                </a>

            </div>

            <?php }?>

            <!-- <div class="col-3">
                <div class="img">
                    <img style="width:90%; height: 100%; border-radius: 10px;" src="./images/kh2.png" alt="">
                </div>
                <div class="name-khoc mt-2">
                    <h6>Ngôn ngữ tiền xử lý Sass</h6>
                </div>
                <div class="price">
                    <span>299.000đ</span>
                </div>

            </div>
            <div class="col-3">
                <div class="img">
                    <img style="width:90%; height: 100%; border-radius: 10px;" src="./images/kh3.png" alt="">
                </div>
                <div class="name-khoc mt-2">
                    <h6>JavaScript Pro</h6>
                </div>
                <div class="price">
                    <span>2.399.000đ</span>
                </div>

            </div>
            <div class="col-3">
                <div class="img">
                    <img style="width:90%; height: 100%; border-radius: 10px;" src="./images/kh1.png" alt="">
                </div>
                <div class="name-khoc mt-2">
                    <h6>NextJS Pro</h6>
                </div>
                <div class="price">
                    <span>799.000đ</span>
                </div>

            </div> -->
        </div>
        <div class="row my-5">
            <div class="col-12">
                <span style="color: rgb(85, 85, 85);">20.585+</span>người đã học
            </div>
        </div>
    </div>

    <div class="container my-5 kh2">
        <div class="row mb-2">
            <div class="col-12">
                <h3>Khóa học cơ bản</h3>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <span style="color: rgb(85, 85, 85);">10.469+</span>người đã học
            </div>
        </div>
        <div class="row">
            <?php 
           
               $load_product_pro=load_product_coban();
               foreach ( $load_product_pro as $load) {
                    $img_path="./uploads/";
                  extract($load) ; 
                  $imgh=$img_path.$img;           
            ?>
            <div class="col-3 1 mb-3">
                <a class="text-decoration-none"
                    href="index.php?action=ctkhoahoc&&id_product=<?=$id_product?>&&id_user=<?=$id_user?>">
                    <div class="img">
                        <img style="width:90%; height: 100%; border-radius: 10px;" src="<?=$imgh?>" alt="">
                    </div>
                    <div class="name-khoc5 mt-2">
                        <h6><?=$name_product?></h6>
                    </div>
                    <div class="price">
                        <span><?=number_format($price_product,0,'.',',')?> đ</span>
                    </div>
                </a>

            </div>


            <?php }?>

        </div>

    </div>

    <div class="container my-5 kh2">
        <div class="row mb-2">
            <div class="col-12">
                <h3>Khóa học bán chạy</h3>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <span style="color: rgb(85, 85, 85);">40.469+</span>người đã học
            </div>
        </div>
        <div class="row">
            <?php 
           
               $load_product_top=load_product_banchay();
               foreach ( $load_product_top as $load) {
                    $img_path="./uploads/";
                  extract($load) ; 
                  $imgh=$img_path.$img;           
            ?>
            <div class="col-3 1 mb-3">
                <a class="text-decoration-none"
                    href="index.php?action=ctkhoahoc&&id_product=<?=$id_product?>&&id_user=<?=$id_user?>">
                    <div class="img">
                        <img style="width:90%; height: 100%; border-radius: 10px;" src="<?=$imgh?>" alt="">
                    </div>
                    <div class="name-khoc5 mt-2">
                        <h6><?=$name_product?></h6>
                    </div>
                    <div class="price">
                        <span><?=number_format($price_product,0,'.',',')?> đ</span>
                    </div>
                </a>

            </div>


            <?php }?>

        </div>

    </div>
</main>