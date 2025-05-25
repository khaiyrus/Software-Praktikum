<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spike Free</title>
    <link rel="shortcut icon" type="image/png" href="build/assetsGuest/img/logo.png" />
    <link rel="stylesheet" href="style\assets/css/styles.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


</head>

<body>
    @if (session('error'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
            class="fixed top-5 right-5 z-50 max-w-xs bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow-lg flex items-center space-x-3"
            role="alert">
            <strong class="font-bold">Oops!</strong>
            <span class="flex-1">{{ session('error') }}</span>
            <button @click="show = false" class="text-red-700 hover:text-red-900 focus:outline-none">
                <svg class="fill-current h-6 w-6" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.348 5.652a1 1 0 10-1.414-1.414L10 7.586 7.066 4.652A1 1 0 105.652 6.066L8.586 9l-2.934 2.934a1 1 0 101.414 1.414L10 10.414l2.934 2.934a1 1 0 001.414-1.414L11.414 9l2.934-2.934z" />
                </svg>
            </button>
        </div>
    @endif


    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!--  Body Wrapper -->
        <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
            data-sidebar-position="fixed" data-header-position="fixed">
            <div
                class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
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
                                        <img src="build/assetsGuest/img/logo.png" width="100" alt="">
                                    </a>
                                    <p class="text-center">Quick Vote Real Result</p>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="email" name="email" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            id="exampleInputPassword1" required>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                                Remember this Device
                                            </label>
                                        </div>
                                        <a class="text-primary fw-bold" href="#">Forgot Password ?</a>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100 fs-4 mb-4 rounded-2">Sign
                                        In</button>

                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">New to Spike?</p>
                                        <a class="text-primary fw-bold ms-2" href="{{ route('register') }}">Create an
                                            account</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const toastEl = document.querySelector('.toast');
                if (toastEl) {
                    const toast = new bootstrap.Toast(toastEl);
                    toast.show();
                }
            });
        </script>

        <script src="style\assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="style\assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </form>
</body>

</html>
