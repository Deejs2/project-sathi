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
            <div id="fnameError" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email">
            <div id="emailError" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Chabahil, Kathmandu">
            <div id="addressError" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone">
            <div id="phoneError" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="project-category" class="form-label">Project Category</label>
            <select id="project-category" name="category" class="form-select">
                <option selected>Choose...</option>
                <option>E-commerce</option>
                <option>Portfolio</option>
                <option>Business</option>
            </select>
            <div id="categoryError" class="invalid-feedback"></div>
        </div>
        <div class="col-12">
            <label for="project-description" class="form-label">Project Description</label>
            <textarea class="form-control" id="project-description" name="project-description" placeholder="Please describe your project in detail" rows="3"></textarea>
            <div id="projectDescriptionError" class="invalid-feedback"></div>
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
            <div id="projectPackageError" class="invalid-feedback"></div>
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

<script>
    document.getElementById('project-discussion-form').addEventListener('submit', function(event) {
        // Check and adjust dropdown values if default option is selected
        const categoryDropdown = document.getElementById('project-category');
        const packageDropdown = document.getElementById('project-package');

        // Function to remove error class on valid selection
        function clearDropdownError(dropdown) {
            if (dropdown.value !== 'Choose...') {
                dropdown.classList.remove('is-invalid');
            }
        }
        categoryDropdown.addEventListener('change', function() {
            clearDropdownError(categoryDropdown);
        });

        packageDropdown.addEventListener('change', function() {
            clearDropdownError(packageDropdown);
        });

        event.preventDefault();
        const formData = new FormData(this);

        if (categoryDropdown.value === 'Choose...') {
            formData.set('category', ''); // Set to empty string if default is selected
            categoryDropdown.classList.add('is-invalid');
        }
        if (packageDropdown.value === 'Choose...') {
            formData.set('project-package', ''); // Set to empty string if default is selected
            packageDropdown.classList.add('is-invalid');
        }
        fetch('/submit-project-discussion', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'error') {
                    // Clear previous validation states
                    document.querySelectorAll('.form-control').forEach(input => {
                        input.classList.remove('is-invalid');
                    });

                    // Apply validation state and display error messages
                    Object.keys(data.errors).forEach(field => {
                        // Convert field name from hyphenated to camelCase for matching error element ID
                        const camelCaseField = field.replace(/-([a-z])/g, function (g) { return g[1].toUpperCase(); });
                        const errorElementId = camelCaseField + 'Error';
                        const inputElement = document.getElementsByName(field)[0];
                        const errorElement = document.getElementById(errorElementId);
                        if (inputElement && errorElement) {
                            inputElement.classList.add('is-invalid');
                            errorElement.textContent = data.errors[field];
                        }
                    });
                } else {
                    alert(data.message);
                    this.reset(); // Clear the form
                    document.querySelectorAll('.form-control').forEach(input => {
                        input.classList.remove('is-invalid'); // Clear validation states
                    });
                }
            })
            .catch(error => console.error('Error:', error));
    });
</script>
</body>
</html>