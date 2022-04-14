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
        <!-- Cpanel Feature set -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <h4>
                                    <div class="icon icon-shape rounded-circle text-white">
                                        <i class="fas fa-globe text-primary"></i>
                                    </div> Domains
                                </h4>

                            </div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">WordPress Toolkit</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This is a feature-rich management interface that allows anyone to install, configure, and manage WordPress websites.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Site Publisher</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                You can use this interface to quickly create a website from a set of available templates. This allows visitors to see some basic information while you continue to develop your website.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Domains</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This interface helps you to create and manage multiple domains from a single cPanel account.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Addon domains</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Addon domains allow you to control multiple domains from a single account. An addon domain links a new domain name to a directory in your account, and then stores its files in that directory.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Subdomains</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Use subdomains to create memorable URLs for different content areas of your site. For example, you can create a subdomain for your blog that is accessible through blog.example.com and www.example.com/blog
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Aliases</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Domain aliases are domains that you own, but which do not contain any content. Instead, they point to the contents of another domain or subdomain on your account. This is useful, for example, to hold a domain that you will later sell, or to redirect traffic to another domain.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Redirects</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                The Redirects interface allows you to send all of the visitors of a domain or particular page to a different URL. For example, if you create a page with a long URL, use the Redirects interface to add a redirect from a short URL to the long URL. Visitors can enter the short URL to access the content of the long URL.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Zone Editor </strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                The Zone Editor feature allows you to create, edit, and delete Domain Name System (DNS) zone records. DNS relies on zone records that exist on your server to map domain names to IP addresses.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Dynamic DNS</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Use this interface to utilize a Domain Name System (DNS) hosted on the cPanel server to resolve a hostname that exists on an external network with a dynamic IP address. A dynamic IP address changes, while a static IP address stays the same.
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

        <!-- Cpanel Feature set -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-2">
                                <h4>
                                    <div class="icon icon-shape rounded-circle text-white">
                                        <i class="fas fa-envelope text-primary"></i>
                                    </div> Email
                                </h4>
                            </div>

                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Email Accounts</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This feature lets you create and manage email accounts.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Forwarders</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Send a copy of any incoming email from one address to another
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Email Routing</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Route a domain’s incoming mail to a specific server.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Autoresponders</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Configure an email account to send automated emails. This can be useful if you are on vacation or unavailable.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Default Address</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Catch any email that is sent to an invalid email address for your domain.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Mailing Lists</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Use a single address to send email to multiple email addresses.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Track Delivery</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Review an email’s delivery route. This can be useful if you need to locate problems with email delivery.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Global Email Filters</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Create and manage email filters for your main email account. Rules will be processed in the order shown below, from the top down.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Email Filters</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Create and manage email filters for an email address that you specify. This can be useful if you want to avoid spam, redirect mail, or pipe messages to a program.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Email Deliverability</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Use this interface to reduce the number of emails sent from this server that end up in spam folders.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Address Importer</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This feature allows you to use 2 types of files to create multiple email address or email forwarders for your account simultaneously.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Spam Filters</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Manage the settings for the spam filters (powered by Apache SpamAssassin™) for your email accounts.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Encryption</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                GnuPG is a publicly available encryption scheme that uses the “public key” approach. With GnuPG, messages are encrypted using a “public key” however, they can only be decrypted by a “private key”, which is retained by the intended recipient of the message.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">BoxTrapper</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                BoxTrapper protects your inbox from spam by requiring all email senders not on your Whitelist reply to a verification email before you can receive their mail.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Configure Greylisting</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Enable Greylisting on your domains. Use this feature to reduce incoming spam.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Calendars and Contacts</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                The Calendar and Contacts allows you to connect their calendar and contacts accounts to your cPanel accont.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Email Disk Usage</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Email Disk Usage
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

        <!-- Cpanel Feature set -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-2">
                                <h4>
                                    <div class="icon icon-shape rounded-circle text-white">
                                        <i class="fas fa-folder-open text-primary"></i>
                                    </div> Files
                                </h4>
                            </div>

                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">File Manager</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                cPanel organizes all the files in your account into folders. Use the File Manager interface to manage and edit your files.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Images</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Modify and manage images that are saved to your account.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Directory Privacy</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Set a password to protect certain directories of your account.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Disk Usage</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Monitor your account's available space with the Disk Usage feature.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Web Disk</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Create a Web Disk account to manage, navigate, upload, and download the files on your web server.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Backup</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Download a zipped copy of your entire site or a part of your site that you can save to your computer.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Backup Wizard</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This feature allows you to download a compressed copy of all or part of your website.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Git™ Version Control</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Create and manage Git™ repositories. You can use Git to maintain any set of files and track the history of changes from multiple editors (version control).
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

        <!-- Cpanel Feature set -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-2">
                                <h4>
                                    <div class="icon icon-shape rounded-circle text-white">
                                        <i class="fas fa-database text-primary"></i>
                                    </div> Databases
                                </h4>
                            </div>

                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">phpMyAdmin</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Manage all your databases.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">MySQL® Databases</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Manage large amounts of information over the web easily. MySQL databases are necessary to run many web-based applications, such as bulletin boards, content management systems, and online shopping carts.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">MySQL® Database Wizard</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                To use a database, you'll need to create it with MySQL® Database Wizard, Only MySQL Users (different than mail or other users) that have privileges to access a database can read from or write to that database.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Remote MySQL®</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Add a specific domain name to allow visitors to connect to your MySQL databases.
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

        <!-- Cpanel Feature set -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-2">
                                <h4>
                                    <div class="icon icon-shape rounded-circle text-white">
                                        <i class="fas fa-chart-line text-primary"></i>
                                    </div> Metrics
                                </h4>
                            </div>

                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Visitors</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This function displays up to 1,000 of the most recent entries in the Apache log for a given domain’s web site.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Errors</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                The function displays the most recent entries in your website’s error logs in reverse chronological order.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Creative Tim</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Bandwidth</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This function allows you to see the bandwidth usage for your site. It shows the current month’s bandwidth usage, as well as your total bandwidth usage.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Raw Access</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Raw Access Logs allow you to see who has visited your website without displaying graphs, charts, or other graphics.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Awstats</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Awstats produces visual statistics about visitors of your site.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Analog Stats</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Analog produces a simple summary of all the people who have visited your site. It is fast and provides great lightweight statistics.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Webalizer</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Webalizer is a complex stats program that produces a variety of charts and graphs about who has visited your site.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Metrics Editor</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Hello, world! This is a toast message.
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

        <!-- Cpanel Feature set -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-2">
                                <h4>
                                    <div class="icon icon-shape rounded-circle text-white">
                                        <i class="fas fa-shield-alt text-primary"></i>
                                    </div> Security
                                </h4>
                            </div>

                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">SSH Access</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                SSH allows secure file transfer and remote logins over the internet. Your connection via SSH is encrypted allowing the secure connection.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">IP Blocker</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This feature will allow you to block a range of IP addresses to prevent them from accessing your site.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">SSL/TLS</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                he SSL/TLS Manager will allow you to generate SSL certificates, certificate signing requests, and private keys.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Manage API Tokens</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This feature lets you create and manage API tokens for cPanel API 2 and UAPI.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Hotlink Protection</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Activate Hotlink protection to prevent other websites from directly linking to files on your website.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Leech Protection</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Leech Protect allows you to prevent your users from giving out or publicly posting their passwords to a restricted area of your site.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">SSL/TLS Status</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                You can use this interface to view the SSL status of your domains.
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

        <!-- Cpanel Feature set -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-2">
                                <h4>
                                    <div class="icon icon-shape rounded-circle text-white">
                                        <i class="fas fa-laptop-code text-primary"></i>
                                    </div> Software
                                </h4>
                            </div>

                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">PHP PEAR Packages</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                The PHP PEAR Packages interface allows you to search for and add PEAR packages to your website, or view all of your website's available PHP packages.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Perl Modules</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This interface allows you to search for and install Perl modules from the CPAN repository to your website.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Optimize Website</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This interface allows you to configure your server to automatically compress specified types of content when visitors access that content.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">MultiPHP Manager</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                cPanel’s MultiPHP Manager interface allows you to easily manage your account’s PHP configuration. In this interface, you can manage the PHP version or pool option of any virtual host.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">MultiPHP INI Editor</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This interface allows you to configure your PHP settings.
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

        <!-- Cpanel Feature set -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-2">
                                <h4>
                                    <div class="icon icon-shape rounded-circle text-white">
                                        <i class="fas fa-gears text-primary"></i>
                                    </div> Advanced
                                </h4>
                            </div>

                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Terminal</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This interface provides command line access to your account on the server.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Cron Jobs</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Cron jobs allow you to automate certain commands or scripts on your site. You can set a command or script to run at a specific time every day, week, etc.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Track DNS</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This interface contains tools to help you retrieve network information.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Indexes</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                The “Index Manager” allows you to customize the way a directory appears when no index files reside in a directory.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Error Pages</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Error pages inform visitors about problems when they attempt to access your site. Each type of problem has its own code.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Apache Handlers</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Apache handlers control how your site’s Apache web server software manages certain file types and file extensions.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">MIME Types</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                MIME types relay information to the browser about how to handle file extensions.
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

        <!-- Cpanel Feature set -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-2">
                                <h4>
                                    <div class="icon icon-shape rounded-circle text-white">
                                        <i class="fas fa-sliders text-primary"></i>
                                    </div> Preferences
                                </h4>
                            </div>

                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Password & Security</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This interface allows you to update your account's password.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Change Language</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This function allows you to change the language displayed in your cPanel interface.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Change Style</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Use this interface to choose a style in order to customize the cPanel interface's appearance.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Contact Information</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                Use this interface to store contact information for your cPanel account and to set your contact preferences.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pb-2 my-auto border-left-1 text-center">
                                        <div class="toast mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="autohide">
                                            <div class="toast-header">
                                                <strong class="mr-auto">User Manager</strong>
                                            </div>
                                            <div class="toast-body text-left">
                                                This interface allows you to manage subaccounts. Subaccounts use the same login and password information for email, FTP, and Web Disk services
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
                                    <button class="btn btn-link w-100 text-primary text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        What is Shared Web hosting?
                                        <i class="ni ni-bold-down float-right pt-1"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body opacity-8">
                                    In Shared Web Hosting, multiple clients are hosted on a single server i.e. the clients share the server's resources. This helps reduce the cost, since the cost of the server and its resources are spread over all the clients/packages hosted on the server. Shared Hosting is perfect for personal websites, small and mid-sized businesses that do not require all the resources of a server.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-primary text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Can I host multiple Web sites within one Shared Hosting plan?
                                        <i class="ni ni-bold-down float-right pt-1"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="">
                                <div class="card-body opacity-8">
                                    Yes! Our shared hosting plans allow you to host more than one Website, by adding secondary domains through your hosting control panel i.e. cPanel.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-primary text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Is there a Money Back Guarantee?
                                        <i class="ni ni-bold-down float-right pt-1"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body opacity-8">
                                    Yes, we offer a 100% Risk Free, 30 day Money Back Guarantee.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-primary text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-controls="collapseFour">
                                        Is Email hosting included in my package?
                                        <i class="ni ni-bold-down float-right pt-1"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body opacity-8">
                                    Yes, all our Hosting packages come with Unlimited Email Hosting.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFifth">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-primary text-left" type="button" data-toggle="collapse" data-target="#collapseFifth" aria-controls="collapseFifth">
                                        Can I upgrade to a higher plan?
                                        <i class="ni ni-bold-down float-right pt-1"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFifth" class="collapse" aria-labelledby="headingFifth" data-parent="#accordionExample">
                                <div class="card-body opacity-8">
                                    Yes, you can easily upgrade to one of our higher plans at any time.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-primary text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-controls="headingSix">
                                        Is my data safe? Do you take backups?
                                        <i class="ni ni-bold-down float-right pt-1"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                <div class="card-body opacity-8">
                                    Yes, your data is a 100% secure and we have periodic general server Backup. However you can backup manually from your cPanel. The Ultimate Plan Provides automated Backups for you.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-primary text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-controls="collapseSeven">
                                        Do you include protection from viruses?
                                        <i class="ni ni-bold-down float-right pt-1"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                <div class="card-body opacity-8">
                                    Yes, all our servers are protected by Clam AV.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingEight">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-primary text-left" type="button" data-toggle="collapse" data-target="#collapseEight" aria-controls="collapseEight">
                                        Can I divide my Shared Hosting package and resell it?
                                        <i class="ni ni-bold-down float-right pt-1"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                <div class="card-body opacity-8">
                                    While a Shared Hosting package cannot be used for this purpose, you can easily resell custom packages with our Reseller Hosting. Contact us for more details.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingNine">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-primary text-left" type="button" data-toggle="collapse" data-target="#collapseNine" aria-controls="collapseNine">
                                        Do you offer SSH access?
                                        <i class="ni ni-bold-down float-right pt-1"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                                <div class="card-body opacity-8">
                                    Yes, we provide SSH access to your domain. Because this is a shared environment, you will not get root access. However, you will be able to achieve most of your requirements by having the rights to access only the files relevant to your domain.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTen">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-primary text-left" type="button" data-toggle="collapse" data-target="#collapseTen" aria-controls="collapseTen">
                                        Who do I get in touch with if I need help?
                                        <i class="ni ni-bold-down float-right pt-1"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                                <div class="card-body opacity-8">
                                    Our Support team is always at hand to assist you. Contact us anytime.
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
                                                               href="https://wa.me/237695476763/?text=Hi ,"
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
                            <a href="{{route('privacy-policy')}}">
                                {{ __('Privacy statment') }}
                            </a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a href="#">--}}
{{--                                {{ __('Cookies Policy') }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a href="{{route('terms-conditions')}}">
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
                                +237695476763</a></li>
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
