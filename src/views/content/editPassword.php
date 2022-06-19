



<!-- Main section end -->
<div class="main">
    <form action="<?php echo $actual_link ?>/<?php 
        if ($_SESSION['lever'] == 2) {
            echo "tutor";
        }else{
            echo "user";
        }
        ?>/change_password_processing/" method="post" id="change-pass" class="change-pass-box">
        <h3 class="text-heading mb-20">Thay đổi mật khẩu</h3>
        <p class="mb-8">Nhập mật khẩu cũ của bạn</p>
        <?php
        if (isset($_SESSION['error'])) {
            echo "<p style='color:red; translateY(25px);'>" . $_SESSION['error'] . "</p>";
            unset($_SESSION['error']);
        }
        ?>
        <p id="aleart" style="color: red"></p>
        <div class="mb-8 key"><i class="fa-solid fa-key"></i><input type="password" name="old_pass" placeholder="Nhập mật khẩu cũ" required></div>
        <div class="mb-8 key"><i class="fa-solid fa-key"></i><input type="password" id="password1" name="new_pass" placeholder="Tạo mật khẩu mới" required></div>
        <div class="mb-8 key"><i class="fa-solid fa-key"></i><input type="password" id="password2" name="new_pass" placeholder="Xác nhận mật khẩu mới" required></div>
        <button class="btn-tutor-blue" style="cursor: pointer">Thay Đổi</button>
    </form>
</div>

