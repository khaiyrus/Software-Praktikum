<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spike Free</title>
    <link rel="shortcut icon" type="image/png" href="style\assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="style\assets/css/styles.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body position-relative">
                                <div class="card-body pt-5 mt-4">
                                    <a href="{{ route('guest') }}"
                                        class="btn btn-outline-primary position-absolute top-0 start-0 m-3">
                                        ← Back
                                    </a>
                                </div>
                                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="style\assets/images/logos/dark-logo.svg" width="180" alt="">
                                </a>
                                <p class="text-center">Register Your Account</p>

                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                                </div>

                                <div class="mb-4">
                                    <label for="role" class="form-label">Daftar Sebagai</label>
                                    <select name="role" id="role" class="form-select" required>
                                        <option value="" disabled selected>Pilih Role</option>
                                        <option value="panitia">Panitia</option>
                                        <option value="kandidat">Kandidat</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary w-100 fs-4 mb-4 rounded-2">Register</button>

                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">Already have an account?</p>
                                    <a class="text-primary fw-bold ms-2" href="{{ route('login') }}">Login</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>

</body>
</html>
