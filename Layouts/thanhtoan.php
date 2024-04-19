<style>
p {
    padding: 0;
    margin: 0;
}

.tthd {
    background-color: antiquewhite;
    height: 480px;
}
</style>
<main>
    <div class="container">
        <form action="http://localhost:3000/Layouts/atm_momo.php" method="post">
            <div class="row my-5">

                <div class="col-6">
                    <?php if (is_array($load_tt_dkok))  extract($load_tt_dkok) ?>

                    <div class="row tthd">
                        <div class="col-12 my-3">
                            <h2>Thông tin khách hàng</h2>
                        </div>
                        <input type="text" name="amount" hidden value="<?= $price ?>" />
                        <div class="col-12">
                            <p>Tên khách hàng: <b><?= $name_kh ?></b> </p> <br>
                            <p>Email: <b><?= $email ?></b> </p> <br>
                            <p>Số điện thoại: <b><?= $phone ?></b> </p> <br>
                            <p>Giới tính: <b><?= $gender ?></b> </p> <br>
                            <p>Tên khóa học đăng kí: <b><?= $name_khoahoc ?></b> </p> <br>
                            <p>Ngày đăng kí: <b><?= $date ?></b> </p> <br>
                            <p>Tổng tiền : <b style="color:red"><?= number_format($price, 0, '.', ',') ?>đ</b> </p> <br>
                        </div>
                    </div>
                </div>

                <?php
                $sql = "Select * from pay ";
                $load_pay = pdo_query_one($sql);
                extract($load_pay);
                ?>
                <div class="col-6 ">
                    <div class="col-12 my-3">
                        <h2 class=" text-center">Thanh Toán</h2>
                    </div>
                    <div class="row " id="signupForm" style="display:block">
                        <div class="col-12  text-center">
                            <!-- <img src="./uploads/<?= $img_ng_h ?>" style="width:70%; height:200px;margin:auto" alt=""> -->
                        </div>
                        <div class="col-8 my-3 m-auto">
                            <p><strong>Chủ tài khoản :</strong> <?= $name ?></p>
                            <p><strong>Số tài khoản :</strong> <?= $stk_ng_h ?></p>
                            <p> <strong>Tên ngân hàng :</strong> tpbank</p>
                            <p> <strong>Nội dung:</strong> Tên + sdt đã đặt phòng</p> </br>
                            <span class="p-2" style="background-color: yellow;
            color: #354618;">Ví dụ: Thế 0931247957</span>
                        </div>
                    </div>
                    <div class="row " id="login-form" style="display:none">
                        <div class="col-12  text-center">
                            <!-- <img src="./uploads/<?= $img_momo ?>" style="width:50%; height:200px;margin:auto" alt=""> -->
                        </div>
                        <div class="col-8 my-3 m-auto">
                            <p><strong>Chủ tài khoản :</strong><?= $name ?></p>
                            <p><strong>Số điện thoại :</strong> <?= $sdt_momo ?> </p>
                            <p> <strong>Nội dung:</strong> Tên + sdt đã đặt</p> </br>
                            <span class="p-2" style="background-color: yellow;
            color: #354618;">Ví dụ: Thế 0931247957</span>


                        </div>
                    </div>

                    <div class="col-12 my-3">
                        <select id="mySelect" class="form-select" name="mySelect">
                            <option value="tpbank">Tpbank bankking</option>
                            <option value="momo">Ví điện tử Momo</option>
                        </select>

                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-4 m-auto ">
                        <button style="width:100%" type="submit" name="thtt" class="btn btn-warning">Thực hiện thanh
                            toán</button>
                    </div>
                </div>
        </form>
    </div>
</main>

<script>
document.getElementById('mySelect').addEventListener('change', function() {
    var selectedOption = this.value;
    var elementToToggle = document.getElementById('login-form');
    var elementToToggleaaa = document.getElementById('signupForm');

    // Ẩn tất cả các phần tử
    elementToToggle.style.display = 'none';
    elementToToggleaaa.style.display = 'block';

    // Hiển thị phần tử tương ứng với tùy chọn được chọn
    if (selectedOption === 'momo') {
        elementToToggle.style.display = 'block';
        elementToToggleaaa.style.display = 'none';
    } else {
        elementToToggle.style.display = 'none';
        elementToToggleaaa.style.display = 'block';
    }



});
</script>