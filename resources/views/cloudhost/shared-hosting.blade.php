@extends('layouts.app')

@section('header')
    <div class="mb-0"
         style="background-image: url('{{ asset('assets/images/bg-2.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
        <div class="overlay"></div>
        <div class="container ">
            <div class="row pt-9">
                <div class="col-md-6 col-lg-4 d-flex flex-column">
                    <!-- <h3 class="display-3 mt-3">Choose a plan for your next project</h3> -->
                    <h1 class="display-3 mt-3 d-none d-md-block text-white"> {{ __('Shared Hosting') .'  '. __('in').' '.__('Cameroon') }} </h1>
                    <h1 class="mt-6 d-md-none d-block text-white"> {{ __('Shared Hosting') .'  '. __('in').' '.__('Cameroon') }}</h1>
                    <p class="pb-4 text-white mt-0">{{ __('We provide reliable, fast and secure Web hosting services with Premium Customer service of over 15+ years of experience') }}.</p>
                </div>

                <!-- Plans -->
                <div class="col-md-6 ml-auto col-lg-4 col-sm-6">
                    <div class="card card-pricing bg-white text-center mb-4">
                        <div class="card-header bg-transparent">
                            <h5 class="font-weight-bold text-uppercase ls-1 py-3 mb-0"> {{ __('Premium Plan')}}</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="text-muted text-center">
                                <span
                                    class="badge badge-pill badge-md badge-success mr-1 text-uppercase">{{ __('Save')}} 50%</span>
                                <span>{{ __('First') .' '. __('Year') }}</span>
                            </h6>
                            <div class="display-2 d-flex justify-content-center "><span
                                    class="font-weight-bold ">{{ number_format(2500) }}</span> <span
                                    class="font-weight-400 pt-3 text-left"
                                    style="font-size: 18px; line-height: 1;">XAF <br/> {{ __('Monthly') }}</span>
                            </div>
                            <!-- <span>per Month</span> -->
                            <ul class="list-unstyled my-2">
                                <li class="align-items-center">
                                    {{ __('Renews').' '. __('at') }} <strong>{{ number_format(5000) }} <sup
                                            style="font-size: 13px;">XAF</sup></strong> {{ __('Monthly') }}
                                </li>
                                <a target="_blank"
                                   href="https://globexcamhost.com/client/?cmd=cart&action=add&id=3&languagechange={{ (LaravelLocalization::getCurrentLocaleNative()) === 'English' ? 'English' : 'French' }}"
                                   class="btn btn-primary btn-round btn-lg w-100">{{ __('Order Now') }}</a>
                            </ul>
                        </div>
                        <div class="card-footer text-center bg-transparent">
                            <ul class="list-group simple-list mb-3 d-none d-md-flex">

                                <span class="mb-2 text-success tooltipped" title="Premium Support" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Our friendly and knowledgeable support team is available to help you, just contact support with any issue.</p>"><i
                                        class="fas fa-star "></i> Premium Support <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="{{ __('Free Domain for Life') }}" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                        class="fa fa-check text-success"></i> {{ __('Free Domain for Life') }}  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="500 Go Diskspace storage" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px' style='font-size:'8px''>500 Go Diskspace storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                        class="fa fa-check text-success"></i> 500 Go Diskspace storage  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unmetered Bandwith" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                        class="fa fa-check text-success"></i> Unmetered Bandwith  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="FREE SSL Certificate" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>We provide you with free SSL certificates through Cloudfare which you can activate from inside your cPanel.</p>"><i
                                        class="fa fa-check text-success"></i> FREE SSL Certificate  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="FREE cPanel" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Control your website using free Cpanel control panel and special free web hosting admin tools.</p>"><i
                                        class="fa fa-check text-success"></i> FREE cPanel  <i
                                        class="fas text-light fa-info-circle"></i></span>

                            </ul>

                            <!-- For better Accessibility on mobile -->
                            <ul class="list-group simple-list mb-3 d-md-none">

                                <span class="mb-2 text-success" title="Premium Support" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Our friendly and knowledgeable support team is available to help you, just contact support with any issue.</p>"><i
                                        class="fas fa-star "></i> Premium Support <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="{{ __('Free Domain for Life') }}" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                        class="fa fa-check text-success"></i> {{ __('Free Domain for Life') }}  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="500 Go Diskspace storage" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px' style='font-size:8px' >500 Go Diskspace storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                        class="fa fa-check text-success"></i> 500 Go Diskspace storage  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unmetered Bandwith" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                        class="fa fa-check text-success"></i> Unmetered Bandwith  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="FREE SSL Certificate" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>We provide you with free SSL certificates through Cloudfare which you can activate from inside your cPanel.</p>"><i
                                        class="fa fa-check text-success"></i> FREE SSL Certificate  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="FREE cPanel" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Control your website using free Cpanel control panel and special free web hosting admin tools.</p>"><i
                                        class="fa fa-check text-success"></i> FREE cPanel  <i
                                        class="fas text-light fa-info-circle"></i></span>

                            </ul>
                            <!-- For better Accessibility on mobile -->

                            <hr class="my-1">
                            <a href="{{ route('all-features') }}" type="button" class="btn btn-link text-primary">{{ __('See all features') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-sm-6">
                    <div class="card card-pricing bg-white border-0 text-center mb-4">
                        <div class="card-header bg-transparent">
                            <h5 class="font-weight-bold text-uppercase ls-1 py-3 mb-0"><i
                                    class="fas fa-thumbs-up text-light"></i> {{ __('Ultimate Plan') }}</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="text-muted text-center">
                                <span class="badge badge-pill badge-md badge-success mr-1">{{ __('Save') }} 50%</span>
                                <span>{{ __('First') .' '. __('Year') }}</span>
                            </h6>
                            <div class="display-2 d-flex justify-content-center "><span
                                    class="font-weight-bold ">{{ number_format(5000) }}</span> <span
                                    class="font-weight-400 pt-3 text-left" style="font-size: 18px; line-height: 1;">XAF <br/> Monthly</span>
                            </div>
                            <ul class="list-unstyled my-2">
                                <li class="align-items-center">
                                    {{ __('Renews').' '. __('at') }} <strong>{{ number_format(10000) }} <sup style="font-size: 13px;">XAF</sup></strong>
                                    {{ __('Monthly') }}
                                </li>
                                <a target="_blank"
                                   href="https://www.globexcamhost.com/client/?cmd=cart&action=add&id=4&languagechange={{ (LaravelLocalization::getCurrentLocaleNative()) === 'English' ? 'English' : 'French' }}"
                                   class="btn btn-primary btn-round btn-lg w-100">{{ __('Order Now') }}</a>
                            </ul>
                        </div>
                        <div class="card-footer text-center bg-transparent">
                            <ul class="list-group simple-list mb-3 d-none d-md-flex">

                                <span class="mb-2 text-success tooltipped" title="Dedicated Support"
                                      data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>A Dedicated Support expert will always monitor your hosting and help you manage your hosting needs and goals so you can focus on your business.</p>"><i
                                        class="fas fa-star "></i> Dedicated Support <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 text-success tooltipped" title="Dedicated IP address"
                                      data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Benefit from Higher On-Demand Website Access, Improve Email Deliverability, High Level of Security, High Level of Uptime with a Dedicated IP address on this package.</p>"><i
                                        class="fas fa-star "></i> Dedicated IP address <i
                                        class="fas fa-info-circle text-light"></i></span>

                                <span class="mb-2 tooltipped" title="{{ __('Free Domain for Life') }}" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                        class="fa fa-check text-success"></i> {{ __('Free Domain for Life') }}  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Diskspace" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px' style='font-size:'8px''>Unlimited Storage storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Diskspace  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unmetered Bandwith" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                        class="fa fa-check text-success"></i> Unmetered Bandwith  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unmetered Bandwith" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>With Daily Automated Backup you can rest easy knowing you have a backup plan incase you are faced with lost or corrupted files.</p>"><i
                                        class="fa fa-check text-success"></i> Daily Automated Backups  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="FREE SSL Certificate" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>We provide you with free SSL certificates through Cloudfare which you can activate from inside your cPanel.</p>"><i
                                        class="fa fa-check text-success"></i> FREE SSL Certificate  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="FREE cPanel" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Control your website using free Cpanel control panel and special free web hosting admin tools.</p>"><i
                                        class="fa fa-check text-success"></i> FREE cPanel  <i
                                        class="fas text-light fa-info-circle"></i></span>

                            </ul>

                            <!-- For better Accessibility on mobile -->
                            <ul class="list-group simple-list mb-3 d-md-none">

                                <span class="mb-2 text-success tooltipped" title="Dedicated Support"
                                      data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>A Dedicated Support expert will always monitor your hosting and help you manage your hosting needs and goals so you can focus on your business.</p>"><i
                                        class="fas fa-star "></i> Dedicated Support <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 text-success tooltipped" title="Dedicated IP address"
                                      data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Benefit from Higher On-Demand Website Access, Improve Email Deliverability, High Level of Security, High Level of Uptime with a Dedicated IP address on this package.</p>"><i
                                        class="fas fa-star "></i> Dedicated IP address <i
                                        class="fas fa-info-circle text-light"></i></span>

                                <span class="mb-2 tooltipped" title="{{ __('Free Domain for Life') }}" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                        class="fa fa-check text-success"></i> {{ __('Free Domain for Life') }}  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Diskspace" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px' style='font-size:'8px''>Unlimited Storage storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Diskspace  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unmetered Bandwith" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                        class="fa fa-check text-success"></i> Unmetered Bandwith  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unmetered Bandwith" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>With Daily Automated Backup you can rest easy knowing you have a backup plan incase you are faced with lost or corrupted files.</p>"><i
                                        class="fa fa-check text-success"></i> Daily Automated Backups  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="FREE SSL Certificate" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>We provide you with free SSL certificates through Cloudfare which you can activate from inside your cPanel.</p>"><i
                                        class="fa fa-check text-success"></i> FREE SSL Certificate  <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="FREE cPanel" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Control your website using free Cpanel control panel and special free web hosting admin tools.</p>"><i
                                        class="fa fa-check text-success"></i> FREE cPanel  <i
                                        class="fas text-light fa-info-circle"></i></span>


                            </ul>
                            <!-- For better Accessibility on mobile -->
                            <hr class="my-1">
                            <a href="{{ route('all-features') }}" type="button" class="btn btn-link text-primary">{{ __('See all features') }}</a>
                        </div>
                    </div>
                </div>
                <!-- Plans -->

            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- Feature Included -->
    <section class="mt-6 mb-8">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h2 class="h1 font-weight-bold mb-5"> Included in all packages</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 my-auto">
                                    <div class="icon icon-shape icon-shape-primary rounded-circle text-white">
                                        <i class="ni ni ni-support-16 text-primary"></i>
                                    </div>
                                    <h3 class="mb-3">Free Cpanel Account</h3>
                                    <a href="#" class="text-primary btn-sm text-uppercase">Learn more</a>
                                </div>
                                <div class="col-md-3 my-auto border-left-1 text-center">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <h3 class="display-2 m-0">10<sup>+</sup></h3>
                                            <p class=" font-weight-bold">Hosting management Tools</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 my-auto text-center">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <h3 class="display-2 m-0">70<sup>+</sup></h3>
                                            <p class=" font-weight-bold">Hosting management Functions</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 my-auto text-center">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <h3 class="display-2 m-0">50<sup>+</sup></h3>
                                            <p class=" font-weight-bold">Scripts such as Wordpress</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 my-auto border-left-1 text-center">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="icon icon-shape icon-shape-primary rounded-circle text-white">
                                        <i class="fas fa-infinity text-primary"></i>
                                    </div>
                                    <h5 class="m-0">Unlimited</h5>
                                    <p class=" font-weight-bold">MySQL Databases</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-auto border-left-1 text-center">
                            <div class="card mb-0 tooltipped" title="Unmetered Bandwith" data-toggle="popover"
                                 data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>">
                                <div class="card-body">
                                    <div class="icon icon-shape icon-shape-primary rounded-circle text-white">
                                        <i class="fas fa-infinity text-primary"></i>
                                    </div>
                                    <h5 class="m-0">Unmetered <i class="fas fa-info-circle"></i></h5>
                                    <p class=" font-weight-bold">Bandwith </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-auto text-center">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="icon icon-shape icon-shape-primary rounded-circle text-white">
                                        <i class="fas fa-infinity text-primary"></i>
                                    </div>
                                    <h5 class="m-0">Unlimited</h5>
                                    <p class=" font-weight-bold">Mail Accounts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-auto text-center">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="icon icon-shape icon-shape-primary rounded-circle text-white">
                                        <i class="fas fa-infinity text-primary"></i>
                                    </div>
                                    <h5 class="m-0">Unlimited</h5>
                                    <p class=" font-weight-bold">Sub Domians</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Feature Included -->
@endsection

@section('cta')
    <!-- CTA -->
    <section class="section mt-0"
             style="background-image: url('{{ asset('assets/images/bg-2.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
        <div class="overlay"></div>
        <div class="container-fluid mt-5 higher-index-2">

            <div class="row">

                <div class="col-md-12 mb-4 text-center">
                    <h1 class="display-1 d-none d-md-block text-white"> {{ __('Choose your Shared Hosting Plan') }} </h1>
                    <h1 class="mt-6 d-md-none d-block text-white"> {{ __('Choose your Shared Hosting Plan') }}</h1>
                    <h2 class="text-white d-none d-md-block">{{ __('Free Domain for Life') }} name included') }}</h2>
                    <h4 class="text-white d-md-none d-block">{{ __('Free Domain for Life') }} name included') }}</h4>
                    <!-- <p class="pb-4 text-white mt-0">We provide reliable, fast and secure Web hosting services with Premium Customer service of over 15+ years of experience.</p> -->
                </div>

                <div class="col-md-7 m-auto">
                    <div class="row">

                        <!-- Plans -->
                        <div class="col-md-6">
                            <div class="card card-pricing bg-white text-center mb-4">
                                <div class="card-header bg-transparent">
                                    <h5 class="font-weight-bold text-uppercase ls-1 py-3 mb-0"> {{ __('Premium Plan') }}</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-muted text-center">
                                        <span class="badge badge-pill badge-md badge-success mr-1 text-uppercase">{{ __('Save') }} 50%</span>
                                        <span>{{ __('First') .' '. __('Year') }}</span>
                                    </h6>
                                    <div class="display-2 d-flex justify-content-center "><span
                                            class="font-weight-bold ">{{ number_format(2500)}}</span> <span
                                            class="font-weight-400 pt-3 text-left"
                                            style="font-size: 18px; line-height: 1;">XAF <br/>
                            {{ __('Monthly') }}</span></div>
                                    <!-- <span>per Month</span> -->
                                    <ul class="list-unstyled my-2">
                                        <li class="align-items-center">
                                            {{ __('Renews').' '. __('at') }} <strong>{{ number_format(5000) }} <sup style="font-size: 13px;">XAF</sup></strong>
                                            {{ __('Monthly') }}
                                        </li>
                                        <a target="_blank"
                                           href="https://globexcamhost.com/client/?cmd=cart&action=add&id=3&languagechange={{ (LaravelLocalization::getCurrentLocaleNative()) === 'English' ? 'English' : 'French' }}"
                                           class="btn btn-primary btn-round btn-lg w-100">{{ __('Order Now') }}</a>
                                    </ul>
                                </div>
                                <div class="card-footer text-center bg-transparent">
                                    <ul class="list-group simple-list mb-3 d-none d-md-flex">

                        <span class="mb-2 text-success tooltipped" title="Premium Support" data-toggle="popover"
                              data-content="<p class='my-0 f-8px'>Our friendly and knowledgeable support team is available to help you, just contact support with any issue.</p>"><i
                                class="fas fa-star "></i> Premium Support <i class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="{{ __('Free Domain for Life') }}" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                                class="fa fa-check text-success"></i> {{ __('Free Domain for Life') }} <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="500 Go Diskspace" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px' style='font-size:'8px''>500 Go Diskspace storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                                class="fa fa-check text-success"></i> 500 Go Diskspace <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unmetered Bandwith" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                                class="fa fa-check text-success"></i> Unmetered Bandwith <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE SSL Certificate" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>We provide you with free SSL certificates through Cloudfare which you can activate from inside your cPanel.</p>"><i
                                                class="fa fa-check text-success"></i> FREE SSL Certificate <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE cPanel" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>Control your website using free Cpanel control panel and special free web hosting admin tools.</p>"><i
                                                class="fa fa-check text-success"></i> FREE cPanel <i
                                                class="fas text-light fa-info-circle"></i></span>

                                    </ul>

                                    <!-- For better Accessibility on mobile -->
                                    <ul class="list-group simple-list mb-3 d-md-none">

                        <span class="mb-2 text-success" title="Premium Support" data-toggle="popover"
                              data-content="<p class='my-0 f-8px'>Our friendly and knowledgeable support team is available to help you, just contact support with any issue.</p>"><i
                                class="fas fa-star "></i> Premium Support <i class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="{{ __('Free Domain for Life') }}" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                                class="fa fa-check text-success"></i> {{ __('Free Domain for Life') }} <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="500 Go Diskspace" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px' style='font-size:'8px''>500 Go Diskspace storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                                class="fa fa-check text-success"></i> 500 Go Diskspace <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unmetered Bandwith" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                                class="fa fa-check text-success"></i> Unmetered Bandwith <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE SSL Certificate" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>We provide you with free SSL certificates through Cloudfare which you can activate from inside your cPanel.</p>"><i
                                                class="fa fa-check text-success"></i> FREE SSL Certificate <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE cPanel" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>Control your website using free Cpanel control panel and special free web hosting admin tools.</p>"><i
                                                class="fa fa-check text-success"></i> FREE cPanel <i
                                                class="fas text-light fa-info-circle"></i></span>

                                    </ul>
                                    <!-- For better Accessibility on mobile -->

                                    <hr class="my-1">
                                    <a href="{{ route('all-features') }}" type="button"
                                       class="btn btn-link text-primary">See all Features</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card card-pricing bg-white border-0 text-center mb-4">
                                <div class="card-header bg-transparent">
                                    <h5 class="font-weight-bold text-uppercase ls-1 py-3 mb-0"><i
                                            class="fas fa-thumbs-up text-light"></i>
                                        {{ __('Ultimate Plan') }}</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-muted text-center">
                                        <span class="badge badge-pill badge-md badge-success mr-1">{{ __('Save')}} 50%</span>
                                        <span>{{ __('First').' '. __('Year')}}</span>
                                    </h6>
                                    <div class="display-2 d-flex justify-content-center "><span
                                            class="font-weight-bold ">{{ number_format(5000) }}</span> <span
                                            class="font-weight-400 pt-3 text-left"
                                            style="font-size: 18px; line-height: 1;">XAF <br/>
                            {{ __('Monthly') }}</span></div>
                                    <ul class="list-unstyled my-2">
                                        <li class="align-items-center">
                                            {{ __('Renews').' '. __('at') }} <strong>{{ number_format(10000) }} <sup style="font-size: 13px;">XAF</sup></strong>
                                            {{ __('Monthly') }}
                                        </li>
                                        <a target="_blank"
                                           href="https://www.globexcamhost.com/client/?cmd=cart&action=add&id=4&languagechange={{ (LaravelLocalization::getCurrentLocaleNative()) === 'English' ? 'English' : 'French' }}"
                                           class="btn btn-primary btn-round btn-lg w-100">{{ __('Order Now') }}</a>
                                    </ul>
                                </div>
                                <div class="card-footer text-center bg-transparent">
                                    <ul class="list-group simple-list mb-3 d-none d-md-flex">

                        <span class="mb-2 text-success tooltipped" title="Dedicated Support" data-toggle="popover"
                              data-content="<p class='my-0 f-8px'>A Dedicated Support expert will always monitor your hosting and help you manage your hosting needs and goals so you can focus on your business.</p>"><i
                                class="fas fa-star "></i> Dedicated Support <i
                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 text-success tooltipped" title="Dedicated IP address"
                                              data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>Benefit from Higher On-Demand Website Access, Improve Email Deliverability, High Level of Security, High Level of Uptime with a Dedicated IP address on this package.</p>"><i
                                                class="fas fa-star "></i> Dedicated IP address <i
                                                class="fas fa-info-circle text-light"></i></span>

                                        <span class="mb-2 tooltipped" title="{{ __('Free Domain for Life') }}" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                                class="fa fa-check text-success"></i> {{ __('Free Domain for Life') }} <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Diskspace" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px' style='font-size:'8px''>Unlimited Storage storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Diskspace <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unmetered Bandwith" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                                class="fa fa-check text-success"></i> Unmetered Bandwith <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unmetered Bandwith" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>With Daily Automated Backup you can rest easy knowing you have a backup plan incase you are faced with lost or corrupted files.</p>"><i
                                                class="fa fa-check text-success"></i> Daily Automated Backups <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE SSL Certificate" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>We provide you with free SSL certificates through Cloudfare which you can activate from inside your cPanel.</p>"><i
                                                class="fa fa-check text-success"></i> FREE SSL Certificate <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE cPanel" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>Control your website using free Cpanel control panel and special free web hosting admin tools.</p>"><i
                                                class="fa fa-check text-success"></i> FREE cPanel <i
                                                class="fas text-light fa-info-circle"></i></span>

                                    </ul>

                                    <!-- For better Accessibility on mobile -->
                                    <ul class="list-group simple-list mb-3 d-md-none">

                        <span class="mb-2 text-success tooltipped" title="Dedicated Support" data-toggle="popover"
                              data-content="<p class='my-0 f-8px'>A Dedicated Support expert will always monitor your hosting and help you manage your hosting needs and goals so you can focus on your business.</p>"><i
                                class="fas fa-star "></i> Dedicated Support <i
                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 text-success tooltipped" title="Dedicated IP address"
                                              data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>Benefit from Higher On-Demand Website Access, Improve Email Deliverability, High Level of Security, High Level of Uptime with a Dedicated IP address on this package.</p>"><i
                                                class="fas fa-star "></i> Dedicated IP address <i
                                                class="fas fa-info-circle text-light"></i></span>

                                        <span class="mb-2 tooltipped" title="{{ __('Free Domain for Life') }}" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                                class="fa fa-check text-success"></i> {{ __('Free Domain for Life') }} <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Diskspace" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px' style='font-size:'8px''>Unlimited Storage storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Diskspace <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unmetered Bandwith" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                                class="fa fa-check text-success"></i> Unmetered Bandwith <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unmetered Bandwith" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>With Daily Automated Backup you can rest easy knowing you have a backup plan incase you are faced with lost or corrupted files.</p>"><i
                                                class="fa fa-check text-success"></i> Daily Automated Backups <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE SSL Certificate" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>We provide you with free SSL certificates through Cloudfare which you can activate from inside your cPanel.</p>"><i
                                                class="fa fa-check text-success"></i> FREE SSL Certificate <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE cPanel" data-toggle="popover"
                                              data-content="<p class='my-0 f-8px'>Control your website using free Cpanel control panel and special free web hosting admin tools.</p>"><i
                                                class="fa fa-check text-success"></i> FREE cPanel <i
                                                class="fas text-light fa-info-circle"></i></span>


                                    </ul>
                                    <!-- For better Accessibility on mobile -->
                                    <hr class="my-1">
                                    <a href="{{ route('all-features') }}" type="button"
                                       class="btn btn-link text-primary">See all Features</a>
                                </div>
                            </div>
                        </div>
                        <!-- Plans -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- CTA -->
@endsection
