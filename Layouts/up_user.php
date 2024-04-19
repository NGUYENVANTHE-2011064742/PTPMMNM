<main>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center ">
                <h2>Cập nhật tài khoản</h2>
            </div>
        </div>
        <div class="row my-5 ">
            <div class="col-8 m-auto">

                <form id="registrationForm" method="post" action="index.php?action=up_user">
                    <?php if(is_array($sua_user)) extract($sua_user)  ?>
                    <div class="form-group">
                        <label for="user_name">Username:</label>
                        <input type="text" class="form-control" value="<?=$user_name?>" id="user_name" name="user_name"
                            required>
                    </div>
                    <div class=" form-group">
                        <label for="pass">Password:</label>
                        <input type="password" class="form-control" value="<?=$pass?>" id="pass" name="pass" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Full Name:</label>
                        <input type="text" class="form-control" value="<?=$name?>" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" value="<?=$email?>" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Phone:</label>
                        <input type="text" class="form-control" value="<?=$phone?>" id="email" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Giới tính:</label>
                        <select class="form-control" id="role" name="gender" required>
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                    </div>
                    <input type="hidden" name="id_user" value="<?=$id_user?>">
                    <div class="row my-3">
                        <div class="col-4 m-auto ">
                            <button style="width:150px; height:40px" type="submit" name="up_user"
                                class="btn btn-primary btn-block">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>