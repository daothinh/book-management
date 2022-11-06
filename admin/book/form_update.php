<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../public/img/mdb-favicon.ico" type="image/x-icon" />
    <title>Document</title>

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
    <?php    

    // require '../menu.php';
    require '../connect.php';

    $id = $_GET['id'];
    if(empty($id)){
        $_SESSION['error'] = 'Phải truyền mã để sửa';
        header('location:index.php');
    }
    
    $sql = "select * from books where id='$id'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    ?>
    <form method="POST" class="form-add-book" enctype="multipart/form-data" action="process_update.php">
        <input type="hidden" name="id" value="<?php echo $each['id'] ?>">
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
                            <input class="input-title input" name="idBook" value="<?php echo $each['idBook'] ?>"  required/>
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
                            <input class="input-title input" name="title"  required value="<?php echo $each['title'] ?>"/>
                        </div>
                        
                        <div class="wrapper-input">
                            <label class="label-input">Tác giả</label>
                            <input class="input-author input" name="author"  required value="<?php echo $each['author'] ?>"/>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="wrapper-input">
                            <label class="label-input">Ngày phát hành</label>
                            <input type="date" class="input-release-date input" name="dateRelease"  required value="<?php echo $each['dateRelease'] ?>"/>
                        </div>
                        <div class="wrapper-input">
                            <label class="label-input">Số trang</label>
                            <input type="number" class="input input-number-page" name="totalPage" required value="<?php echo $each['totalPage'] ?>">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="book-description">
                            <label>Mô tả</label>
                            <textarea class="input-description input" name="description" required><?php echo $each['description'] ?></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <select name="category" id="form-add-book" class="book-category" required>
                            <!-- <option value="">Thể loại</option>
                            <option value="Khoa học">Khoa học</option>
                            <option value="lịch sử">lịch sử</option>
                            <option value="Văn học">Văn học</option>
                            <option value="Địa lý">Địa lý</option>
                            <option value="Tình cảm">Tiểu thuyết</option>
                            <option value="Giải trí">Giải trí</option>
                            <option value="Tài liệu">Tài liệu</option>
                            <option value="Tâm lý học">Tâm lý học</option> -->
                            
                            <option value="Thiếu nhi"
                            <?php if( $each['category']=="Thiếu nhi" ): ?> 
                                selected="selected"
                            <?php endif; ?> 
                            >
                            Thiếu nhi</option>
                            <option value="Văn học"
                            <?php if( $each['category']=="Văn học" ): ?> 
                                selected="selected"
                            <?php endif; ?> 
                            >
                            Văn học</option>
                            <option value="Địa lý"
                            <?php if( $each['category']=="Địa lý" ): ?> 
                                selected="selected"
                            <?php endif; ?> 
                            >
                            Địa lý</option>
                            <option value="Tình cảm"
                            <?php if( $each['category']=="Tình cảm" ): ?> 
                                selected="selected"
                            <?php endif; ?> 
                            >
                            Tình cảm</option>
                            <option value="Giải trí"
                            <?php if( $each['category']=="Giải trí" ): ?> 
                                selected="selected"
                            <?php endif; ?> 
                            >
                            Giải trí</option>
                            <option value="Tài liệu"
                            <?php if( $each['category']=="Tài liệu" ): ?> 
                                selected="selected"
                            <?php endif; ?> 
                            >
                            Tài liệu</option>
                            <option value="Khoa học"
                            <?php if( $each['category']=="Khoa học" ): ?> 
                                selected="selected"
                            <?php endif; ?> 
                            >
                            Khoa học</option>
                            <option value="lịch sử"
                            <?php if( $each['category']=="lịch sử" ): ?> 
                                selected="selected"
                            <?php endif; ?> 
                            >
                            lịch sử</option>
                            <option value="Tâm lý học"
                            <?php if( $each['category']=="Tâm lý học" ): ?> 
                                selected="selected"
                            <?php endif; ?> 
                            >
                            Tâm lý học</option>
                            <option value="Trinh thám"
                            <?php if( $each['category']=="Trinh thám" ): ?> 
                                selected="selected"
                            <?php endif; ?>
                            >
                                Trinh thám
                            </option>
                            <option value="Hài hước"
                            <?php if( $each['category']=="Hài hước" ): ?> 
                                selected="selected"
                            <?php endif; ?>
                            >
                                Hài hước
                            </option>
                        </select>
                    </div>
                </div>
                <div class="column">
                    <div class="cover-image">
                        <img class="default-img" src="img/<?php echo $each['image']?>" alt="cover image">
                        <input type="hidden" name="image_old" value="<?php echo $each['image'] ?>">
                        <div class="select-cover-image-btn mt-4">
                            <span>Chọn ảnh</span>
                            <input type="file" class="select-cover-image-input" name="image_new">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer container mt-4">
            <button type="submit" class="btn btn-primary add-book-btn">Sửa</button>
        </div>

    </form>
    <script type="text/javascript" src="../../public/js/mbd.insert.js"></script>
</body>
</html>