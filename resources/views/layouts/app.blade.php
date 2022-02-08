<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
    <title>
        {{ __('Cloudhost') ." ".__('Web Hosting Company') }}
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.10.1/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet"
    <!-- Font Awesome Icons -->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet"/>
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/whatsapp.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/argon-design-system.css?v=1.0.0') }}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

</head>

<body class="index-page">

<header class="header-5">
    <!-- Navbar -->
    <nav id="navbar-main" class="fixed-top navbar navbar-expand-lg navbar-main">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/cloudhost-white.png') }}" alt="Image logo Cloudhost"/>
            </a>

            <div class="navbar-collapse collapse justify-content-around" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/cloudhost-dark.png') }}" height="35"
                                     alt="Logo Impact">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" role="button" class="fas fa-times" data-toggle="collapse"
                               data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                               aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover justify-content-center">
                    <li class="nav-item">
                        <a href="{{ route('shared-hosting') }}"
                           class="nav-link text-white font-weight-bold text-uppercase"> {{ __('Shared Hosting') }}</a>
                    </li>
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="#" class="nav-link text-white font-weight-bold text-uppercase">VPS--}}
                    {{--                            Hosting</a>--}}
                    {{--                    </li>--}}
                    <li class="nav-item">
                        <a href="#"
                           class="nav-link text-white font-weight-bold text-uppercase">{{ __('Domains') }}</a>
                    </li>

                    <li class="nav-item dropdown">


                        <a href="#"
                           class="nav-link text-white font-weight-bold text-uppercase dropdown-toggle"
                           data-toggle="dropdown" role="button">
                            <i class="ni ni-ui-04 d-lg-none"></i>
                            <span class="nav-link-inner--text">{{ __('Pro Services') }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl">
                            <div class="dropdown-menu-inner">
                                <a target="_blank" href="https://pixel.cm/fr" class="media d-flex align-items-center">
                                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                                        <i class="ni ni-spaceship"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h6 class="heading text-primary mb-md-1 font-weight-bold">{{ __('Design Services') }}</h6>
                                        <p class="description d-none d-md-inline-block mb-0 mt-0">{{ __('Learn how to use compiling Scss, change brand colors and more.') }}</p>
                                    </div>
                                </a>
                                <a href="#" class="media d-flex align-items-center">
                                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                                        <i class="ni ni-spaceship"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h6 class="heading text-primary mb-md-1 font-weight-bold">{{ __('Custom Web Development Services')}}</h6>
                                        <p class="description d-none d-md-inline-block mb-0 mt-0">{{ __('Learn how to use compiling Scss, change brand colors and more.')}}</p>
                                    </div>
                                </a>
                                <a href="#" class="media d-flex align-items-center">
                                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                        <i class="ni ni-palette"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h6 class="heading text-primary mb-md-1 font-weight-bold">{{ __('Marketing Services') }}</h6>
                                        <p class="description d-none d-md-inline-block mb-0 mt-0"> {{ __('Learn how to use compiling Scss, change brand colors and more.')}}</p>
                                    </div>
                                </a>
                                <a href="https://optimized-seo.com" target="_blank"
                                   class="media d-flex align-items-center">
                                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                        <i class="ni ni-palette"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h6 class="heading text-primary mb-md-1 font-weight-bold">{{ __('SEO Marketing Services') }}</h6>
                                        <p class="description d-none d-md-inline-block mb-0 mt-0">{{ __('Learn how to use compiling Scss, change brand colors and more.')}}</p>
                                    </div>
                                </a>
                                <a href="#" class="media d-flex align-items-center">
                                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                        <i class="ni ni-palette"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h6 class="heading text-primary mb-md-1 font-weight-bold">{{ __('Website Management Services') }}</h6>
                                        <p class="description d-none d-md-inline-block mb-0 mt-0">{{ __('Learn how to use compiling Scss, change brand colors and more.')}}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="https://globexcamhost.com/client/?/clientarea/"
                           class="nav-link text-white font-weight-bold text-uppercase">{{ __('Login') }}</a>
                    </li>


                </ul>
            </div>

            <div class="border d-lg-block d-none p-1 pl-2 pr-2 rounded-pill">
                <!-- <a href="#" class="btn btn-md btn-docs btn-outline-white animate-up-2 mr-3">
                    <span class="badge badge-primary">2</span> Cart
                </a> -->
                <div class="dropdown d-inline-block mb-4 mb-lg-0">
                    <a id="langsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                       class="dropdown-toggle footer-language-link text-white">
                        <img src="{{ asset('assets/images/flags/united-states-of-america.svg') }}" alt="English Flag"
                             class="language-flag"> English
                    </a>

                    <div aria-labelledby="langsDropdown" class="dropdown-menu dropdown-menu-center">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                            @if($properties['native'] === 'English')

                                <a class="dropdown-item text-gray text-sm" rel="alternate"
                                   hreflang="{{ $localeCode }}"
                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    <img src="{{ asset('assets/images/flags/united-states-of-america.svg') }}"
                                         alt="English Flag"
                                         class="language-flag">
                                    {{ $properties['native'] }}
                                </a>
                            @endif

                            @if($properties['native'] === 'français')

                                <a class="dropdown-item text-gray text-sm" rel="alternate"
                                   hreflang="{{ $localeCode }}"
                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    <img src="{{ asset('assets/images/flags/france.svg') }}" alt="Flag"
                                         class="language-flag">
                                    {{ $properties['native'] }}
                                </a>
                            @endif

                        @endforeach
                    </div>
                </div>

            </div>

            <div class="d-flex d-lg-none align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                        aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
            </div>


        </div>
    </nav>
    <!-- End Navbar -->

    @yield('header')
</header>

@yield('content')

<!-- Feature Included -->
<section class="mt-6 mb-8">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h2 class="h1 font-weight-bold mb-5"> {{ __('Included in all packages') }}</h2>
        </div>
        <!-- Cpanel Feature set Email-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="icon icon-shape icon-shape-primary rounded-circle text-white">
                                    <i class="ni ni ni-support-16 text-primary"></i>
                                </div>
                                <h3 class="mb-3 mt-3">E-MAIL</h3>

                            </div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-body text-left">
                                                Email Accounts
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-body text-left">
                                                Email Routing.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-body text-left">
                                                Autoresponders.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-body text-left">
                                                Track Delivery
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-body text-left">
                                                Mailing Lists
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-body text-left">
                                                Encryption
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Cpanel Feature set -->

        <!-- Cpanel Feature set Files-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="icon icon-shape icon-shape-primary rounded-circle text-white">
                                    <i class="ni ni ni-support-16 text-primary"></i>
                                </div>
                                <h3 class="mb-3 mt-3">FILES</h3>

                            </div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                File Manager
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Backup
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Web Disk
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Git Version Control
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-body text-left">
                                                Disck Usage
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-body text-left">
                                                File and Directory Restoration
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Cpanel Feature set -->

        <!-- Cpanel Feature set Databases-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="icon icon-shape icon-shape-primary rounded-circle text-white">
                                    <i class="ni ni ni-support-16 text-primary"></i>
                                </div>
                                <h3 class="mb-3 mt-3">DATABASES</h3>

                            </div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                PhpMyAdmin
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Mysql Databases
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Mysql Databases Wizard
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Remote Mysql
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Cpanel Feature set -->

        <!-- Cpanel Feature set Domains-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="icon icon-shape icon-shape-primary rounded-circle text-white">
                                    <i class="ni ni ni-support-16 text-primary"></i>
                                </div>
                                <h3 class="mb-3 mt-3">DOMAINS</h3>

                            </div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Domains
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Addon Domains
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Subdomains
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Aliases
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Redirects
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Dynamic DNS
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Cpanel Feature set -->

        <!-- Cpanel Feature set Security-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="icon icon-shape icon-shape-primary rounded-circle text-white">
                                    <i class="ni ni ni-support-16 text-primary"></i>
                                </div>
                                <h3 class="mb-3 mt-3">SECURITY</h3>

                            </div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                SSH Access
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Ip Blocker
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                SSL/TLS
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Leech Protection
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Imunify360
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Manage API Tokens
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Cpanel Feature set -->

        <!-- Cpanel Feature set Software-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="icon icon-shape icon-shape-primary rounded-circle text-white">
                                    <i class="ni ni ni-support-16 text-primary"></i>
                                </div>
                                <h3 class="mb-3 mt-3">SOFTWARE</h3>

                            </div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Cloudflare
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Wordpress Manager
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                MultiPHP
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Site Software
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Softaculous Apps Installer
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Perl Modules
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Cpanel Feature set -->

        <!-- Cpanel Feature set Advanced-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="icon icon-shape icon-shape-primary rounded-circle text-white">
                                    <i class="ni ni ni-support-16 text-primary"></i>
                                </div>
                                <h3 class="mb-3 mt-3">ADVANCED</h3>

                            </div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                LiteSpeed Web Cache Manager
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Cron Jobs
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Track DNS
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Indexes
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                Error Pages
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">

                                            <div class="toast-body text-left">
                                                MIME Types
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Cpanel Feature set -->


    </div>
</section>
<!-- End Feature Included -->

<!-- VP -->
<section class="section mt-4"
         style="background-image: url('{{ asset('assets/images/bg-1.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    <div class="overlay"></div>
    <div class="container mt-5 higher-index-2">
        <div class="row">
            <div class="col-md-10 m-auto pt-5 mt-5 mb-5 pb-5">
                <h1 class="text-center display-2 text-white">{{ __('What Makes Cloudhost So Different?') }}</h1>
                <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores a
                    pariatur
                    iste corporis, eum necessitatibus porro quisquam voluptatibus ipsa sed nemo, quidem asperiores ut
                    voluptates?</p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 mt-2">
                <div class="info info-horizontal bg-white shadow">
                    <div class="icon icon-shape icon-shape-primary rounded-circle text-white">
                        <i class="ni ni ni-support-16 text-primary"></i>
                    </div>
                    <div class="description pl-4">
                        <h5 class="title font-weight-bold">{{ __('Premuim and Dedicated Support') }}</h5>
                        <p>{{ __('Our Experts with over 15+ years of experience working with clients like you are available to work with you anytime you are stuck.') }}</p>
                        <a href="#" class="text-primary text-uppercase">{{ __('Learn more') }}</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-2">
                <div class="info info-horizontal bg-white shadow">
                    <div class="icon icon-shape icon-shape-primary rounded-circle text-white">
                        <i class="ni ni-settings text-primary"></i>
                    </div>
                    <div class="description pl-4">
                        <h5 class="title font-weight-bold">{{ __('Easy to use Control Panel') }}</h5>
                        <p>{{ __('Cpanel, a user friendly and most popular and hosting control panel at your fingertips removes the headache of managing your web hosting') }}</p>
                        <a href="#" class="text-primary text-uppercase">{{ __('See all features') }}</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-2">
                <div class="info info-horizontal bg-white shadow">
                    <div class="icon icon-shape icon-shape-primary rounded-circle text-white">
                        <i class="ni ni-spaceship text-primary"></i>
                    </div>
                    <div class="description pl-4">
                        <h5 class="title font-weight-bold">{{ __('Fast & Reliable Servers') }} </h5>
                        <p>{{ __('We make sure your website is fast, secure, always up - so your visitors and search engines can find and trust your website.') }} </p>
                        <a href="#" class="text-primary text-uppercase">{{ __('Learn more') }}</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-2">
                <div class="info info-horizontal bg-white shadow">
                    <div class="icon icon-shape icon-shape-info rounded-circle text-white">
                        <i class="ni ni-hat-3 text-info"></i>
                    </div>
                    <div class="description pl-4">
                        <h5 class="title font-weight-bold">{{ __("Hire Us - We'll Do It For You") }}</h5>
                        <p> {{ __('Do you want everything done for you? Our team of experienced professionals and Services are available to help you setup your business online.') }}</p>
                        <a href="#" class="text-primary text-uppercase">{{ __('See Pro Services') }}</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End VP -->

<!-- FAQ -->
<section class="cd-section bg-primary">
    <div class="accordion-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <h2 class="title mt-5 text-white font-weight-bold">{{ __('Frequently asked question') }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ml-auto">
                    <div class="accordion mt-4" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-primary text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                        {{ __('How do I order?') }}
                                        <i class="ni ni-bold-down float-right pt-1"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                 data-parent="#accordionExample">
                                <div class="card-body opacity-8">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3
                                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum
                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                    coffee nulla
                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt
                                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                    beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus
                                    labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-primary text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        {{ __('How can i make the payment?') }}
                                        <i class="ni ni-bold-down float-right pt-1"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#accordionExample"
                                 style="">
                                <div class="card-body opacity-8">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3
                                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum
                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                    coffee nulla
                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt
                                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                    beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus
                                    labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-primary text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                        {{ __('How much time does it take to receive the order?') }}
                                        <i class="ni ni-bold-down float-right pt-1"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                 data-parent="#accordionExample">
                                <div class="card-body opacity-8">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3
                                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum
                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                    coffee nulla
                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt
                                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                    beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus
                                    labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-primary text-left" type="button"
                                            data-toggle="collapse"
                                            data-target="#collapseFour" aria-controls="collapseFour">
                                        {{ __('Can I resell the products?') }}
                                        <i class="ni ni-bold-down float-right pt-1"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                 data-parent="#accordionExample">
                                <div class="card-body opacity-8">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3
                                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum
                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                    coffee nulla
                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt
                                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                    beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus
                                    labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFifth">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-primary text-left" type="button"
                                            data-toggle="collapse"
                                            data-target="#collapseFifth" aria-controls="collapseFifth">
                                        {{ __('Where do I find the shipping details?') }}
                                        <i class="ni ni-bold-down float-right pt-1"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFifth" class="collapse" aria-labelledby="headingFifth"
                                 data-parent="#accordionExample">
                                <div class="card-body opacity-8">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3
                                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum
                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                    coffee nulla
                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt
                                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                    beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus
                                    labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ -->

<!-- CTA Get Started -->
<section class="section mt-0"
         style="background-image: url('{{ asset('assets/images/bg-2.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    <div class="overlay"></div>
    <div class="container-fluid mt-5 higher-index-2">

        <div class="row">
            <div class="col-md-12 mb-4 text-center">
                <h1 class="display-1 d-none d-md-block text-white">{{ __('How to Get Started Cloudhost Today') }}</h1>
                <h1 class="mt-6 d-md-none d-block text-white"> {{ __('How to Get Started Cloudhost Today') }}</h1>
                <h2 class="text-white d-none d-md-block">{{ __('Get a Free Domain name for Life') }}</h2>
                <h4 class="text-white d-md-none d-block">{{ __('Get a Free Domain name for Life') }}</h4>
            </div>

            <div class="col-md-6 m-auto">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card card-pricing bg-white text-center mb-4">
                            <div class="card-header bg-transparent">
                                <h5 class="font-weight-bold text-uppercase ls-1 py-3 mb-0">{{ __('Free domain transfer') }}</h5>
                            </div>
                            <div class="card-body">
                                <p class="text-muted text-center">
                                    {{ __('Transfer to Clouldhost today, Our free domain transfer will cover the full transfer cost for any') }}
                                    <strong class='font-weight-bold'>.cm</strong>, <strong
                                        class='font-weight-bold'>.rw</strong>,
                                    <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>
                                    {{ __('domains when you purchase one of our shared hosting plans. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.') }}
                                </p>
                                <button
                                    class="btn btn-primary btn-round btn-lg w-100 mt-2">{{__('Transfer Now')}}</button>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-pricing bg-white text-center mb-4">
                            <div class="card-header bg-transparent">
                                <h5 class="font-weight-bold text-uppercase ls-1 py-3 mb-0">{{ __('Free website migration') }}</h5>
                            </div>
                            <div class="card-body">
                                <p class="text-muted text-center">
                                    {{ __('Our team understands that changing hosting providers can be a confusing and daunting task, That\'s why our experienced migration team handles everything for you. Types of websites we mi includes')}}
                                    : <strong class='font-weight-bold'>Wordpress</strong>, <strong
                                        class='font-weight-bold'>Joomla</strong>, <strong class='font-weight-bold'>Drupal</strong>,
                                    <strong class='font-weight-bold'>Custom HTML</strong>.
                                </p>
                                <button
                                    class="btn btn-primary btn-round btn-lg w-100 mt-3">{{ __('Transfer Now') }}</button>
                            </div>

                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
</section>
<!-- CTA Get Started -->

<!-- Support -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card card-project" style="min-height: auto;">
                    <a href="javascript:;">
                        <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mx-auto">
                            <i class="ni ni-send"></i>
                        </div>
                    </a>
                    <div class="card-body ">
                        <h4 class="card-title text-center mt-3">{{ __('Support tickets') }}</h4>
                        <!-- <p class="card-description">Society has put up so many boundaries, so many limitations on what’s right and wrong that it’s almost impossible to get a pure thought out. It’s like a little kid, a little boy.</p> -->
                        <div class="card-footer">
                            <button type="button" class="btn btn-link text-secondary"><i
                                    class="ni ni-send"></i> {{ __('Open a ticket') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-project" style="min-height: auto;">
                    <a href="javascript:;">
                        <div class="icon icon-lg icon-shape icon-shape-danger shadow rounded-circle mx-auto">
                            <i class="ni ni-chat-round"></i>
                        </div>
                    </a>
                    <div class="card-body ">
                        <h4 class="card-title text-center mt-3">{{ __('Start a live Chat') }}</h4>
                        <!-- <p class="card-description">Pink is obviously a better color. Everyone’s born confident, and everything’s taken away from you matters is the people who are sparked by it follow their dreams, too.</p> -->
                        <div class="card-footer">
                            <button type="button" class="btn btn-link text-danger"><i
                                    class="ni ni-chat-round"></i> {{ __('Live chat') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-project" style="min-height: auto;">
                    <a href="javascript:;">
                        <div class="icon icon-lg icon-shape icon-shape-info shadow rounded-circle mx-auto">
                            <i class="fa fa-phone"></i>
                        </div>
                    </a>
                    <div class="card-body ">
                        <h4 class="card-title text-center mt-3"> {{ __('Call Us') }}</h4>
                        <!-- <p class="card-description">Constantly growing. We’re constantly making mistakes. We’re constantly trying to express ourselves and actualize our dreams the position that we want to be.</p> -->
                        <div class="card-footer">
                            <button type="button" class="btn btn-link text-info"><i
                                    class="fa fa-phone"></i> {{ __('Call Us') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Support -->
@yield('cta')

<div id="whatsapp-widget" class="ww-right ww-normal ww-yes"><a target="_blank"
                                                               href="https://wa.me/237670858799/?text=Hi ,"
                                                               class="ww-text">{{ __('Need Helps ? Message Us') }}
        <div class="ww-arrow"></div>
    </a>
    <div class="ww-icon">
        <div><a class="ww-icon-link" target="_blank" href="https://wa.me/237670858799/?text=Hi ,">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <path
                        d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"
                        fill-rule="evenodd"></path>
                </svg>
            </a></div>
    </div>
</div>

<footer class="bg-default text-white footer text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a class="d-flex my-xl-n3" href="#">
                    <img src="{{ asset('assets/images/cloudhost-white.png') }}" class="img-fluid mt-3"
                         alt="Footer logo"></a>
                <p class="my-4">{{ __('Our clients, our priority. We provide Quality customer service and reboust tech platform that enable client') }}</p>

                <div class="">
                    <!-- <a href="#" class="btn btn-md btn-docs btn-outline-white animate-up-2 mr-3">
                          <span class="badge badge-primary">2</span> Cart
                      </a> -->
                    <div class="dropdown d-inline-block mb-4 mb-lg-0">
                        <a id="langsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                           class="dropdown-toggle footer-language-link text-white">
                            <img src="{{ asset('assets/images/flags/united-states-of-america.svg') }}"
                                 alt="English Flag"
                                 class="language-flag ">
                            English
                        </a>
                        <div aria-labelledby="langsDropdown" class="dropdown-menu dropdown-menu-center">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                @if($properties['native'] === 'English')

                                    <a class="dropdown-item text-gray text-sm" rel="alternate"
                                       hreflang="{{ $localeCode }}"
                                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        <img src="{{ asset('assets/images/flags/united-states-of-america.svg') }}"
                                             alt="English Flag"
                                             class="language-flag">
                                        {{ $properties['native'] }}
                                    </a>
                                @endif

                                @if($properties['native'] === 'français')

                                    <a class="dropdown-item text-gray text-sm" rel="alternate"
                                       hreflang="{{ $localeCode }}"
                                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        <img src="{{ asset('assets/images/flags/france.svg') }}" alt="Flag"
                                             class="language-flag">
                                        {{ $properties['native'] }}
                                    </a>
                                @endif

                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-2">
                <div class="column">
                    <h4 class="mt-3 text-light">{{ __('Services') }}</h4>
                    <ul>
                        <li class="nav-item"><a href="#">{{ __('Domains names') }}</a></li>
                        <li class="nav-item"><a target="_blank" href="#">{{ __('Website Hosting') }}</a></li>
                        <li class="nav-item"><a target="_blank" href="#">{{ __('Professional Email') }}</a></li>
                        <li class="nav-item"><a target="_blank" href="#">{{ __('VPS Hosting') }}</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2">
                <div class="column">
                    <h4 class="mt-3 text-light">{{ __('Resources') }}</h4>
                    <ul>
                        <li class="nav-item">
                            <a href="#">
                                {{ __('Privacy statment') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                {{ __('Cookies Policy') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                {{ __('Terms of service') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2">
                <div class="column">
                    <h4 class="mt-3 text-light">{{ __('Company') }}</h4>
                    <ul>
                        <li class="nav-item"><a target="_blank" href="#">{{ __('Why Choose Us') }}</a></li>
                        <li class="nav-item"><a target="_blank" href="#">{{ __('About Us') }}</a></li>
                        <li class="nav-item"><a target="_blank" href="#">{{ __('Contact Us') }}</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="column">
                    <h4 class="mt-3 text-light">{{ __('Contact') }}</h4>
                    <ul>
                        <li class="nav-item"><a target="_blank" href="#">{{ __('Phone number') }}: <br>
                                +237672394873</a></li>
                        <li class="nav-item"><a target="_blank" href="#">{{ __('Email Support') }}: <br>
                                support@cloudhost.cm</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>

<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<!--  Plugin for the Carousel, full documentation here: http://jedrzejchalubek.com/ -->
<script src="{{ asset('assets/js/plugins/glide.js') }}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://flatpickr.js.org/ -->
<script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
<!--	Plugin for Select, full documentation here: https://joshuajohnson.co.uk/Choices/ -->
<script src="{{ asset('assets/js/plugins/choices.min.js') }}" type="text/javascript"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://flatpickr.js.org/ -->
<script src="{{ asset('assets/js/plugins/datetimepicker.js') }}" type="text/javascript"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('assets/js/plugins/jasny-bootstrap.min.js') }}"></script>
<!-- Plugin for Headrom, full documentation here: https://wicky.nillia.ms/headroom.js/ -->
<script src="{{ asset('assets/js/plugins/headroom.min.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script src="{{ asset('assets/js/argon-design-system.min.js?v=1.0.0') }}" type="text/javascript"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $('#promo-slider').slick({
        dots: false,
        infinite: true,
        speed: 1000,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        centerMode: true,
        focusOnSelect: true,
        autoplay: true,
        cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',

    });

</script>
<script>
    const button = document.querySelector('#button');
    const tooltip = document.querySelector('#tooltip');

    const tooltippeds = document.getElementsByClassName('tooltipped');

    // tooltips.forEach(tooltip as too)

    // Pass the button, the tooltip, and some options, and Popper will do the
    // magic positioning for you:
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover({
            trigger: 'hover',
            placement: 'top',
            sanitize: true,
            html: true
        });

        $('.tooltipped').popover({
            trigger: 'focus',
            placement: 'top',
            sanitize: true,
            html: true
        });
    });
</script>

</body>

</html>
