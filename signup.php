<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Signup</title>
    <!-- MDB icon -->
    <link rel="icon" href="public/img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="public/css/mdb.min.css" />
    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
        .h-custom {
        height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
        .h-custom {
        height: 100%;
        }
        }
    </style>
  </head>
  <body>
    <!-- Start project -->
    <section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method="POST" action="process_signup.php">

            <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Đăng ký</p>
            </div>

            <div class="text-primary">
            <?php 
              if(isset($_SESSION['error'])) {
              ?>
                  <p class="text-danger text-center fw-bold mx-3 mb-0">
                      <?php echo $_SESSION['error']; 
                      unset($_SESSION['error']);
                      ?>
                  </p>
              <?php } ?>
            </div>

            <div class="form-outline mb-4">
                <input type="text" id="form3Example1" class="form-control form-control-lg" name="name" required/>
                <label class="form-label" for="form3Example1">Tên</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control form-control-lg" name="email" required/>
                <label class="form-label" for="form3Example3">Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <input type="password" id="form3Example4" class="form-control form-control-lg" name="password" required/>
                <label class="form-label" for="form3Example4">Mật khẩu</label>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng ký</button>
                <p class="small fw-bold mt-2 pt-1 mb-0">Bạn đã có tài khoản?
                    <a href="signin.php" class="link-danger">Đăng nhập</a></p>
            </div>

            </form>
        </div>
        </div>
    </div>
    </section>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="public/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
