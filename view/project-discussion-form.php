<?php global$projectDiscussion; ?>
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
            background-size: cover;
            background: url("images/banner2.png") center;
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
    <form class="row g-3" id="project-discussion-form" action="/submit-project-discussion" method="post">
        <div class="col-md-6">
            <label for="fname" class="form-label">Full Name</label>
            <input type="text" name="fname" class="form-control" id="fname">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="text" class="form-control" id="address" placeholder="Chabahil, Kathmandu">
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone">
        </div>
        <div class="col-md-6">
            <label for="project-category" class="form-label">Project Category</label>
            <select id="project-category" name="category" class="form-select">
                <option selected>Choose...</option>
                <option>E-commerce</option>
                <option>Portfolio</option>
                <option>Business</option>
            </select>
        </div>
        <div class="col-12">
            <label for="project-description" class="form-label">Project Description</label>
            <textarea class="form-control" id="project-description" name="project-description" placeholder="Please describe your project in detail" rows="3"></textarea>
        </div>
        <div class="col-md-12">
            <label for="additional-message" class="form-label">Message</label>
            <textarea class="form-control" name="additional-message" id="additional-message" placeholder="Please leave an additional message" rows="3"></textarea>
        </div>
        <div class="col-md-4">
            <label for="project-package" class="form-label">Project Package</label>
            <select id="project-package" name="project-package" class="form-select">
                <option selected>Choose...</option>
                <option>Portfolio</option>
            </select>
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<?php include 'common/landing-footer.php'; ?>

</body>
</html>