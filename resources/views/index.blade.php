@extends("layout.client")
@section("content")
    <!-- hero area -->
    <section class="hero-section hero" data-background=""
             style="background-image: url({{asset("images/hero-area/banner-bg.png")}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center zindex-1">
                    <h1 class="mb-3">DL DEVS Team - Giải pháp công nghệ, giáo dục 4.0</h1>
                    <p class="mb-4">Đào tạo công nghệ chất lượng cao, phát triển sản phẩm hoàn hảo, tính năng hiện đại, phù hợp với xu hướng thời đại 4.0</p>
                    <a href="#" class="btn btn-secondary btn-lg">Khám phá ngay</a>
                    <!-- banner image -->
                    <img class="img-fluid w-100 banner-image" src="{{asset("images/hero-area/banner-img.png")}}"
                         alt="banner-img">
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <div id="scene">
            <img class="img-fluid hero-bg-1 up-down-animation" src="{{asset("images/background-shape/feature-bg-2.png")}}" alt="">
            <img class="img-fluid hero-bg-2 left-right-animation" src="{{asset("images/background-shape/seo-ball-1.png")}}" alt="">
            <img class="img-fluid hero-bg-3 left-right-animation" src="{{asset("images/background-shape/seo-half-cycle.png")}}"
                 alt="">
            <img class="img-fluid hero-bg-4 up-down-animation" src="{{asset("images/background-shape/green-dot.png")}}" alt="">
            <img class="img-fluid hero-bg-5 left-right-animation" src="{{asset("images/background-shape/blue-half-cycle.png")}}"
                 alt="">
            <img class="img-fluid hero-bg-6 up-down-animation" src="{{asset("images/background-shape/seo-ball-1.png")}}" alt="">
            <img class="img-fluid hero-bg-7 left-right-animation" src="{{asset("images/background-shape/yellow-triangle.png")}}"
                 alt="">
            <img class="img-fluid hero-bg-8 up-down-animation" src="{{asset("images/background-shape/service-half-cycle.png")}}"
                 alt="">
            <img class="img-fluid hero-bg-9 up-down-animation" src="{{asset("images/background-shape/team-bg-triangle.png")}}"
                 alt="">
        </div>
    </section>
    <!-- /hero-area -->
    <!-- feature -->
    <section class="section feature mb-0" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Dịch vụ của chúng tôi</h2>
{{--                    <p class="mb-100">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu--}}
{{--                        fugiat nulla pariatur.<br>Excepteur sint occaecat cupidatat non proident</p>--}}
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-ruler-pencil feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Thiết kế website</h4>
                            <p>Cung ứng những mẫu website đẹp và hiện đại theo yêu cầu.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layout-cta-left feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Giảng dạy công nghệ</h4>
                            <p>Giảng dạy công nghệ lập trình với kiến thức mới nhất và hiện đại nhất.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-split-v-alt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Phát triển sản phẩm</h4>
                            <p>Phát triển sản phẩm lập trình theo yêu cầu một cách nhanh chóng và hoàn chỉnh.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layers-alt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Các dịch vụ khác</h4>
                            <p>Liên hệ CSKH để biết thêm chi tiết các dịch vụ của DL-DEVS TEAM.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="feature-bg-1 up-down-animation" src="{{asset("images/background-shape/feature-bg-1.png")}}" alt="bg-shape">
        <img class="feature-bg-2 left-right-animation" src="{{asset("images/background-shape/feature-bg-2.png")}}" alt="bg-shape">
    </section>
    <!-- /feature -->
    <!-- marketing -->
    <section class="section-lg seo">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="seo-image">
                        <img class="img-fluid" src="{{asset("images/marketing/marketing.png")}}" alt="form-img">
                    </div>
                </div>
                <div class="col-md-5">
                    <h2 class="section-title">Công nghệ giảng dạy chất lượng cao, cùng hệ thống lưu trữ tốt.</h2>
                    <p>Far far away, behind the word mountains, far
                        from the countries Vokalia and Consonantia.<br>
                        There live the blind texts. Separated they
                        live in Bookmarksgrove right at the coast of
                        the Semantics, a large language ocean.
                    </p>
                </div>
            </div>
        </div>
        <!-- background image -->
        <img class="img-fluid seo-bg" src="{{asset("images/backgrounds/seo-bg.png")}}" alt="seo-bg">
        <!-- background-shape -->
        <img class="seo-bg-shape-1 left-right-animation" src="{{asset("images/background-shape/seo-ball-1.png")}}" alt="bg-shape">
        <img class="seo-bg-shape-2 up-down-animation" src="{{asset("images/background-shape/seo-half-cycle.png")}}" alt="bg-shape">
        <img class="seo-bg-shape-3 left-right-animation" src="{{asset("images/background-shape/seo-ball-2.png")}}" alt="bg-shape">
    </section>
    <!-- /marketing -->
    <!-- service -->
    <section class="section-lg service">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5 order-2 order-md-1">
                    <h2 class="section-title">Phát triển web và ứng dụng toàn diện</h2>
                    <p class="mb-4">Far far away, behind the word mountains,
                        far from the countries Vokalia and Consonantia,
                        there live the blind texts. Separated they
                        live in Bookmarksgrove right at the coast of the
                        Semantics, a large language ocean.</p>
                    <ul class="pl-0 service-list">
                        <li><i class="ti-layout-tab-window text-purple"></i>Responsive on any device</li>
                        <li><i class="ti-layout-placeholder text-purple"></i>Very easy to customize</li>
                        <li><i class="ti-support text-purple"></i>Effective support</li>
                    </ul>
                </div>
                <div class="col-md-7 order-1 order-md-2">
                    <img class="img-fluid layer-3" src="{{asset("images/service/service.png")}}" alt="service">
                </div>
            </div>
        </div>
        <!-- background image -->
        <img class="img-fluid service-bg" src="{{asset("images/backgrounds/service-bg.png")}}" alt="service-bg">
        <!-- background shapes -->
        <img class="service-bg-shape-1 up-down-animation" src="{{asset("images/background-shape/service-half-cycle.png")}}" alt="background-shape">
        <img class="service-bg-shape-2 left-right-animation" src="{{asset("images/background-shape/feature-bg-2.png")}}" alt="background-shape">
    </section>
    <!-- /service -->
    <!-- team -->
    <section class="section-lg team" id="team">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Đội ngũ của chúng tôi</h2>
{{--                    <p class="mb-100">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu<br>--}}
{{--                        fugiat nulla pariatur. Excepteur sint occaecat </p>--}}
                </div>
            </div>
            <div class="col-10 mx-auto">
                <div class="team-slider">
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="{{asset("images/team/team-1.jpg")}}" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Truòng Giang</h4>
                                <h6 class="text-color">Designer, Teacher</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. S eparated they</p>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="{{asset("images/team/team-2.jpg")}}" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Quang Linh (Adonis)</h4>
                                <h6 class="text-color">Leader,Founder,CEO</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. S eparated they</p>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="{{asset("images/team/team-3.jpg")}}" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Thanh Thuý</h4>
                                <h6 class="text-color">Programmer,Teacher</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                            the blind texts. S eparated they</p>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="{{asset("images/team/team-1.jpg")}}" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Erik Ligas</h4>
                                <h6 class="text-color">Programmer</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                            the blind texts. S eparated they</p>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="{{asset("images/team/team-2.jpg")}}" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>John Doe</h4>
                                <h6 class="text-color">web developer</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. S eparated they</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- backgound image -->
        <img src="{{asset("images/backgrounds/team-bg.png")}}" alt="team-bg" class="img-fluid team-bg">
        <!-- background shapes -->
        <img class="team-bg-shape-1 up-down-animation" src="{{asset("images/background-shape/seo-ball-1.png")}}" alt="background-shape">
        <img class="team-bg-shape-2 left-right-animation" src="{{asset("images/background-shape/seo-ball-1.png")}}" alt="background-shape">
        <img class="team-bg-shape-3 left-right-animation" src="{{asset("images/background-shape/team-bg-triangle.png")}}" alt="background-shape">
        <img class="team-bg-shape-4 up-down-animation img-fluid" src="{{asset("images/background-shape/team-bg-dots.png")}}" alt="background-shape">
    </section>
    <!-- /team -->
    <!-- pricing -->
    <section class="section-lg pb-0 pricing" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Các gói</h2>
                    <p class="mb-50">Phù hợp với nhu cầu của bạn với mức giá thành cực tốt, đảm bảo chất lượng hiệu quả.</p>
                </div>
                <div class="col-lg-10 mx-auto">
                    <div class="row justify-content-center">
                        <!-- pricing table -->
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                            <div class="rounded text-center pricing-table table-1">
                                <h3>Dev,Design Education</h3>
                                <h1><h4>Chỉ từ</h4><h3>1.400.000đ</h3></h1>
                                <p>Far far away, behind the
                                    wordmountains, far from the
                                    countries Vokalia and
                                </p>
                                <a href="#" class="btn pricing-btn px-2">Tìm hiểu</a>
                            </div>
                        </div>
                        <!-- pricing table -->
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                            <div class="rounded text-center pricing-table table-2">
                                <h3>Design Graphics</h3>
                                <h1><h4>Chỉ từ</h4><h3>2.400.000đ</h3></h1>
                                <p>Far far away, behind the
                                    wordmountains, far from the
                                    countries Vokalia and
                                </p>
                                <a href="#" class="btn pricing-btn px-2">Tìm hiểu</a>
                            </div>
                        </div>
                        <!-- pricing table -->
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                            <div class="rounded text-center pricing-table table-3">
                                <h3>Web,App building</h3>
                                <h1><h4>Chỉ từ</h4><h3>4.400.000đ</h3></h1>
                                <p>Far far away, behind the
                                    wordmountains, far from the
                                    countries Vokalia and
                                </p>
                                <a href="#" class="btn pricing-btn px-2">Tìm hiểu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img class="pricing-bg-shape-1 up-down-animation" src="{{asset("images/background-shape/seo-ball-1.png")}}" alt="background-shape">
        <img class="pricing-bg-shape-2 up-down-animation" src="{{asset("images/background-shape/seo-half-cycle.png")}}" alt="background-shape">
        <img class="pricing-bg-shape-3 left-right-animation" src="{{asset("images/background-shape/team-bg-triangle.png")}}" alt="background-shape">
    </section>
    <!-- /pricing -->
    <!-- client logo slider -->
    <section class="section">
        <div class="container">
            <div class="client-logo-slider align-self-center">
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset("images/clients-logo/client-logo-1.png")}}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset("images/clients-logo/client-logo-2.png")}}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset("images/clients-logo/client-logo-3.png")}}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset("images/clients-logo/client-logo-4.png")}}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset("images/clients-logo/client-logo-5.png")}}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset("images/clients-logo/client-logo-1.png")}}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset("images/clients-logo/client-logo-2.png")}}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset("images/clients-logo/client-logo-3.png")}}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset("images/clients-logo/client-logo-4.png")}}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset("images/clients-logo/client-logo-5.png")}}" alt="client-logo"></a>
            </div>
        </div>
    </section>
    <!-- /client logo slider -->
    <!-- newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Theo dõi chúng tôi </h2>
                    <p class="mb-5">Để cập nhật tin tức mới nhất về thông tin khoá học, dịch vụ.</p>
                </div>
                <div class="col-lg-8 col-sm-10 col-12 mx-auto">
                    <form action="#">
                        <div class="input-wrapper position-relative">
                            <input type="email" class="newsletter-form" id="newsletter" placeholder="Email của bạn">
                            <button type="submit" value="send" class="btn newsletter-btn">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img class="newsletter-bg-shape left-right-animation" src="{{asset("images/background-shape/seo-ball-2.png")}}" alt="background-shape">
    </section>
    <!-- /newsletter -->
@endsection
