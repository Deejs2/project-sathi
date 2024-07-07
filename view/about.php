<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Partner | Contact Us</title>

    <link rel="icon" href="images/project-sathi-logo-sm.png" type="image/x-icon">
    <link rel="stylesheet" href="design/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="design/bootstrap/base-style.css">
    <style>
        /* GLOBAL STYLES  */

        body {
            padding-top: 3rem;
            color: rgb(var(--bs-tertiary-color-rgb));
        }

        #about {
            background: url("images/banner2.png");
            background-size: cover;
            background-position: center;
            height: 40vh;
        }
    </style>
</head>
<script src="https://kit.fontawesome.com/cbeb993ef9.js" crossorigin="anonymous"></script>
<body>

<?php include 'common/landing-nav.php'; ?>

<div id="about"></div>


<div class="container p-5 my-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-5 text-center">
        <h1 class="display-5 fw-bold">Custom jumbotron</h1>
        <p class="fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Example button</button>
    </div>
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 py-5 rounded-3">
                <h2>Change the background</h2>
                <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 py-5 rounded-3">
                <h2>Add borders</h2>
                <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
            </div>
        </div>
    </div>
</div>



<div class="container my-5 py-4" id="team">
    <h3 class="display-6 my-3">Our Team</h3>
    <div class="row text-center py-4">
        <div class="col border m-2 p-3 rounded">
            <img src="images/dhiraj.png" class="bd-placeholder-img rounded-circle" width="140" height="140">
            <div class="card-body">
                <h5 class="card-title mt-3">Dhiraj Jirel</h5>
                <h6 class="card-subtitle text-body-secondary my-3">Bootstrap, PHP, MySQL, SpringBoot, Java</h6>
                <span><i class="fa-solid fa-envelope"></i> <small>jireldhiraj123@gmail.com</small></span>
            </div>
        </div><!-- /.col -->
        <div class="col border m-2 p-3 rounded">
            <img src="images/pasang.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
            <div class="card-body">
                <h5 class="card-title mt-3">Pasang Gelbu Sherpa</h5>
                <h6 class="card-subtitle text-body-secondary my-3">Bootstrap, PHP, MySQL, SpringBoot, Java</h6>
                <span><i class="fa-solid fa-envelope"></i> <small>pasanggelbu23@gmail.com</small></span>
            </div>
        </div><!-- /.col -->
        <div class="col border m-2 p-3 rounded">
            <img src="images/utsab.JPG" class="bd-placeholder-img rounded-circle" width="140" height="140">
            <div class="card-body">
                <h5 class="card-title mt-3">Utsab Dahal</h5>
                <h6 class="card-subtitle text-body-secondary my-3">Bootstrap, PHP, MySQL, SpringBoot, Java</h6>
                <span><i class="fa-solid fa-envelope"></i> <small>utsab2120@gmail.com</small></span>
            </div>
        </div><!-- /.col -->
        <div class="col border m-2 p-3 rounded">
            <img src="images/chitra.png" class="bd-placeholder-img rounded-circle" width="140" height="140">
            <div class="card-body">
                <h5 class="card-title mt-3">Chitra Prasad Arachrya</h5>
                <h6 class="card-subtitle text-body-secondary my-3">Bootstrap, PHP, MySQL, Angular, Java</h6>
                <span><i class="fa-solid fa-envelope"></i> <small>abisal8374@gmail.com</small></span>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>

<?php include 'common/landing-footer.php'; ?>

</body>
</html>
