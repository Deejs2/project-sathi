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

        #contact {
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

<div id="contact"></div>

<div class="container col-xxl-12 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email
                        address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp">
                    <div id="emailHelp">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputSubject1" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="exampleInputSubject1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputMessage1" class="form-label">Message</label>
                    <textarea class="form-control" id="exampleInputMessage1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
            </div>
        </div>
    </div>
</div>

<?php include 'common/landing-footer.php'; ?>

</body>
</html>