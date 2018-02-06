@extends('layouts.app')

@section('content')
        <!-- Content -->
<div id="content">
    <!--======= HOME MAIN SLIDER =========-->
    <section class="home-slider">
        <div class="tp-banner-container">
            <div class="tp-banner-fix">
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7">
                        <!-- MAIN IMAGE -->
                        <img src="images/slides/slides-1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption text-uppercase font-bold sft tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-100"
                             data-speed="500"
                             data-start="500"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="700"
                             style="z-index: 5; font-size:65px; color:#fff;">Clean and Pixel Perfect Design</div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption letter-space-1 sfb tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="0"
                             data-speed="500"
                             data-start="1000"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="700"
                             style="z-index: 5; font-size:25px; color:#fff; font-weight:100;">Dolor sit amet lorem ipsum apet njejt</div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption sfb tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="100"
                             data-speed="500"
                             data-start="1500"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 6; white-space: normal;"><a href="#" class="btn btn-med btn-color">PURCHASES NOW</a> </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7">
                        <!-- MAIN IMAGE -->
                        <img src="images/slides/slides-2.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption text-uppercase font-bold sft tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-100"
                             data-speed="500"
                             data-start="500"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="700"
                             style="z-index: 5; font-size:65px; color:#fff;">Material Design HTML Template</div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption letter-space-1 sfb tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="0"
                             data-speed="500"
                             data-start="1000"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="700"
                             style="z-index: 5; font-size:25px; color:#fff; font-weight:100;">Lorem ipsum dolor sit amet nun gravida</div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption sfb tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="100"
                             data-speed="500"
                             data-start="1500"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 6; white-space: normal;"><a href="#" class="btn btn-med btn-color">PURCHASES NOW</a> </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>`
    <!-- Services -->
    <section class="welcome padding-top-100 padding-bottom-100 ">
        <div class="container">
            <!-- HEADING BLOCK -->
            <div class="heading-block text-center margin-bottom-80">
                <h3>Welcome To Fugiat</h3>
                <hr>
                <span class=" margin-top-20">The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </span> </div>

            <!-- Icon Row -->

            <div class="row">
                <div class="col-md-7">
                    <ul class="row margin-top-70">

                        <!-- Services -->
                        <li class="col-md-6 margin-bottom-50">
                            <div class="media">
                                <div class="media-left">
                                    <div class="icon"> <i class="ion-ios-speedometer-outline"></i> </div>
                                </div>
                                <div class="media-body">
                                    <h5>who we are</h5>
                                    <p>Takin' a break from all your wo ries sure would help a lot. </p>
                                </div>
                            </div>
                        </li>

                        <!-- Services -->
                        <li class="col-md-6 margin-bottom-50">
                            <div class="media">
                                <div class="media-left">
                                    <div class="icon"> <i class="ion-ios-color-wand-outline"></i> </div>
                                </div>
                                <div class="media-body">
                                    <h5>what we do</h5>
                                    <p>Takin' a break from all your wo ries sure would help a lot. </p>
                                </div>
                            </div>
                        </li>

                        <!-- Services -->
                        <li class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <div class="icon"> <i class="ion-ios-infinite-outline"></i> </div>
                                </div>
                                <div class="media-body">
                                    <h5>our great team</h5>
                                    <p>Takin' a break from all your wo ries sure would help a lot. </p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <div class="icon"> <i class="ion-ios-monitor-outline"></i> </div>
                                </div>
                                <div class="media-body">
                                    <h5>our achievements</h5>
                                    <p>Takin' a break from all your wo ries sure would help a lot. </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5"> <img class="img-responsive" src="images/intro-tabs.png" alt="" > </div>
            </div>
        </div>
    </section>

    <!-- Intro Coporate -->
    <section class="list-style-featured light-gray-bg padding-top-80 padding-bottom-80 ">
        <div class="container">

            <!-- HEADING BLOCK -->
            <div class="heading-block text-center margin-bottom-80">
                <h3>Fugiat Core Features</h3>
                <hr>
                <span class=" margin-top-20">The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </span> </div>
            <div class="row">

                <!-- LIST LEFT -->
                <div class="col-md-4">
                    <ul class="margin-top-50 text-right">
                        <li>
                            <div class="media">
                                <div class="media-body">
                                    <h4>well layered</h4>
                                    <p>Friendly neighbors there that's where we meet can you tell me how to get. </p>
                                </div>
                                <div class="media-right">
                                    <div class="icon"> <img src="images/list-icon-1.png" alt=""></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-body">
                                    <h4>user friendly</h4>
                                    <p>Friendly neighbors there that's where we meet can you tell me how to get. </p>
                                </div>
                                <div class="media-right">
                                    <div class="icon"> <img src="images/list-icon-2.png" alt=""></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-body">
                                    <h4>24/7 support</h4>
                                    <p>Friendly neighbors there that's where we meet can you tell me how to get.</p>
                                </div>
                                <div class="media-right">
                                    <div class="icon"> <img src="images/list-icon-3.png" alt=""></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- LIST IMAGE -->
                <div class="col-md-4 text-center no-padding"> <img class="img-responsive" src="images/iphone-2.png" alt=""> </div>

                <!-- LIST ICON RIGHT -->
                <div class="col-md-4">
                    <ul class="margin-top-50">
                        <li>
                            <div class="media">
                                <div class="media-left">
                                    <div class="icon"> <img src="images/list-icon-4.png" alt=""> </div>
                                </div>
                                <div class="media-body">
                                    <h4>elegent Design</h4>
                                    <p>Friendly neighbors there that's where we meet can you tell me how to get. </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-left">
                                    <div class="icon"> <img src="images/list-icon-5.png" alt=""> </div>
                                </div>
                                <div class="media-body">
                                    <h4>different layout</h4>
                                    <p>Friendly neighbors there that's where we meet can you tell me how to get. </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-left">
                                    <div class="icon"> <img src="images/list-icon-6.png" alt=""> </div>
                                </div>
                                <div class="media-body">
                                    <h4>unique elements</h4>
                                    <p>Friendly neighbors there that's where we meet can you tell me how to get. </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="education padding-top-100 padding-bottom-80">
        <div class="container">

            <!-- HEADING BLOCK -->
            <div class="heading-block text-center margin-bottom-80">
                <h3>Services What We Provide</h3>
                <hr>
                <span class=" margin-top-20">The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </span> </div>

            <!-- Services -->
            <div class="time-line">

                <!-- Right Services -->
                <ul class="row">
                    <li class="col-sm-6 pull-right padding-left-100 margin-bottom-30">
                        <h4>Web design</h4>
                        <p>Believe it or not its just me. Texas tea. Come and knock on our door. We've been waiting for you where are herhers and his. Three's company too.</p>
                    </li>
                </ul>
                <div class="clearfix"></div>

                <!-- Left Services -->
                <ul class="row second">
                    <li class="col-sm-6 pull-left text-right padding-right-100">
                        <h4>Web development</h4>
                        <p>Believe it or not its just me. Texas tea. Come and knock on our door. We've been waiting for you where are herhers and his. Three's company too.</p>
                    </li>
                </ul>
                <div class="clearfix"></div>

                <!-- Right Services -->
                <ul class="row tird">
                    <li class="col-sm-6 pull-right padding-left-100 margin-bottom-30">
                        <h4>Web analytics</h4>
                        <p>Believe it or not its just me. Texas tea. Come and knock on our door. We've been waiting for you where are herhers and his. Three's company too.</p>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->
    <section class="portfolio port-wrap pink-bg padding-top-80">
        <div class="container">
            <!-- HEADING BLOCK -->
            <div class="heading-block text-center margin-bottom-80">
                <h3 class="text-white no-margin">Featured Works</h3>
            </div>
        </div>

        <!-- PORTFOLIO ITEMS -->
        <div class="items row col-4">

            <!-- ITEM -->
            <article class="portfolio-item pf-web-design">
                <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/img-1.jpg"> <a href="images/portfolio/img-1.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
                    <div class="portfolio-overlay style-2">
                        <div class="detail-info">
                            <h3><a href="portfolio-single.html">Boulangerie product design</a></h3>
                            <span><a href="portfolio-single.html">Branding & Wed Design</a></span> </div>
                    </div>
                </div>
            </article>

            <!-- ITEM -->
            <article class="portfolio-item pf-photography pf-branding-design">
                <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/img-2.jpg"> <a href="images/portfolio/img-2.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
                    <div class="portfolio-overlay style-2">
                        <div class="detail-info">
                            <h3><a href="portfolio-single.html">Boulangerie product design</a></h3>
                            <span><a href="portfolio-single.html">Branding & Wed Design</a></span> </div>
                    </div>
                </div>
            </article>

            <!-- ITEM -->
            <article class="portfolio-item pf-web-design pf-branding-design">
                <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/img-3.jpg"> <a href="images/portfolio/img-3.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
                    <div class="portfolio-overlay style-2">
                        <div class="detail-info">
                            <h3><a href="portfolio-single.html">Boulangerie product design</a></h3>
                            <span><a href="portfolio-single.html">Branding & Wed Design</a></span> </div>
                    </div>
                </div>
            </article>

            <!-- ITEM -->
            <article class="portfolio-item pf-web-design pf-digital-art ">
                <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/img-4.jpg"> <a href="images/portfolio/img-4.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
                    <div class="portfolio-overlay style-2">
                        <div class="detail-info">
                            <h3><a href="portfolio-single.html">Boulangerie product design</a></h3>
                            <span><a href="portfolio-single.html">Branding & Wed Design</a></span> </div>
                    </div>
                </div>
            </article>

            <!-- ITEM -->
            <article class="portfolio-item pf-web-design pf-digital-art ">
                <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/img-5.jpg"> <a href="images/portfolio/img-5.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
                    <div class="portfolio-overlay style-2">
                        <div class="detail-info">
                            <h3><a href="portfolio-single.html">Boulangerie product design</a></h3>
                            <span><a href="portfolio-single.html">Branding & Wed Design</a></span> </div>
                    </div>
                </div>
            </article>

            <!-- ITEM -->
            <article class="portfolio-item pf-web-design pf-digital-art ">
                <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/img-6.jpg"> <a href="images/portfolio/img-6.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
                    <div class="portfolio-overlay style-2">
                        <div class="detail-info">
                            <h3><a href="portfolio-single.html">Boulangerie product design</a></h3>
                            <span><a href="portfolio-single.html">Branding & Wed Design</a></span> </div>
                    </div>
                </div>
            </article>

            <!-- ITEM -->
            <article class="portfolio-item pf-web-design pf-digital-art ">
                <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/img-7.jpg"> <a href="images/portfolio/img-7.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
                    <div class="portfolio-overlay style-2">
                        <div class="detail-info">
                            <h3><a href="portfolio-single.html">Boulangerie product design</a></h3>
                            <span><a href="portfolio-single.html">Branding & Wed Design</a></span> </div>
                    </div>
                </div>
            </article>

            <!-- ITEM -->
            <article class="portfolio-item pf-web-design pf-digital-art ">
                <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/img-8.jpg"> <a href="images/portfolio/img-8.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
                    <div class="portfolio-overlay style-2">
                        <div class="detail-info">
                            <h3><a href="portfolio-single.html">Boulangerie product design</a></h3>
                            <span><a href="portfolio-single.html">Branding & Wed Design</a></span> </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- PROMO -->
    <section class="promo text-center padding-bottom-100 padding-top-100" style="background:url(images/bg/promo-bg.jpg) no-repeat;">
        <div class="container">
            <h6>We have used latest Technology</h6>
            <h3>True Material Design For Your Business</h3>
            <a href="#." class="waves-effect waves-light btn btn-white margin-right-20">purchase now</a> <a href="#." class="waves-effect waves-light btn margin-left-20">purchase now</a> </div>
    </section>

    <!-- Wgy Choose -->
    <section class="why-choose padding-top-100 padding-bottom-100">
        <div class="container">
            <!-- HEADING BLOCK -->
            <div class="heading-block text-center margin-bottom-80">
                <h3>Why Choose US</h3>
                <hr>
                <span class=" margin-top-20">The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </span> </div>

            <!-- List  -->
            <div class="row">
                <div class="col-md-7">
                    <ul>

                        <!-- HEADING -->
                        <li>
                            <div class="media">
                                <div class="media-left">
                                    <div class="icon"> 1 </div>
                                </div>
                                <div class="media-body">
                                    <h4>unique elements</h4>
                                    <p>The Brady Bunch the Brady Bunch that's the way we all became the Brady Bunch. So get a witch's shawl on a broomstick you can crawl on. </p>
                                </div>
                            </div>
                        </li>

                        <!-- Experienced team -->
                        <li>
                            <div class="media">
                                <div class="media-left">
                                    <div class="icon"> 2 </div>
                                </div>
                                <div class="media-body">
                                    <h4>Experienced team</h4>
                                    <p>The Brady Bunch the Brady Bunch that's the way we all became the Brady Bunch. So get a witch's shawl on a broomstick you can crawl on. </p>
                                </div>
                            </div>
                        </li>

                        <!-- HEADING -->
                        <li>
                            <div class="media">
                                <div class="media-left">
                                    <div class="icon"> 3 </div>
                                </div>
                                <div class="media-body">
                                    <h4>great services</h4>
                                    <p>The Brady Bunch the Brady Bunch that's the way we all became the Brady Bunch. So get a witch's shawl on a broomstick you can crawl on. </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 text-bold"> <img class="img-responsive" src="images/why-choose-img.png" alt="" > </div>
            </div>
        </div>
    </section>

    <!-- PROMO -->
    <section class="promo pink-bg padding-bottom-60 padding-top-60">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="text-white text-uppercase no-margin">Do you want to   discuss wth us?</h3>
                </div>
                <div class="col-md-5 text-center"> <a href="#." class="waves-effect waves-light btn  btn-white margin-right-20">contact us</a> <a href="#." class="waves-effect btn btn-blue margin-left-20">purchase now</a> </div>
            </div>
        </div>
    </section>

    <!-- TEAM MEMBER -->
    <section class="testimonial padding-bottom-100 padding-top-100">
        <div class="container">

            <!-- Slider -->
            <div class="single-slides">

                <!-- Slider item -->
                <div class="item">
                    <div class="avatar"> <img src="images/avatar.jpg" alt="" > </div>
                    <div class="stars"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </div>
                    <p>Friendly neighbors there that's where we meet. Can you tell me how to get how to get to Sesame Street! Here's the story of a lovely lady who was bringing up three very lovely girls. Said Californ'y is the place you ought to be
                        So they loaded up the truck and moved to Beverly. Hills that is stars.</p>
                    <h6>Micheal Anderson</h6>
                </div>

                <!-- Slider item -->
                <div class="item">
                    <div class="avatar"> <img src="images/avatar.jpg" alt="" > </div>
                    <div class="stars"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </div>
                    <p>Friendly neighbors there that's where we meet. Can you tell me how to get how to get to Sesame Street! Here's the story of a lovely lady who was bringing up three very lovely girls. Said Californ'y is the place you ought to be
                        So they loaded up the truck and moved to Beverly. Hills that is stars.</p>
                    <h6>Micheal Anderson</h6>
                </div>

                <!-- Slider item -->
                <div class="item">
                    <div class="avatar"> <img src="images/avatar.jpg" alt="" > </div>
                    <div class="stars"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </div>
                    <p>Friendly neighbors there that's where we meet. Can you tell me how to get how to get to Sesame Street! Here's the story of a lovely lady who was bringing up three very lovely girls. Said Californ'y is the place you ought to be
                        So they loaded up the truck and moved to Beverly. Hills that is stars.</p>
                    <h6>Micheal Anderson</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- TAB SECTION -->
    <section class="light-gray-bg tabs-sect padding-bottom-100 padding-top-100">
        <div class="container">
            <div class="row">
                <div class="col-md-4"> <img class="img-responsive" src="images/iphone.png" alt="" > </div>
                <div class="col-md-8">

                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" role="tablist">
                        <li role="presentation" class="active"><a href="#branch" role="tab" data-toggle="tab"><i class="icon-globe"></i> Our Branches</a></li>
                        <li role="presentation"><a href="#project" role="tab" data-toggle="tab"><i class="icon-briefcase"></i> Latest Projects</a></li>
                        <li role="presentation"><a href="#news" role="tab" data-toggle="tab"><i class="icon-layers"></i> Latest news</a></li>
                        <li role="presentation"><a href="#contact" role="tab" data-toggle="tab"><i class="icon-map"></i> contact us</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!-- Branch -->
                        <div role="tabpanel" class="tab-pane fade in active" id="branch">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Just two good ol' boys Never meanin' no harm. Beats all you've ever saw been in trouble with the law since the day they was born. Well we're movin' on up</h6>
                                </div>
                                <div class="col-md-6">
                                    <p>Takin' a break from all your worries sure would help a lot. Well we're movin' on up to the east side. To a deluxe apartment in the sky. On the most sensational inspirational celebrational Muppetational what we call the Great.</p>
                                </div>
                            </div>
                        </div>

                        <!-- project -->
                        <div role="tabpanel" class="tab-pane fade" id="project">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Just two good ol' boys Never meanin' no harm. Beats all you've ever saw been in trouble with the law since the day they was born. Well we're movin' on up</h6>
                                </div>
                                <div class="col-md-6">
                                    <p>Takin' a break from all your worries sure would help a lot. Well we're movin' on up to the east side. To a deluxe apartment in the sky. On the most sensational inspirational celebrational Muppetational what we call the Great.</p>
                                </div>
                            </div>
                        </div>

                        <!-- news -->
                        <div role="tabpanel" class="tab-pane fade" id="news">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Just two good ol' boys Never meanin' no harm. Beats all you've ever saw been in trouble with the law since the day they was born. Well we're movin' on up</h6>
                                </div>
                                <div class="col-md-6">
                                    <p>Takin' a break from all your worries sure would help a lot. Well we're movin' on up to the east side. To a deluxe apartment in the sky. On the most sensational inspirational celebrational Muppetational what we call the Great.</p>
                                </div>
                            </div>
                        </div>

                        <!-- contact -->
                        <div role="tabpanel" class="tab-pane fade" id="contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Just two good ol' boys Never meanin' no harm. Beats all you've ever saw been in trouble with the law since the day they was born. Well we're movin' on up</h6>
                                </div>
                                <div class="col-md-6">
                                    <p>Takin' a break from all your worries sure would help a lot. Well we're movin' on up to the east side. To a deluxe apartment in the sky. On the most sensational inspirational celebrational Muppetational what we call the Great.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="blog padding-top-100 padding-bottom-100">
        <div class="container">

            <!-- HEADING BLOCK -->
            <div class="heading-block text-center margin-bottom-80">
                <h3>Latest From Our Blog</h3>
                <hr>
                <span class=" margin-top-20">The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </span> </div>

            <!-- Blog Row -->
            <div class="row">

                <!-- Blog Post -->
                <div class="col-md-4">
                    <div class="blog-post z-depth-1"> <img class="img-responsive" src="images/blog-img-1.jpg" alt="" > <span class="tags">BUSINESS</span> <a href="#." class="post-tittle">There's nothing can hold when
                            We hold you</a> <span class="font-italic font-12px margin-bottom-15 margin-top-15 color-primary-pink">By Admin  /  Sep 15, 2015</span>
                        <p>That this group would somehow form family that's the way we all became the Bunch.
                            Here he comes Here comes Speed.</p>
                        <a href="#." class="waves-effect waves-light btn btn-white">read more</a> </div>
                </div>
                <!-- Blog Post -->
                <div class="col-md-4">
                    <div class="blog-post z-depth-1"> <img class="img-responsive" src="images/blog-img-2.jpg" alt="" > <span class="tags">BUSINESS</span> <a href="#." class="post-tittle">There's nothing can hold when
                            We hold you</a> <span class="font-italic font-12px margin-bottom-15 margin-top-15 color-primary-pink">By Admin  /  Sep 15, 2015</span>
                        <p>That this group would somehow form family that's the way we all became the Bunch.
                            Here he comes Here comes Speed.</p>
                        <a href="#." class="waves-effect waves-light btn btn-white">read more</a> </div>
                </div>

                <!-- Blog Post -->
                <div class="col-md-4">
                    <div class="blog-post z-depth-1"> <img class="img-responsive" src="images/blog-img-3.jpg" alt="" > <span class="tags">BUSINESS</span> <a href="#." class="post-tittle">There's nothing can hold when
                            We hold you</a> <span class="font-italic font-12px margin-bottom-15 margin-top-15 color-primary-pink">By Admin  /  Sep 15, 2015</span>
                        <p>That this group would somehow form family that's the way we all became the Bunch.
                            Here he comes Here comes Speed.</p>
                        <a href="#." class="waves-effect waves-light btn btn-white">read more</a> </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Letter -->
    <div class="container">
        <section class="news-letter">
            <div class="row">
                <div class="col-md-6">
                    <h5>Subscribe to our newsletter</h5>
                    <p>You can unsubscribe anytime you want</p>
                </div>
                <div class="col-md-6">
                    <form>
                        <input type="email" class="z-depth-1" placeholder="Email address" required>
                        <button type="submit" class="btn waves-effect waves-light">subscribe</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- End Content -->
@endsection