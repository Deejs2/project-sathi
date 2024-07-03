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

        #discuss-project {
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

<div id="discuss-project"></div>

<div class="container col-xxl-12 px-4 py-5">
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="images/project-sathi-logo-sm.png" alt="" width="120" height="57">
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Project Sathi a reliable companion by your side, someone who understands your vision, shares your goals, and supports you every step of the way.</p>
        </div>
    </div>
    <form class="row g-3">
        <div class="col-md-6">
            <label for="fname" class="form-label">Full Name</label>
            <input type="email" class="form-control" id="fname">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="password" class="form-control" id="email">
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Chabahil, Kathmandu">
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Phone</label>
            <input type="password" class="form-control" id="phone">
        </div>
        <div class="col-md-6">
            <label for="project-title" class="form-label">Project Title</label>
            <input type="text" class="form-control" id="project-title" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
            <label for="project-category" class="form-label">Project Category</label>
            <select id="project-category" class="form-select">
                <option selected>Choose...</option>
                <option>E-commerce</option>
                <option>Portfolio</option>
                <option>Business</option>
            </select>
        </div>
        <div class="col-12">
            <label for="project-description" class="form-label">Project Description</label>
            <textarea class="form-control" id="project-description" placeholder="Please describe your project in detail" rows="3"></textarea>
        </div>
        <div class="col-md-12">
            <label for="additional-message" class="form-label">Message</label>
            <textarea class="form-control" id="additional-message" placeholder="Please leave an additional message" rows="3"></textarea>
        </div>
        <div class="col-md-4">
            <label for="project-package" class="form-label">Project Package</label>
            <select id="project-package" class="form-select">
                <option selected>Choose...</option>
                <option>Portfolio</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
</div>

<?php include 'common/landing-footer.php'; ?>

</body>
</html>