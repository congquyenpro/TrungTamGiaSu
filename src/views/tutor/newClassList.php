<link rel="stylesheet" href="<?php echo $actual_link ?>/public/css/class_list.css">
<!-- Main-container section start -->
<section class="container-main">
        <div class="container">
            <nav>
                <ol class="my-home">
                    <li class="breadcumb-item">
                        <a href="<?php echo $actual_link?>/home/read"><i class="fa-brands fa-accusoft"></i></a>
                    </li>
                    <span>/</span>
                    <li class="breadcumb-item">
                        <span>Danh sách lớp mới</span>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="head-text">
            <div class="text-heading">
                <h1>Danh sách lớp mới</h1>
            </div>
        </div>
        
        <div class="filter">
            <div class="title">
                <i class="fa-solid fa-filter"></i>
                <h5>Bộ lọc</h5>
            </div>

            <ul class="filter-group">
                <li class="filter-item">
                    <span class="item-text-head">Chọn môn học <i class="fa-solid fa-angle-down"></i></span> 
                    <ul class="filter-subject-group">
                        <li class="filter-subject-item"><input type="checkbox" name="name[]" id="square-check"><label for="square-check" class="ml-5">Toán học</label></li>
                        <li class="filter-subject-item"><input type="checkbox" name="name[]" id="square-check2"><label for="square-check2" class="ml-5">vật lý</label></li>
                        <li class="filter-subject-item"><input type="checkbox" name="name[]" id="square-check3"><label for="square-check3" class="ml-5">sinh học</label></li>
                        <li class="filter-subject-item"><input type="checkbox" name="name[]" id="square-check4"><label for="square-check4" class="ml-5">ngữ văn</label></li>
                        <li class="filter-subject-item"><input type="checkbox" name="name[]" id="square-check5"><label for="square-check5" class="ml-5">tiếng anh</label></li>
                        <li class="filter-subject-item"><input type="checkbox" name="name[]" id="square-check6"><label for="square-check6" class="ml-5">các môn khác</label></li>
                        <div class="filter-clean">
                            <div class="bodertop"></div>
                            <span id="filter-clear">Xóa</span>
                            <span class="filter-lean">thu gọn <i class="fa-solid fa-angle-up"></i></span>
                        </div>
                    </ul>
                </li>
                <li class="filter-item">
                    <span class="item-text-head">Chọn cấp học <i class="fa-solid fa-angle-down"></i></span> 
                    <ul class="filter-level-group">
                        <li class="filter-level-item"><input type="checkbox" name="name[1]" id="square-check7"><label for="square-check7" class="ml-5">mẫu giáo</label></li>
                        <li class="filter-level-item"><input type="checkbox" name="name[1]" id="square-check8"><label for="square-check8" class="ml-5">cấp 1</label></li>
                        <li class="filter-level-item"><input type="checkbox" name="name[1]" id="square-check9"><label for="square-check9" class="ml-5">cấp 2</label></li>
                        <li class="filter-level-item"><input type="checkbox" name="name[1]" id="square-check10"><label for="square-check10" class="ml-5">cấp 3</label></li>
                        <li class="filter-level-item"><input type="checkbox" name="name[1]" id="square-check11"><label for="square-check11" class="ml-5">đại học</label></li>
                        <li class="filter-level-item"><input type="checkbox" name="name[1]" id="square-check12"><label for="square-check12" class="ml-5">người đi làm</label></li>
                        <div class="filter-clean">
                            <div class="bodertop"></div>
                            <span id="filter-clear1">Xóa</span>
                            <span class="filter-lean">thu gọn <i class="fa-solid fa-angle-up"></i></span>
                        </div>
                    </ul>
                </li>
                <li class="filter-item">
                    <span class="item-text-head">Chọn yêu cầu <i class="fa-solid fa-angle-down"></i></span> 
                    <ul class="filter-ask-group">
                        <li class="filter-ask-item"><input type="checkbox" name="name[2]" id="square-check13"><label for="square-check13" class="ml-5">học sinh</label></li>
                        <li class="filter-ask-item"><input type="checkbox" name="name[2]" id="square-check14"><label for="square-check14" class="ml-5">giáo viên</label></li>
                        <div class="filter-clean">
                            <div class="bodertop"></div>
                            <span id="filter-clear2">Xóa</span>
                            <span class="filter-lean">thu gọn <i class="fa-solid fa-angle-up"></i></span>
                        </div>
                    </ul>
                </li>
                <li class="filter-item">
                    <span class="item-text-head">Chọn khu vực <i class="fa-solid fa-angle-down"></i></span> 
                    <ul class="filter-area-group">
                        <li class="filter-area-item"><input type="checkbox" name="name[3]" id="square-check15"><label for="square-check15" class="ml-5">quận hà đông</label></li>
                        <li class="filter-area-item"><input type="checkbox" name="name[3]" id="square-check16"><label for="square-check16" class="ml-5">quận cầu giấy</label></li>
                        <div class="filter-clean">
                            <div class="bodertop"></div>
                            <span id="filter-clear3">Xóa</span>
                            <span class="filter-lean">thu gọn <i class="fa-solid fa-angle-up"></i></span>
                        </div>
                    </ul>
                </li>
                <li class="filter-btn">
                    <button type="submit">
                        <i class="fa-solid fa-filter"></i>
                        <span>Tiến hành lọc</span>
                    </button>
                </li>
            </ul>
        </div>

        <div class="class-group">
            <?php foreach ($data as $newClass) { ?>
                <div class="class-item-box">
                    <div class="class-code">C<?php echo $newClass['id']?></div>
                    <div class="container-class">
                        <p class="class-grade">
                            <i class="fa-solid fa-book"></i>
                            <b><?php echo $newClass['name']?> - Lớp <?php echo $newClass['lever']?></b>
                        </p>
                        <p class="class-location">
                            <i class="fa-solid fa-location-dot"></i>
                            <?php echo $newClass['location']?>
                        </p>
                        <p class="class-fee">
                            <i class="fa-solid fa-dollar-sign"></i>
                            <?php echo number_format($newClass['price'], 0, '', '.')?>₫/buổi, 
                            <?php echo $newClass['day_in_week']?> buổi/tuần
                        </p>
                        <p class="class-ask">
                            <i class="fa-solid fa-bookmark"></i>
                            Yêu cầu: <?php 
                            if ($newClass['gender'] == 0){
                                echo "Sinh Viên";
                            }else if ($newClass['gender'] == 1){
                                echo "Sinh Viên Nam";
                            }else if ($newClass['gender'] == 2){
                                echo "Sinh Viên Nữ";
                            }
                            ?>
                        </p>
                        <a href="<?php echo $actual_link?>/extra_class/view_class/<?php echo $newClass['id']?>" class="class-detail-btn">
                            Xem chi tiết
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            <?php } ?>
 
        </div>
    </section>