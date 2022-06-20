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
    // hàm hiển thị phần login
    public function login(){
        $this->view("tutor","tutor/login","Đăng nhập",[]);
    }
        // hàm hiển thị phần register
        public function register(){
            $this->view("tutor","tutor/register","Đăng kí",[]);
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
        // Hiên Thị đổi mật khẩu
        public function change_password(){
            if ($this->checkLogin() == false){
                $actual_link = $this->getUrl();
                header("Location: $actual_link/tutor/login");
            }else{
                $this->view("tutor","editPassword","Đổi mật khẩu",[]);
            }
        }