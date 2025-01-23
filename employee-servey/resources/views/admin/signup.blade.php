<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign up | Bootstrap Simple Admin Template</title>
        {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="assets/css/auth.css" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <div class="auth-content">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <img class="brand" src="assets/img/bootstraper-logo.png" alt="bootstraper logo">
                        </div>
                        <h6 class="mb-4 text-muted">Create new account</h6>
                        <form action="{{ route('admin.signup.submit') }}" method="POST">
                            <div class="mb-3 text-start">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3 text-start">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3 text-start">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Enter your password" required>
                            </div>
                            <!-- 
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Confirm password" required>
                            </div> 
                            -->
                            <div class="mb-3 text-start">
                                <div class="form-check">
                                  <input class="form-check-input" name="confirm" type="checkbox" value="" id="check1">
                                  <label class="form-check-label" for="check1">
                                    I agree to the <a href="#" tabindex="-1">terms and policy</a>.
                                  </label>
                                </div>
                            </div>
                            <button class="btn btn-primary mb-4" style="width:100%">Register</button>
                        </form>
                        <p class="mb-0 text-muted">Allready have an account? <a href="login.html">Log in</a></p>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        {{-- <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    
</html>