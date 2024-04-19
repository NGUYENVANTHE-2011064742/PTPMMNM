<?php 

if(isset($_SESSION['user_name'])){
    extract($_SESSION['user_name']);
}
?>
<div class="container">

    <div class="row my-5 tilde-kh text-center">

        <div class="col-6 m-auto ">
            <a href="" class="text-decoration-none" onclick="ls_kh()">
                <h3>Thông tin khách hàng</h3>
            </a>
        </div>

    </div>
    <div class="row mb-5">
        <div class="col-12 tt-kh" style="display:block">
            <table style="width: 100%;">
                <thead>
                    <tr style="height:50px">
                        <th>Họ và tên</th>
                        <th>Email</th>
                        <th>User Name</th>
                        <th>Pass</th>
                        <th>Số điện thoại</th>
                        <th>Giới tính</th>
                        <!-- <th>Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php  
                $suaid_user="index.php?action=suaid_user&id_user=".$id_user;
                $tr = ' <tr style="border-bottom: 1px solid orangered">
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$user_name.'</td>
                <td>'.$pass.'</td>
                <td>'.$phone.'</td>
                <td>'.$gender.'</td>
                
            </tr>';
            echo $tr;
            
        ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<!-- // <td class="action-buttons">
                // <a href="'.$suaid_user.'"> <span class="btn btn-success" onclick="editRow(1)">Sửa</span></a>
                // </td> -->