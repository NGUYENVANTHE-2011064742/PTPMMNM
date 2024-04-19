<main>
    <div class="container my-5">
        <form action="" method="post">
            <div class="row">

                <?php if(is_array($load_ct_product_id)) 
$img_path="./uploads/";
extract($load_ct_product_id) ; 
$imgh=$img_path.$img;
?>
                <div class="col-4 nd">
                    <div class="row">

                        <div class="col-12 mb-3">
                            <h3><?=$name_product?></h3>
                        </div>
                        <div class="col-12">
                            <p><?=$content?></p>
                        </div>
                    </div>
                </div>
                <div class="col-4 dk">
                    <div class="row ">
                        <div class="col-12">
                            <div class="img">
                                <img style="width: 100%; height: 200px; border-radius: 10px;" src="<?=$imgh?>" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-10 m-auto">
                            <div class="name-khoc my-3">
                                <h6>Khóa học</h6>
                            </div>
                        </div>
                        <div class="col-10 m-auto">
                            <div class="name-khoc my-3">
                                <p><i class=" me-3 fa-brands fa-dribbble"></i><?=$level?></p>
                            </div>
                        </div>
                        <div class="col-10 m-auto">
                            <div class="name-khoc my-1">
                                <p><i class=" me-3 fa-solid fa-lemon"></i>Tổng số <b><?=$total_lessons?></b> bài học</p>
                            </div>
                        </div>
                        <div class="col-10 m-auto">
                            <div class="name-khoc my-1">
                                <p><i class="me-3 fa-solid fa-timeline"></i><?=$time_cource?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" name="name_product" value="<?=$name_product?>">
            <input type="hidden" name="price_product" value="<?=$price_product?>">
            <input type="hidden" name="id_product" value="<?=$id_product?>">
            <input type="hidden" name="id_khoahoc" value="<?=$FK_id_khoahoc?>">
            <div class="row my-5">
                <div class="col-3 m-auto">
                    <button style="width: 200px;" type="submit" name="dangki_kh" class="btn btn-warning">Đăng
                        Ký</button>
                </div>
            </div>
        </form>
    </div>
</main>