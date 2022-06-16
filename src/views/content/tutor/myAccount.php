<link rel="stylesheet" href="<?php echo $actual_link ?>/public/css/my_account.css">
<div class="main-container">
        <div class="row">
            <div class="box-config">
                <h2 class="text-header">Tài khoản của tôi</h2>
                <p class="text-content"> Mã tài khoản: </p>
                <p class="text-content" style="color: green;">GC<?php echo $_SESSION['id']?></p>
                <div style="width: 100%; height: 13px"></div>
                <div class="box-control-config">
                    <input type="checkbox">
                    <label for="">Nhận thông báo qua SMS</label>
                    <div style="width: 100%; height: 13px"></div>
                    <input type="checkbox">
                    <label for="">Nhận thông báo qua Email</label>
                </div>
                <div class="box-control-config">
                    <div style="width: 100%; height: 10px"></div>
                    <a href="<?php echo $actual_link ?>/home/my_blog/">
                        Quản lý bài blog
                    </a>
                    <div style="width: 100%; height: 10px"></div>
                    <a href="<?php echo $actual_link ?>/tutor/change_password/">
                        Thay đổi mật khẩu
                    </a>
                </div>
            </div>