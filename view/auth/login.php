<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Partner | Login</title>

    <link rel="icon" href="../images/project-sathi-logo-sm.png" type="image/x-icon">
    <link rel="stylesheet" href="../design/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../design/bootstrap/base-style.css">

    <style>
        html,
        body {
            height: 100%;
        }

        .form-signin {
            max-width: 330px;
            padding: 1rem;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>
<script src="https://kit.fontawesome.com/cbeb993ef9.js" crossorigin="anonymous"></script>

<body>

<main class="form-signin w-100 m-auto">
    <form class="mt-5 pt-5" method="post" action="/login" id="loginForm">
        <img class="d-block mx-auto mb-4" src="../images/project-sathi-logo-sm.png" alt="" width="120" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            <div class="invalid-feedback">Email is required</div>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            <div class="invalid-feedback">Password is required</div>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; ProjectSathi 2025</p>
    </form>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('loginForm');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(form);
            fetch('/login', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        window.location.href = data.data;
                    } else {
                        // Clear previous validation states
                        document.querySelectorAll('.form-control').forEach(input => {
                            input.classList.remove('is-invalid');
                        });

                        if (data.errors) {
                            // Handle object with multiple errors
                            if (typeof data.errors === 'object') {
                                Object.keys(data.errors).forEach(key => {
                                    const inputElement = document.querySelector(`[name="${key}"]`);
                                    const feedbackElement = inputElement.nextElementSibling.nextElementSibling;
                                    if (inputElement && feedbackElement) {
                                        inputElement.classList.add('is-invalid');
                                        feedbackElement.textContent = data.errors[key];
                                    }
                                });
                            } else {
                                // Handle single error message for both fields
                                document.querySelectorAll('.form-control').forEach(input => {
                                    const feedbackElement = input.nextElementSibling.nextElementSibling;
                                    input.classList.add('is-invalid');
                                    feedbackElement.textContent = data.errors;
                                });
                            }
                        } else {
                            alert(data.message);
                        }
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });
</script>
</body>

</html>
