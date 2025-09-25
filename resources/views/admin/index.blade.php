<html lang="en"><!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ $title }}</title>

    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="color-scheme" content="light dark">
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)">
    <!--begin::Primary Meta Tags-->
    <meta name="title" content="Admin| Login Page">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        crossorigin="anonymous">
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--end::Required Plugin(AdminLTE)-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="login-page bg-body-secondary app-loaded">

    <div class="login-box">
        <div class="login-logo">
            <div><span style="font-weight:900; font-family: Tahoma, sans-serif;">Admin</span><span
                    style="font-weight: lighter; font-family: Tahoma, sans-serif; ">Login</span></div>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg" style="font-family: Tahoma, sans-serif;">Sign in to start your session</p>

                <form method="post" id="loginForm" action="{{ route('admin.verify') }}">
                    @csrf
                    <div class=" ">
                        <div class="input-group ">
                            <input id="username" type="text" class="form-control" placeholder="User Name"
                                aria-label="Email" style="font-family: Tahoma, sans-serif; outline:#398ebd;"
                                name="username" value="{{ old('username') }}">
                            <div class="input-group-text">
                                <span class="bi bi-person-circle"></span>

                            </div>
                        </div>
                        @error('username')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="mt-1">
                        <div class="input-group ">
                            <input id="password" type="password" class="form-control" placeholder="Password"
                                aria-label="Password" style="font-family: Tahoma, sans-serif; outline:#398ebd;"
                                name="password">
                            <div class="input-group-text" onclick="showHidePassword()">
                                <span id="lockUnlockIcon" class="bi bi-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <!--begin::Row-->
                    <div class="row mt-1">
                        <!-- /.col -->
                        <div class="text-center">
                            <div class="">
                                <button type="submit" class="btn btn-primary"
                                    style="font-family: Tahoma, sans-serif; background-color:#398ebd; outline:none; border:none;">Sign
                                    In</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!--end::Row-->
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
    <script src="{{ asset('js/script.js') }}"></script>
</body><!--end::Body-->

</html>
