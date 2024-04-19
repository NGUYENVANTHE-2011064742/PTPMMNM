<main>
    <div class="container my-5 kh1">
        <div class="row mb-2">
            <div class="col-12">
                <h3>Khóa học </h3>
            </div>
        </div>
        <div class="row">
            <?php 
             if(isset($_SESSION['user_name']))
             extract($_SESSION['user_name']);
             
               foreach ( $load as $loadok) {
                    $img_path="./uploads/";
                  extract($loadok) ; 
                  $imgh=$img_path.$img;           
            ?>
            <div class="col-3">
                <a class="text-decoration-none"
                    href="index.php?action=ctkhoahoc&&id_product=<?=$id_product?>&&id_user=<?=$id_user?>">
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

    </div>


</main>