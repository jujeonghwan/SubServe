@extends('layouts.app')

@section('content')
<!-- Banner -->
<div id="banner-wrapper">
    <div id="banner-about" class="box container" style="background-image: url('/assets/images/background/the-red-pages-1292054_1920.jpg');">
        <div class="row">
            <div class="col-7 col-12-medium">
                <h2>About Us</h2>
                <h3>SubServe.life</h3>
                <p>Beauty Subscription Service Platform</p>
            </div>
            <div class="col-5 col-12-medium">
                <ul>
                    <li><a href="#" class="button large icon solid fa-arrow-circle-right">Ok let's go</a></li>
                    <li><a href="#" class="button alt large icon solid fa-question-circle">More info</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Features -->
<div id="features-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-4 col-12-medium">

                <!-- Box -->
                <section class="box feature">
                    <a href="#" class="image featured"><img src="/assets/images/about/jake-peterson-VJ4pn_PSBLo-unsplash-300x300.jpg" alt="" /></a>
                    <div class="inner">
                        <header>
                            <h2>Customers</h2>
                            <p>Get the "latest beauty trends" from experts.<!-- every month.--></p>
                        </header>
                        <p>SubServe finds experts for you.</p>
                    </div>
                </section>

            </div>
            <div class="col-4 col-12-medium">

                <!-- Box -->
                <section class="box feature">
                    <a href="#" class="image featured"><img src="/assets/images/about/hans-vivek-ntyA35WOb-k-unsplash-300x300.jpg" alt="" /></a>
                    <div class="inner">
                        <header>
                            <h2>Partners</h2>
                            <p>Spread Your Great Services and Products.</p>
                        </header>
                        <p>SubServe finds customers for you.</p>
                    </div>
                </section>

            </div>
            <div class="col-4 col-12-medium">

                <!-- Box -->
                <section class="box feature">
                    <a href="#" class="image featured"><img src="/assets/images/about/mateus-campos-felipe-ZKJQCWsKmPs-unsplash-300x300.jpg" alt="" /></a>
                    <div class="inner">
                        <header>
                            <h2>influencers</h2>
                            <p>Promote yourself widely.</p>
                        </header>
                        <p>SubServe connects you with your followers.</p>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>

<!-- Main -->
<div id="main-wrapper">
    <div class="container">
        <div class="row gtr-200">
            <div class="col-4 col-12-medium">

                <!-- Sidebar -->
                <div id="sidebar">
                    <section class="widget thumbnails">
                        <h3>Beauty Subscription Services and Videos</h3>
                        <div class="grid">
                            <div class="row gtr-50">
                                <div class="col-6"><a href="https://www.ipsy.com/" class="image fit"><img src="https://boxes.hellosubscription.com/wp-content/uploads/sites/2/2012/01/10171025/IPSY-Ignite-Lifestyle1-800x800.jpg" alt="" title="Ad infinitum" /></a></div>
                                <div class="col-6"><a href="https://beautybox.allure.com/" class="image fit"><img src="https://boxes.hellosubscription.com/wp-content/uploads/sites/2/2013/07/19195530/allurebeautybox.png" alt="" title="Dressed in Clarity" /></a></div>
                                <div class="col-12" class="image fit"><iframe src="https://www.youtube.com/embed/DgyD88xLcLE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                                <div class="col-12" class="image fit"><iframe src="https://www.youtube.com/embed/TmFrugAn2ds" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                            </div>
                        </div>
                        <a href="#" class="button icon fa-file-alt">More</a>
                    </section>
                </div>

            </div>
            <div class="col-8 col-12-medium imp-medium">

                <!-- Content -->
                <div id="content">
                    <section class="last">
                        <h2>The Team</h2>
                        <p>
                            <strong>SunPyo Park</strong><br />
                            Chief Executive Officer<br />
                            * Manages general company operations.<br />
                            * Maximize share prices, market shares and revenues.
                        </p>
                        <p>
                            <strong>Jeonghwan Ju</strong><br />
                            Front End Software Development CTO<br />
                            * Build highly reliable and scalable applications.<br />
                            * Plan, build, and test front end modules.
                        </p>
                        <p>
                            <strong>Ilshin Ji</strong><br />
                            Planning Director<br />
                            * Build service plan.<br />
                            * Promotion, Marketing and PR.
                        </p>
                    </section>
                </div>

            </div>
        </div>
    </div>
</div>
        
@endsection