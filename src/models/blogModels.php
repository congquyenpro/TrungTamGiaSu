<?php 
class blogModels extends ConnectDB{
    // Tạo dữ liệu mới
    function Create($user_id, $type, $title, $image, $description, $content){
        // Câu lệnh sql
        $sql = "INSERT INTO `blog`(
                    `user_id`,
                    `type`,
                    `title`,
                    `image`,
                    `description`,
                    `content`
                )
                VALUES(
                    '$user_id',
                    '$type',
                    '$title',
                    '$image',
                    '$description',
                    '$content'
                )";
        // truy vấn và kiểm tra
        mysqli_query($this->connection,$sql);
        if (mysqli_error($this->connection) == ""){
            return true;
        }else{
            return false;
        }
    }
}