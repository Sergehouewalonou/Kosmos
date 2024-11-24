
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2023 15:03:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Broccoli - Organic Food HTML Template</title>
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
            <div class="row offset-3" style="margin-top:200px;">
                <div class="col-lg-10 ">
                    <div class="text-center">
                        <div class="get-a-quote-wrap">
                            <x-guest-layout>
                                <x-auth-card>

                                    <p><h2>Nous vous avons envoyer un lien dans votre compte gmail. <br>Veuiller cliquer sur le lien pour continuer. <br>MERCI  </h2></p>
                                    <div class="mb-4 text-sm text-gray-600">
                                    </div>

                                    @if (session('status') == 'verification-link-sent')
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                        </div>
                                    @endif

                                    <div class="mt-4 flex items-center justify-between">
                                        <form method="POST" action="{{ route('verification.send') }}">
                                            @csrf

                                            <div class="col-lg-4" >
                                                <x-button class="theme-btn-1 btn btn-block">
                                                    {{ __('Resend Verification Email') }}
                                                </x-button>
                                            </div>
                                        </form>

                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <div class="col-lg-3" style="margin-top:20px;">
                                                <button type="submit" class="theme-btn-1 btn btn-block">
                                                    {{ __('Déconnecter') }}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </x-auth-card>
                            </x-guest-layout>


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

