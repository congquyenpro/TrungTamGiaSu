<?php
    class Controllers{
        // hàm gọi model
        protected function model($model){
            require_once "./src/models/". $model .".php";
            return new $model;
        }
?>