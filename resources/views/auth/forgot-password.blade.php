
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2023 15:03:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ETs KOSMOS</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('storage/front/img/favicon.png')}}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{asset('storage/front/css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{asset('storage/front/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('storage/front/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('storage/front/css/responsive.css')}}">
</head>

<body>
<div class="ltn__login-area pb-65">
    <div class="container">
        <div class="row" style="margin-top:200px;">
            <div  class="col-lg-10 ">
                <div class="text-center">
                <div class="get-a-quote-wrap">

                  <!-- Session Status -->
                  <x-auth-session-status class="mb-4" :status="session('status')" />

                  <!-- Validation Errors -->
                  <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->

                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="input-item input-item-name " type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <div class="btn-wrapper">
                            <button  class="btn theme-btn-1 btn-effect-1 text-uppercase " style="margin-left:60px;" >
                                {{ __('Lien de réinitialisation du mot de passe par e-mail') }}
                            </button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="{{asset('storage/front/js/plugins.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('storage/front/js/main.js')}}"></script>
  
</body>

<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2023 15:03:55 GMT -->
</html>