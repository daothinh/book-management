<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="../../public/img/mdb-favicon.ico" type="image/x-icon" />
    <link
            rel='stylesheet'
            href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css'
            integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
            crossorigin='anonymous'
    />

    <link rel='stylesheet' href='../../public/css/mdb.home.css' />
    <link rel='stylesheet' href='../../public/css/mdb.form.css' />
    <link rel='stylesheet' href='../../public/css/mdb.insert.css' />
    <link rel='stylesheet' href='../../public/css/mdb.modal.css' />
</head>
<body>
    <form method="POST" class="form-add-book" enctype="multipart/form-data" action="process_insert.php">
        <div class="wrapper-add-book container">
            <header class="header-add-book">
                <a href="/">
                    <img class='logo' src="../../public/img/letter-b-for-book-logo-vector-34122418.jpg" alt="logo">
                </a>
            </header>

            <div class="content-add mt-4">
                <div class="column">
                    <!-- <div class="row mt-3" style="padding-bottom: 20px;">
                        <div class="wrapper-input">
                            <label class="label-input">Mã sách</label>
                            <input class="input-id input" name="idBook" required></input>
                        </div>
                    </div> -->
                    <div class="row" style="padding-bottom: 20px;">
                        <div class="wrapper-input">
                            <label class="label-input">Mã sách</label>
                            <input class="input-title input" name="idBook"  required/>
                        </div>
                        
                        <div class="wrapper-input">
                            <div class="text-primary">
                                <?php 
                                if(isset($_SESSION['error'])) {
                                ?>
                                    <p class="text-danger text-left font-weight-bold mx-3 mb-0">*
                                        <?php echo $_SESSION['error']; 
                                            unset($_SESSION['error']);
                                        ?>
                                    </p>
                                <?php 
                                } 
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="wrapper-input">
                            <label class="label-input">Tiêu đề</label>
                            <input class="input-title input" name="title"  required/>
                        </div>
                        
                        <div class="wrapper-input">
                            <label class="label-input">Tác giả</label>
                            <input class="input-author input" name="author"  required/>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="wrapper-input">
                            <label class="label-input">Ngày phát hành</label>
                            <input type="date" class="input-release-date input" name="dateRelease"  required/>
                        </div>
                        <div class="wrapper-input">
                            <label class="label-input">Số trang</label>
                            <input type="number" class="input input-number-page" name="totalPage" required>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="book-description">
                            <label>Mô tả</label>
                            <textarea class="input-description input" name="description" required></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <select name="category" id="form-add-book" class="book-category" required>
                            <option value="">Thể loại</option>
                            <option value="Khoa học">Khoa học</option>
                            <option value="lịch sử">lịch sử</option>
                            <option value="Văn học">Văn học</option>
                            <option value="Địa lý">Địa lý</option>
                            <option value="Tình cảm">Tiểu thuyết</option>
                            <option value="Giải trí">Giải trí</option>
                            <option value="Tài liệu">Tài liệu</option>
                            <option value="Tâm lý học">Tâm lý học</option>
                            {{!-- <option value="Địa">Địa</option> --}}
                        </select>
                    </div>
                </div>
                <div class="column">
                    <div class="cover-image">
                        <img class="default-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7n9ShRlFcmM9X22DSHtblI35-XXJb7ekYgyO-y6t5Aw&s" alt="cover image">
                        <div class="select-cover-image-btn mt-4">
                            <span>Chọn ảnh</span>
                            <input type="file" class="select-cover-image-input" name="image" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer container mt-4">
            <button type="submit" class="btn btn-primary add-book-btn">Thêm sách</button>
        </div>

    </form>
    <script type="text/javascript" src="../../public/js/mbd.insert.js"></script>
</body>
</html>