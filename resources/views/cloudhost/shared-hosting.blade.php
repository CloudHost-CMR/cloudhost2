@extends('layouts.app')

@section('header')
    <div class="mb-0"
         style="background-image: url('{{ asset('assets/images/bg-2.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
        <div class="overlay"></div>
        <div class="container ">
            <div class="row pt-9">
                <div class="col-md-3 col-sm-6">
                    <!-- <h3 class="display-3 mt-3">Choose a plan for your next project</h3> -->
                    <h1 class="display-3 mt-3 d-none d-md-block text-white"> {{ __('Shared Hosting') .'  '. __('in').' '.__('Cameroon') }} </h1>
                    <h1 class="mt-6 d-md-none d-block text-white"> {{ __('Shared Hosting') .'  '. __('in').' '.__('Cameroon') }}</h1>
                    <p class="pb-4 text-white mt-0">{{ __('We provide reliable, fast and secure Web hosting services with Premium Customer service of over 15+ years of experience') }}.</p>
                </div>

                <!-- Plans -->
                <div class="col-md-3 col-sm-6">
                    <div class="card card-pricing bg-white text-center mb-4">
                        <div class="card-header bg-transparent">
                            <h5 class="font-weight-bold text-uppercase ls-1 py-3 mb-0"> {{ __('Business Plan') }}</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="text-muted text-center">
                                <span
                                    class="badge badge-pill badge-md badge-success mr-1 text-uppercase">{{ __('Save') }} 70%</span>
                                <span>{{ __('First') .' '. __('Year') }}</span>
                            </h6>
                            <div class="display-2 d-flex justify-content-center "><span
                                    class="font-weight-bold ">{{ number_format(env('BUSINESS_PACKAGE_PRICE')) }}</span> <span
                                    class="font-weight-400 pt-3 text-left"
                                    style="font-size: 18px; line-height: 1;">XAF <br/>
                  {{ __('Year') }}</span></div>
                            <!-- <span>per Month</span> -->
                            <ul class="list-unstyled my-2">
                                <li class="align-items-center">
                                    {{ __('Renews').' '. __('at') }} <strong>{{ number_format(env('BUSINESS_PACKAGE_PRICE_RENEW')) }} <sup
                                            style="font-size: 13px;">XAF</sup></strong> {{ __('Year') }}
                                </li>
                                <a target="_blank"
                                   href="{{ env('BUSINESS_PACKAGE_LINK') }}={{ (LaravelLocalization::getCurrentLocaleNative()) === 'English' ? 'English' : 'French' }}"
                                   class="btn btn-primary btn-round btn-lg w-100">{{ __('Order Now') }}</a>
                            </ul>
                        </div>
                        <div class="card-footer text-center bg-transparent">
                            <ul class="list-group simple-list mb-3 d-none d-md-flex">

                                <span class="mb-2 tooltipped text-success" title="Premium Support" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Our friendly and knowledgeable support team is available to help you, just contact support with any issue.</p>"><i
                                        class="fas fa-star "></i> Premium Support <i
                                        class="fas text-light fa-info-circle"></i></span>


                                <span class="mb-2 tooltipped  text-success" title="250GB SSD Disk space"
                                      data-toggle="popover"
                                      data-content="<p class='my-0 f-8px' style='font-size:'8px''>Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                        class="fa fa-star"></i> 250GB SSD Disk space <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Sub-domains" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limits to the number of sub domains you can add to your website.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Sub-domains <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Mail Accounts" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limits to the number of mail accounts you can have.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Mail Accounts <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Bandwith" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Bandwith <i
                                        class="fas text-light fa-info-circle"></i></span>


                                <span class="mb-2 tooltipped" title="Unlimited MySQL Databases" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limit to the number of databases you can create.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited MySQL Databases <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="FREE Domain for life" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                        class="fa fa-check text-success"></i> FREE Domain for life <i
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
                                        class="fas fa-star "></i> Premium Support <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped text-success" title="250GB SSD Disk space"
                                      data-toggle="popover"
                                      data-content="<p class='my-0 f-8px' style='font-size:'8px''>Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                        class="fa fa-star"></i> 250GB SSD Disk space <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Sub-domains" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limits to the number of sub domains you can add to your website.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Sub-domains <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Mail Accounts" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limits to the number of mail accounts you can have.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Mail Accounts <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Bandwith" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Bandwith <i
                                        class="fas text-light fa-info-circle"></i></span>


                                <span class="mb-2 tooltipped" title="Unlimited MySQL Databases" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limit to the number of databases you can create.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited MySQL Databases <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="FREE Domain for life" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                        class="fa fa-check text-success"></i> FREE Domain for life <i
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
                            <a href="{{ route('all-features') }}" type="button" class="btn btn-link text-primary">{{ __('See all features') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card card-pricing bg-white text-center mb-4">
                        <div class="card-header bg-transparent">
                            <h5 class="font-weight-bold text-uppercase ls-1 py-3 mb-0"> {{ __('Premium Plan') }}</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="text-muted text-center">
                                <span
                                    class="badge badge-pill badge-md badge-success mr-1 text-uppercase">{{ __('Save') }} 50%</span>
                                <span>{{ __('First') .' '. __('Year') }}</span>
                            </h6>
                            <div class="display-2 d-flex justify-content-center "><span
                                    class="font-weight-bold ">{{ number_format(env('PREMIUM_PACKAGE_PRICE')) }}</span> <span
                                    class="font-weight-400 pt-3 text-left"
                                    style="font-size: 18px; line-height: 1;">XAF <br/>
                  {{ __('Year') }}</span></div>
                            <!-- <span>per Month</span> -->
                            <ul class="list-unstyled my-2">
                                <li class="align-items-center">
                                    {{ __('Renews').' '. __('at') }} <strong>{{ number_format(env('PREMIUM_PACKAGE_PRICE_RENEW')) }} <sup
                                            style="font-size: 13px;">XAF</sup></strong> {{ __('Year') }}
                                </li>
                                <a target="_blank"
                                   href="{{ env('PREMIUM_PACKAGE_LINK') }}={{ (LaravelLocalization::getCurrentLocaleNative()) === 'English' ? 'English' : 'French' }}"
                                   class="btn btn-primary btn-round btn-lg w-100">{{ __('Order Now') }}</a>
                            </ul>
                        </div>
                        <div class="card-footer text-center bg-transparent">
                            <ul class="list-group simple-list mb-3 d-none d-md-flex">

                                <span class="mb-2 tooltipped text-success" title="Premium Support" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Our friendly and knowledgeable support team is available to help you, just contact support with any issue.</p>"><i
                                        class="fas fa-star "></i> Premium Support <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped text-success" title="500GB SSD Disk space"
                                      data-toggle="popover"
                                      data-content="<p class='my-0 f-8px' style='font-size:'8px''>Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                        class="fa fa-star"></i> 500GB SSD Disk space <i
                                        class="fas text-light fa-info-circle"></i></span>
                                <span class="mb-2 tooltipped  text-success" title="25 Websites (addon domains)"
                                      data-toggle="popover"
                                      data-content="<p class='my-0 f-8px' style='font-size:'8px''>You can add upto 25 website to your cpanel account.</p>"><i
                                        class="fa fa-star"></i> 5 Websites (addon domains) <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Sub-domains" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limits to the number of sub domains you can add to your website.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Sub-domains <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Mail Accounts" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limits to the number of mail accounts you can have.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Mail Accounts <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Bandwith" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Bandwith <i
                                        class="fas text-light fa-info-circle"></i></span>


                                <span class="mb-2 tooltipped" title="Unlimited MySQL Databases" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limit to the number of databases you can create.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited MySQL Databases <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="FREE Domain for life" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                        class="fa fa-check text-success"></i> FREE Domain for life <i
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
                                        class="fas fa-star "></i> Premium Support <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped text-success" title="Unlimited SSD Disk space"
                                      data-toggle="popover"
                                      data-content="<p class='my-0 f-8px' style='font-size:'8px''>Unlimited Storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                        class="fa fa-star"></i> 500GB SSD Disk space <i
                                        class="fas text-light fa-info-circle"></i></span>


                                <span class="mb-2 tooltipped" title="Unlimited Sub-domains" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limits to the number of sub domains you can add to your website.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Sub-domains <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Mail Accounts" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limits to the number of mail accounts you can have.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Mail Accounts <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Bandwith" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Bandwith <i
                                        class="fas text-light fa-info-circle"></i></span>


                                <span class="mb-2 tooltipped" title="Unlimited MySQL Databases" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limit to the number of databases you can create.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited MySQL Databases <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="FREE Domain for life" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                        class="fa fa-check text-success"></i> FREE Domain for life <i
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
                            <a href="{{ route('all-features') }}" type="button" class="btn btn-link text-primary">{{ __('See all features') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card card-pricing bg-white border-0 text-center mb-4">
                        <div class="card-header bg-transparent">
                            <h5 class="font-weight-bold text-uppercase ls-1 py-3 mb-0"><i
                                    class="fas fa-thumbs-up text-light"></i>
                                {{ __('Ultimate Plan') }}</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="text-muted text-center">
                                <span class="badge badge-pill badge-md badge-success mr-1">{{ __('Save') }} 50%</span>
                                <span>{{ __('First') .' '. __('Year') }}</span>
                            </h6>
                            <div class="display-2 d-flex justify-content-center "><span
                                    class="font-weight-bold ">{{ number_format(env('ULTIMATE_PACKAGE_PRICE')) }}</span> <span
                                    class="font-weight-400 pt-3 text-left"
                                    style="font-size: 18px; line-height: 1;">XAF <br/>
                  {{ __('Year') }}</span></div>
                            <ul class="list-unstyled my-2">
                                <li class="align-items-center">
                                    {{ __('Renews').' '. __('at') }} <strong>{{ number_format(env('ULTIMATE_PACKAGE_PRICE_RENEW')) }} <sup
                                            style="font-size: 13px;">XAF</sup></strong> {{ __('Year') }}
                                </li>
                                <a target="_blank"
                                   href="{{ env('ULTIMATE_PACKAGE_LINK') }}={{ (LaravelLocalization::getCurrentLocaleNative()) === 'English' ? 'English' : 'French' }}"
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

                                <span class="mb-2 tooltipped text-success" title="Unlimited SSD Disk space"
                                      data-toggle="popover"
                                      data-content="<p class='my-0 f-8px' style='font-size:'8px''>Unlimited Storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                        class="fa fa-star"></i> Unlimited SSD Disk space <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped  text-success" title="5 Websites (addon domains)"
                                      data-toggle="popover"
                                      data-content="<p class='my-0 f-8px' style='font-size:'8px''>Unlimited Storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                        class="fa fa-star"></i> Unlimited Websites (addon domains) <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Sub-domains" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limits to the number of sub domains you can add to your website.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Sub-domains <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Mail Accounts" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limits to the number of mail accounts you can have.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Mail Accounts <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Bandwith" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Bandwith <i
                                        class="fas text-light fa-info-circle"></i></span>


                                <span class="mb-2 tooltipped" title="Unlimited MySQL Databases" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limit to the number of databases you can create.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited MySQL Databases <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="FREE Domain for life" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                        class="fa fa-check text-success"></i> FREE Domain for life <i
                                        class="fas text-light fa-info-circle"></i></span>


                                <span class="mb-2 tooltipped" title="Unlimited Bandwith" data-toggle="popover"
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

                                <span class="mb-2 tooltipped text-success" title="Unlimited SSD Disk space"
                                      data-toggle="popover"
                                      data-content="<p class='my-0 f-8px' style='font-size:'8px''>Unlimited Storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                        class="fa fa-star"></i> Unlimited SSD Disk space <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped  text-success" title="5 Websites (addon domains)"
                                      data-toggle="popover"
                                      data-content="<p class='my-0 f-8px' style='font-size:'8px''>Unlimited Storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                        class="fa fa-star"></i> Unlimited Websites (addon domains) <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Sub-domains" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limits to the number of sub domains you can add to your website.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Sub-domains <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Mail Accounts" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limits to the number of mail accounts you can have.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Mail Accounts <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="Unlimited Bandwith" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited Bandwith <i
                                        class="fas text-light fa-info-circle"></i></span>


                                <span class="mb-2 tooltipped" title="Unlimited MySQL Databases" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>No limit to the number of databases you can create.</p>"><i
                                        class="fa fa-check text-success"></i> Unlimited MySQL Databases <i
                                        class="fas text-light fa-info-circle"></i></span>

                                <span class="mb-2 tooltipped" title="FREE Domain for life" data-toggle="popover"
                                      data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                        class="fa fa-check text-success"></i> FREE Domain for life <i
                                        class="fas text-light fa-info-circle"></i></span>


                                <span class="mb-2 tooltipped" title="Unlimited Bandwith" data-toggle="popover"
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
                            <a href="{{ route('all-features') }}" type="button" class="btn btn-link text-primary">{{ __('See all features') }}</a>
                        </div>
                    </div>
                </div>
                <!-- Plans -->

            </div>
        </div>
    </div>
@endsection

@section('cta')
    <!-- CTA -->
    <section class="section mt-0"
             style="background-image: url('{{ asset('assets/images/bg-2.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
        <div class="overlay"></div>
        <div class="container-fluid mt-5 higher-index-2">

            <div class="row">
                <div class="col-md-12 mb-4 text-center">
                    <h1 class="display-1 d-none d-md-block text-white"> {{ __('Choose your Package') }} </h1>
                    <h1 class="mt-6 d-md-none d-block text-white"> {{ __('Choose your Package') }}</h1>
                    <h2 class="text-white d-none d-md-block">{{ __('Free Domain for Life name included') }}</h2>
                    <h4 class="text-white d-md-none d-block">{{ __('Free Domain for Life name included') }}</h4>
                </div>
                <div class="col-md-8 m-auto">
                    <div class="row">

                        <div class=" col-md-4 col-sm-6 ">
                            <div class="card card-pricing bg-white text-center mb-4">
                                <div class="card-header bg-transparent">
                                    <h5 class="font-weight-bold text-uppercase ls-1 py-3 mb-0"> {{ __('Business Plan') }}</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-muted text-center">
                                        <span class="badge badge-pill badge-md badge-success mr-1 text-uppercase">{{ __('Save') }} 70%</span>
                                        <span>{{ __('First') .' '.__('Year') }}</span>
                                    </h6>
                                    <div class="display-2 d-flex justify-content-center "><span
                                            class="font-weight-bold ">{{ number_format(env('BUSINESS_PACKAGE_PRICE')) }}</span>
                                        <span class="font-weight-400 pt-3 text-left"
                                              style="font-size: 18px; line-height: 1;">XAF <br/>
                      {{ __('Year') }}</span></div>
                                    <!-- <span>per Month</span> -->
                                    <ul class="list-unstyled my-2">
                                        <li class="align-items-center">
                                            {{ __('Renews') .' '.  __('at') }}<strong> {{ number_format(env('BUSINESS_PACKAGE_PRICE_RENEW')) }} <sup
                                                    style="font-size: 13px;">XAF</sup></strong>
                                            {{ __('Year') }}
                                        </li>

                                        <a href="{{ env('BUSINESS_PACKAGE_LINK') }}={{ (LaravelLocalization::getCurrentLocaleNative()) === 'English' ? 'English' : 'French' }}"
                                           class="btn btn-primary btn-round btn-lg w-100">{{ __('Order Now') }}</a>
                                    </ul>
                                </div>
                                <div class="card-footer text-center bg-transparent">
                                    <ul class="list-group simple-list mb-3 d-none d-md-flex">

                                        <span class="mb-2 tooltipped text-success" title="Premium Support" data-toggle="popover" data-content="<p class='my-0 f-8px'>Our friendly and knowledgeable support team is available to help you, just contact support with any issue.</p>"><i
                                                class="fas fa-star "></i> Premium Support <i class="fas text-light fa-info-circle"></i></span>



                                        <span class="mb-2 tooltipped  text-success" title="250GB SSD Disk space" data-toggle="popover" data-content="<p class='my-0 f-8px' style='font-size:'8px''>Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                                class="fa fa-star"></i> 250GB SSD Disk space <i class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped  text-success" title="5 Websites (addon domains)" data-toggle="popover" data-content="<p class='my-0 f-8px' style='font-size:'8px''>You can add upto 5 website to your cpanel account.</p>"><i
                                                class="fa fa-star"></i> 5 Websites (addon domains) <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Sub-domains" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limits to the number of sub domains you can add to your website.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Sub-domains <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Mail Accounts" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limits to the number of mail accounts you can have.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Mail Accounts <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Bandwith" data-toggle="popover" data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Bandwith <i
                                                class="fas text-light fa-info-circle"></i></span>


                                        <span class="mb-2 tooltipped" title="Unlimited MySQL Databases" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limit to the number of databases you can create.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited MySQL Databases <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE Domain for life" data-toggle="popover" data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                                class="fa fa-check text-success"></i> FREE Domain for life <i
                                                class="fas text-light fa-info-circle"></i></span>


                                        <span class="mb-2 tooltipped" title="FREE SSL Certificate" data-toggle="popover" data-content="<p class='my-0 f-8px'>We provide you with free SSL certificates through Cloudfare which you can activate from inside your cPanel.</p>"><i
                                                class="fa fa-check text-success"></i> FREE SSL Certificate <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE cPanel" data-toggle="popover" data-content="<p class='my-0 f-8px'>Control your website using free Cpanel control panel and special free web hosting admin tools.</p>"><i
                                                class="fa fa-check text-success"></i> FREE cPanel <i
                                                class="fas text-light fa-info-circle"></i></span>

                                    </ul>

                                    <!-- For better Accessibility on mobile -->
                                    <ul class="list-group simple-list mb-3 d-md-none">

                                        <span class="mb-2 text-success" title="Premium Support" data-toggle="popover" data-content="<p class='my-0 f-8px'>Our friendly and knowledgeable support team is available to help you, just contact support with any issue.</p>"><i
                                                class="fas fa-star "></i> Premium Support <i class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped text-success" title="250GB SSD Disk space" data-toggle="popover" data-content="<p class='my-0 f-8px' style='font-size:'8px''>Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                                class="fa fa-star"></i> 250GB SSD Disk space <i class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Sub-domains" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limits to the number of sub domains you can add to your website.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Sub-domains <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Mail Accounts" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limits to the number of mail accounts you can have.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Mail Accounts <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Bandwith" data-toggle="popover" data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Bandwith <i
                                                class="fas text-light fa-info-circle"></i></span>


                                        <span class="mb-2 tooltipped" title="Unlimited MySQL Databases" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limit to the number of databases you can create.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited MySQL Databases <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE Domain for life" data-toggle="popover" data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                                class="fa fa-check text-success"></i> FREE Domain for life <i
                                                class="fas text-light fa-info-circle"></i></span>


                                        <span class="mb-2 tooltipped" title="FREE SSL Certificate" data-toggle="popover" data-content="<p class='my-0 f-8px'>We provide you with free SSL certificates through Cloudfare which you can activate from inside your cPanel.</p>"><i
                                                class="fa fa-check text-success"></i> FREE SSL Certificate <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE cPanel" data-toggle="popover" data-content="<p class='my-0 f-8px'>Control your website using free Cpanel control panel and special free web hosting admin tools.</p>"><i
                                                class="fa fa-check text-success"></i> FREE cPanel <i
                                                class="fas text-light fa-info-circle"></i></span>

                                    </ul>
                                    <!-- For better Accessibility on mobile -->

                                    <hr class="my-1">
                                    <a href="{{ route('all-features') }}" type="button" class="btn btn-link text-primary">{{ __('See all features') }}</a>
                                </div>
                            </div>
                        </div>

                        <div class=" col-md-4 col-sm-6 ">
                            <div class="card card-pricing bg-white text-center mb-4">
                                <div class="card-header bg-transparent">
                                    <h5 class="font-weight-bold text-uppercase ls-1 py-3 mb-0"> {{ __('Premium Plan') }}</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-muted text-center">
                                        <span class="badge badge-pill badge-md badge-success mr-1 text-uppercase">{{ __('Save') }} 50%</span>
                                        <span>{{ __('First') .' '.__('Year') }}</span>
                                    </h6>
                                    <div class="display-2 d-flex justify-content-center "><span
                                            class="font-weight-bold ">{{ number_format(env('PREMIUM_PACKAGE_PRICE')) }}</span>
                                        <span class="font-weight-400 pt-3 text-left"
                                              style="font-size: 18px; line-height: 1;">XAF <br/>
                      {{ __('Year') }}}</span></div>
                                    <!-- <span>per Month</span> -->
                                    <ul class="list-unstyled my-2">
                                        <li class="align-items-center">
                                            {{ __('Renews') .' '.  __('at') }}<strong> {{ number_format(env('PREMIUM_PACKAGE_PRICE_RENEW')) }} <sup
                                                    style="font-size: 13px;">XAF</sup></strong>
                                            {{ __('Year') }}
                                        </li>
                                        <a href="{{ env('PREMIUM_PACKAGE_LINK') }}={{ (LaravelLocalization::getCurrentLocaleNative()) === 'English' ? 'English' : 'French' }}"
                                           class="btn btn-primary btn-round btn-lg w-100">{{ __('Order Now') }}</a>
                                    </ul>
                                </div>
                                <div class="card-footer text-center bg-transparent">
                                    <ul class="list-group simple-list mb-3 d-none d-md-flex">

                                        <span class="mb-2 tooltipped text-success" title="Premium Support" data-toggle="popover" data-content="<p class='my-0 f-8px'>Our friendly and knowledgeable support team is available to help you, just contact support with any issue.</p>"><i class="fas fa-star "></i> Premium Support <i class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped text-success" title="500GB SSD Disk space" data-toggle="popover" data-content="<p class='my-0 f-8px' style='font-size:'8px''>Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                                class="fa fa-star"></i> 500GB SSD Disk space <i class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped  text-success" title="25 Websites (addon domains)" data-toggle="popover" data-content="<p class='my-0 f-8px' style='font-size:'8px''>You can add upto 25 website to your cpanel account.</p>"><i
                                                class="fa fa-star"></i> 5 Websites (addon domains) <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Sub-domains" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limits to the number of sub domains you can add to your website.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Sub-domains <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Mail Accounts" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limits to the number of mail accounts you can have.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Mail Accounts <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Bandwith" data-toggle="popover" data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Bandwith <i
                                                class="fas text-light fa-info-circle"></i></span>


                                        <span class="mb-2 tooltipped" title="Unlimited MySQL Databases" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limit to the number of databases you can create.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited MySQL Databases <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE Domain for life" data-toggle="popover" data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                                class="fa fa-check text-success"></i> FREE Domain for life <i
                                                class="fas text-light fa-info-circle"></i></span>



                                        <span class="mb-2 tooltipped" title="FREE SSL Certificate" data-toggle="popover" data-content="<p class='my-0 f-8px'>We provide you with free SSL certificates through Cloudfare which you can activate from inside your cPanel.</p>"><i
                                                class="fa fa-check text-success"></i> FREE SSL Certificate <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE cPanel" data-toggle="popover" data-content="<p class='my-0 f-8px'>Control your website using free Cpanel control panel and special free web hosting admin tools.</p>"><i
                                                class="fa fa-check text-success"></i> FREE cPanel <i
                                                class="fas text-light fa-info-circle"></i></span>

                                    </ul>

                                    <!-- For better Accessibility on mobile -->
                                    <ul class="list-group simple-list mb-3 d-md-none">

                                        <span class="mb-2 text-success" title="Premium Support" data-toggle="popover" data-content="<p class='my-0 f-8px'>Our friendly and knowledgeable support team is available to help you, just contact support with any issue.</p>"><i
                                                class="fas fa-star "></i> Premium Support <i class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped text-success" title="Unlimited SSD Disk space" data-toggle="popover" data-content="<p class='my-0 f-8px' style='font-size:'8px''>Unlimited Storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                                class="fa fa-star"></i> 500GB SSD Disk space <i class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped  text-success" title="5 Websites (addon domains)" data-toggle="popover" data-content="<p class='my-0 f-8px' style='font-size:'8px''>Unlimited Storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                                class="fa fa-star"></i> 25 Websites (addon domains) <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Sub-domains" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limits to the number of sub domains you can add to your website.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Sub-domains <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Mail Accounts" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limits to the number of mail accounts you can have.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Mail Accounts <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Bandwith" data-toggle="popover" data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Bandwith <i
                                                class="fas text-light fa-info-circle"></i></span>


                                        <span class="mb-2 tooltipped" title="Unlimited MySQL Databases" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limit to the number of databases you can create.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited MySQL Databases <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE Domain for life" data-toggle="popover" data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                                class="fa fa-check text-success"></i> FREE Domain for life <i
                                                class="fas text-light fa-info-circle"></i></span>



                                        <span class="mb-2 tooltipped" title="FREE SSL Certificate" data-toggle="popover" data-content="<p class='my-0 f-8px'>We provide you with free SSL certificates through Cloudfare which you can activate from inside your cPanel.</p>"><i
                                                class="fa fa-check text-success"></i> FREE SSL Certificate <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE cPanel" data-toggle="popover" data-content="<p class='my-0 f-8px'>Control your website using free Cpanel control panel and special free web hosting admin tools.</p>"><i
                                                class="fa fa-check text-success"></i> FREE cPanel <i
                                                class="fas text-light fa-info-circle"></i></span>

                                    </ul>
                                    <!-- For better Accessibility on mobile -->

                                    <hr class="my-1">
                                    <a href="{{ route('all-features') }}" type="button" class="btn btn-link text-primary">{{ __('See all features') }}</a>
                                </div>
                            </div>
                        </div>

                        <div class=" col-md-4 col-sm-6 ">
                            <div class="card card-pricing bg-white border-0 text-center mb-4">
                                <div class="card-header bg-transparent">
                                    <h5 class="font-weight-bold text-uppercase ls-1 py-3 mb-0"><i
                                            class="fas fa-thumbs-up text-light"></i> {{ __('Ultimate Plan') }}</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-muted text-center">
                                        <span
                                            class="badge badge-pill badge-md badge-success mr-1">{{ __('Save')}} 50%</span>
                                        <span>{{ __('First') .' '. __('Year') }}</span>
                                    </h6>
                                    <div class="display-2 d-flex justify-content-center "><span
                                            class="font-weight-bold ">{{ number_format(env('ULTIMATE_PACKAGE_PRICE')) }}</span>
                                        <span class="font-weight-400 pt-3 text-left"
                                              style="font-size: 18px; line-height: 1;">XAF <br/>
                      {{ __('Year') }}</span></div>
                                    <ul class="list-unstyled my-2">
                                        <li class="align-items-center">
                                            {{ __('Renews') .' '. __('at')}} <strong>{{ number_format(env('ULTIMATE_PACKAGE_PRICE_RENEW')) }} <sup
                                                    style="font-size: 13px;">XAF</sup></strong>
                                            {{ __('Year') }}
                                        </li>
                                        <a target="_blank"
                                           href="{{ env('ULTIMATE_PACKAGE_LINK') }}={{ (LaravelLocalization::getCurrentLocaleNative()) === 'English' ? 'English' : 'French' }}"
                                           class="btn btn-primary btn-round btn-lg w-100">{{ __('Order Now') }}</a>
                                    </ul>
                                </div>
                                <div class="card-footer text-center bg-transparent">
                                    <ul class="list-group simple-list mb-3 d-none d-md-flex">

                                        <span class="mb-2 text-success tooltipped" title="Dedicated Support" data-toggle="popover" data-content="<p class='my-0 f-8px'>A Dedicated Support expert will always monitor your hosting and help you manage your hosting needs and goals so you can focus on your business.</p>"><i
                                                class="fas fa-star "></i> Dedicated Support <i class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 text-success tooltipped" title="Dedicated IP address" data-toggle="popover" data-content="<p class='my-0 f-8px'>Benefit from Higher On-Demand Website Access, Improve Email Deliverability, High Level of Security, High Level of Uptime with a Dedicated IP address on this package.</p>"><i
                                                class="fas fa-star "></i> Dedicated IP address <i class="fas fa-info-circle text-light"></i></span>

                                        <span class="mb-2 tooltipped text-success" title="Unlimited SSD Disk space" data-toggle="popover" data-content="<p class='my-0 f-8px' style='font-size:'8px''>Unlimited Storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                                class="fa fa-star"></i> Unlimited SSD Disk space <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped  text-success" title="5 Websites (addon domains)" data-toggle="popover" data-content="<p class='my-0 f-8px' style='font-size:'8px''>Unlimited Storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                                class="fa fa-star"></i> Unlimited Websites (addon domains) <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Sub-domains" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limits to the number of sub domains you can add to your website.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Sub-domains <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Mail Accounts" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limits to the number of mail accounts you can have.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Mail Accounts <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Bandwith" data-toggle="popover" data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Bandwith <i
                                                class="fas text-light fa-info-circle"></i></span>


                                        <span class="mb-2 tooltipped" title="Unlimited MySQL Databases" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limit to the number of databases you can create.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited MySQL Databases <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE Domain for life" data-toggle="popover" data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                                class="fa fa-check text-success"></i> FREE Domain for life <i
                                                class="fas text-light fa-info-circle"></i></span>



                                        <span class="mb-2 tooltipped" title="Unlimited Bandwith" data-toggle="popover" data-content="<p class='my-0 f-8px'>With Daily Automated Backup you can rest easy knowing you have a backup plan incase you are faced with lost or corrupted files.</p>"><i
                                                class="fa fa-check text-success"></i> Daily Automated Backups <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE SSL Certificate" data-toggle="popover" data-content="<p class='my-0 f-8px'>We provide you with free SSL certificates through Cloudfare which you can activate from inside your cPanel.</p>"><i
                                                class="fa fa-check text-success"></i> FREE SSL Certificate <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE cPanel" data-toggle="popover" data-content="<p class='my-0 f-8px'>Control your website using free Cpanel control panel and special free web hosting admin tools.</p>"><i
                                                class="fa fa-check text-success"></i> FREE cPanel <i
                                                class="fas text-light fa-info-circle"></i></span>

                                    </ul>

                                    <!-- For better Accessibility on mobile -->
                                    <ul class="list-group simple-list mb-3 d-md-none">

                                        <span class="mb-2 text-success tooltipped" title="Dedicated Support" data-toggle="popover" data-content="<p class='my-0 f-8px'>A Dedicated Support expert will always monitor your hosting and help you manage your hosting needs and goals so you can focus on your business.</p>"><i
                                                class="fas fa-star "></i> Dedicated Support <i class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 text-success tooltipped" title="Dedicated IP address" data-toggle="popover" data-content="<p class='my-0 f-8px'>Benefit from Higher On-Demand Website Access, Improve Email Deliverability, High Level of Security, High Level of Uptime with a Dedicated IP address on this package.</p>"><i
                                                class="fas fa-star "></i> Dedicated IP address <i class="fas fa-info-circle text-light"></i></span>

                                        <span class="mb-2 tooltipped text-success" title="Unlimited SSD Disk space" data-toggle="popover" data-content="<p class='my-0 f-8px' style='font-size:'8px''>Unlimited Storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                                class="fa fa-star"></i> Unlimited SSD Disk space <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped  text-success" title="5 Websites (addon domains)" data-toggle="popover" data-content="<p class='my-0 f-8px' style='font-size:'8px''>Unlimited Storage allows you to use and grow your web hosting account with Cloudhost without incurring any additional storage fees. Our storage is available for you to use for your website files only and not for data archiving including email, computer files, backup, etc.</p>"><i
                                                class="fa fa-star"></i> Unlimited Websites (addon domains) <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Sub-domains" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limits to the number of sub domains you can add to your website.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Sub-domains <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Mail Accounts" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limits to the number of mail accounts you can have.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Mail Accounts <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="Unlimited Bandwith" data-toggle="popover" data-content="<p class='my-0 f-8px'>We don’t limit the amount of visitor traffic a website can receive or the amount of content you can upload to your website so long as you comply with our Terms of Service. If your website demands resources that present a risk to the stability, performance, or uptime of our servers, we will notify you to take corrective action and may restrict the resources or ask you to choose a plan more suitable to your needs.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited Bandwith <i
                                                class="fas text-light fa-info-circle"></i></span>


                                        <span class="mb-2 tooltipped" title="Unlimited MySQL Databases" data-toggle="popover" data-content="<p class='my-0 f-8px'>No limit to the number of databases you can create.</p>"><i
                                                class="fa fa-check text-success"></i> Unlimited MySQL Databases <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE Domain for life" data-toggle="popover" data-content="<p class='my-0 f-8px'>Free domains include: <strong class='font-weight-bold'>.cm</strong>, <strong class='font-weight-bold'>.rw</strong>, <strong class='font-weight-bold'>.com</strong>, <strong class='font-weight-bold'>.net</strong>. If you cancel your hosting account in the first term a non-refundable domain fee will be applied.</p>"><i
                                                class="fa fa-check text-success"></i> FREE Domain for life <i
                                                class="fas text-light fa-info-circle"></i></span>


                                        <span class="mb-2 tooltipped" title="Unlimited Bandwith" data-toggle="popover" data-content="<p class='my-0 f-8px'>With Daily Automated Backup you can rest easy knowing you have a backup plan incase you are faced with lost or corrupted files.</p>"><i
                                                class="fa fa-check text-success"></i> Daily Automated Backups <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE SSL Certificate" data-toggle="popover" data-content="<p class='my-0 f-8px'>We provide you with free SSL certificates through Cloudfare which you can activate from inside your cPanel.</p>"><i
                                                class="fa fa-check text-success"></i> FREE SSL Certificate <i
                                                class="fas text-light fa-info-circle"></i></span>

                                        <span class="mb-2 tooltipped" title="FREE cPanel" data-toggle="popover" data-content="<p class='my-0 f-8px'>Control your website using free Cpanel control panel and special free web hosting admin tools.</p>"><i
                                                class="fa fa-check text-success"></i> FREE cPanel <i
                                                class="fas text-light fa-info-circle"></i></span>


                                    </ul>
                                    <!-- For better Accessibility on mobile -->
                                    <hr class="my-1">
                                    <a href="{{ route('all-features') }}" type="button" class="btn btn-link text-primary">{{ __('See all features') }}</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
