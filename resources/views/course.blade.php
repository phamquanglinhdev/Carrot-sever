@extends("layout.client")
@section("content")
    <!-- service -->
    <section class="section-lg service-bg-image position-relative"
             style="background-image: url(images/backgrounds/service-page.png);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-title">Các khóa học đang có tại DL-DEVS</h2>
                    {{--                    <p class="mb-100">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu--}}
                    {{--                        fugiat nulla pariatur.<br>Excepteur sint occaecat cupidatat non proident</p>--}}
                </div>
                <!-- service item -->
                @if(isset($courses))
                    @foreach($courses as $course)
                        @if($course->status == 1)
                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="rounded bg-white p-1 shadow-primary">
                                    <img
                                        src="{{$course->thumbnail}}"
                                        class="w-100 rounded">
                                    <h4 class="text-center mt-2">{{$course->name}}</h4>
                                    <div class="text-center h5 text-success">{{$course->price!=0 ? number_format($course->price)." đ":"Liên hệ"}} </div>
                                    <div class="text-center">Số buổi : {{$course->lesson!=0 ?$course->lesson:"Liên hệ"}}</div>
                                    <div class="text-center">Số giờ / buổi : {{$course->hours!=0 ?$course->hours:"Liên hệ"}}</div>
                                    <a href="#" class="w-100 btn btn-secondary text-white">
                                        Xem chi tiết
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            <!-- service item -->
                {{--                translate-y-150--}}
            </div>
        </div>
        {{--        <!-- background shapes -->--}}
        {{--        <img class="service-bg-1 up-down-animation" src="images/background-shape/feature-bg-2.png" alt="">--}}
        {{--        <img class="service-bg-2 left-right-animation" src="images/background-shape/seo-half-cycle.png" alt="">--}}
        {{--        <img class="service-bg-3 up-down-animation" src="images/background-shape/team-bg-triangle.png" alt="">--}}
        {{--        <img class="service-bg-4 left-right-animation" src="images/background-shape/green-dot.png" alt="">--}}
        {{--        <img class="service-bg-5 up-down-animation" src="images/background-shape/team-bg-triangle.png" alt="">--}}
    </section>
    <!-- /service -->
@endsection
