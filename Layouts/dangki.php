<main>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center ">
                <h2>Đăng ký tài khoản</h2>
            </div>
        </div>
        <div class="row my-5 ">
            <div class="col-8 m-auto">
                <form id="registrationForm" method="post" action="index.php?action=dangki">

                    <div class="form-group">
                        <label for="user_name">Username:</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" required>
                    </div>
                    <div class=" form-group">
                        <label for="pass">Password:</label>
                        <input type="password" class="form-control" id="pass" name="pass" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Họ và tên:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Số điện thoại:</label>
                        <input type="text" class="form-control" id="email" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Giới tính:</label>
                        <select class="form-control" id="role" name="gender" required>
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                    </div>

                    <div class="row my-3">
                        <div class="col-4 m-auto ">
                            <button style="width:150px; height:40px" type="submit" name="dangki"
                                class="btn btn-primary btn-block">Đăng kí</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>