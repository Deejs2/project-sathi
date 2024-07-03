

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
    <form class="mt-5 pt-5">
        <img class="d-block mx-auto mb-4" src="../images/project-sathi-logo-sm.png" alt="" width="120" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; ProjectSathi 2025</p>
    </form>
</main>

</body>
</html>