<?php 
class tutor extends Controllers{
    // Kiểm tra đăng nhập
    public function checkLogin(){
        // Kiểm tra xem trong session có tồn tại phiên đăng nhập không
        if (isset($_SESSION['lever']) == false){
            return false;
        }
        // Kiểm tra cấp
        if ($_SESSION['lever'] == 2){
            return true;
        }
        return false;
    }
    // hàm chức năng đăng nhập
    public function login(){
        $this->view("tutor","tutor/login","Đăng nhập",[]);
    }

    public function login_processing(){
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        
        $login = $this->model("giaSuModels");
        $actual_link = $this->getUrl();

        if($login->loginUser($email,$password)){
            header("Location: $actual_link/tutor/my_account");
        }else{
            $_SESSION['error'] = "Email hoặc mật khẩu không đúng!";
            header("Location: $actual_link/tutor/login");
        }
    }

    // hàm chức năng đăng ký
    public function register(){
        $this->view("tutor","tutor/register","Đăng kí",[]);
    }

    public function register_processing(){
        $name = addslashes($_POST["name"]);
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
            
        $secure_pass = password_hash($password, PASSWORD_BCRYPT);

        $save = $this->model("giaSuModels");
        $actual_link = $this->getUrl();

        if ($save->CreateUser($name,$email,$secure_pass)){
            $_SESSION['success'] = "Đăng kí tài khoản thành công, vui lòng đăng nhập";
            header("Location: $actual_link/tutor/login");
        }else{
            $_SESSION['error'] = "Email này đã được sử dụng, vui lòng đăng kí lại";
            header("Location: $actual_link/tutor/register");
        }
    }

    // Hiển thị phần tài khoản của tôi
    public function my_account(){
        if ($this->checkLogin() == false){
            $actual_link = $this->getUrl();
            header("Location: $actual_link/tutor/login");
        }
        $model = $this->model('giaSuModels');
        $myAccount = $model->selectOne('id',$_SESSION['id']);
        $this->view("tutor","tutor/myAccount","Tài khoản của tôi",[
            'email'         => $myAccount['email'],
            'phone_number'  => $myAccount['phone_number'],
            'gender'        => $myAccount['gender'],
            'address'       => $myAccount['address'],
            'description'   => $myAccount['description'], 
            'school_level'  => $myAccount['school_level'],
            'subject'       => $myAccount['subject']
        ]);
    }
    // hàm chức năng đổi mật khẩu
    public function change_password(){
        if ($this->checkLogin() == false){
            $actual_link = $this->getUrl();
            header("Location: $actual_link/tutor/login");
        }else{
            $this->view("tutor","editPassword","Đổi mật khẩu",[]);
        }
    }

    public function change_password_processing(){
        $password   = addslashes($_POST['old_pass']);
        $new_pass   = addslashes($_POST['new_pass']);
        $secure_pass = password_hash($new_pass, PASSWORD_BCRYPT);
        $save = $this->model("giaSuModels");
        $actual_link = $this->getUrl();
        if ($save->ChangePass($password,$secure_pass)){
            $_SESSION['done'] = "Đổi mật thành công";
            header("Location: $actual_link/tutor/my_account");
        }else{
            $_SESSION['error'] = "Mật khẩu hiện tại không đúng";
            header("Location: $actual_link/tutor/change_password");
        }
    }

    // hàm chức năng đăng xuất
    public function logout(){
        // Xóa Phiên và render về trang login
        session_destroy();
        $actual_link = $this->getUrl();;
        header("Location: $actual_link/tutor/login");
    }

    // Hàm chức năng cập nhật tài khoản
    public function update(){  
        // Nhận dữ liệu
        $name           = addslashes($_POST['name']);
        $email          = addslashes($_POST['email']);
        $phone_number   = addslashes($_POST['phone_number']);
        $gender         = addslashes($_POST['gender']);
        $school_level   = addslashes($_POST['school_level']);
        $subject        = addslashes($_POST['subject']);
        $address        = addslashes($_POST['address']);
        $description    = addslashes($_POST['description']);
        $avatar         = $_SESSION['avatar'];

        // Xử lý file gửi lên
        $file = basename($_FILES["avatar"]["name"]);

        // Lưu thông tin
        $save = $this->model("giaSuModels");
        $actual_link = $this->getUrl();;
        if ($save->updateOne($_SESSION['id'], $name, $email, $phone_number, $gender, $avatar, $school_level, $subject, $address, $description)){
            $_SESSION['name']   = $name;
            $_SESSION['avatar'] = $avatar;
            header("Location: $actual_link/tutor/my_account");
        }else{
            $_SESSION['error'] = "Lỗi Trùng email!";
            header("Location: $actual_link/tutor/my_account");
        }
    }
}

    

        
