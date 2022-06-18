<!-- Main-container section start -->
<section class="container-main">
        <div class="container">
            <nav>
                <ol class="my-home">
                    <li class="breadcumb-item">
                        <a href="/home/read"><i class="fa-solid fa-house"></i></a>
                    </li>
                    <span>/</span>
                    <li class="breadcumb-item">
                        <span>Blog của tôi</span>
                    </li>
                </ol>
            </nav> 
        </div>
        
        <div class="form">
            <div class="text-heading">
                <h1>Blog của tôi</h1>
            </div>
            <div class="form-fill">
                <div class="form-all">
                    <input id="search-input" type="search" class="search-input" size="35px" placeholder="Tìm kiếm blog" value="<?php echo $data[0]?>">
                    <a id="search" href="my_blog&search=">
                        <button class="search-btn"><i class="icon-search fa-solid fa-magnifying-glass"></i></button>
                    </a>
                </div>
                <div class="category-box-group">
                    <div class="category-box-item">
                        <a href="#">
                            <h3 class="category-title">Học tập</h3>
                        </a>
                    </div>
                    <div class="category-box-item">
                        <a href="#">
                            <h3 class="category-title">Thuê gia sư</h3>
                        </a>
                    </div>
                    <div class="category-box-item">
                        <a href="#">
                            <h3 class="category-title">Kiến thức</h3>
                        </a>
                    </div>
                    <div class="category-box-item">
                        <a href="#">
                            <h3 class="category-title">Luyện thi cử</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>