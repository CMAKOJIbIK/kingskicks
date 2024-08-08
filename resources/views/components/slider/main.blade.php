<div class="slider_wrapper">
    <div class="slider">
        @for($i=0; $i<($count??20); $i++)
        <a class="card" href="{{route('products',['id'=>1])}}">
            <div class="img">
                <img src="{{asset('res/range/test1.jpg')}}" alt="">
                <div class="price"><p>4000₴</p></div>
            </div>
            <p>Nike Air Max TN Terrascape</p>
        </a>
        @endfor
            <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;">Previous</button>

    </div>
    @if($arrow??true)
{{--    <div class="arrow_wrapper">--}}
{{--        <div class="arrow_left arrow"><img src="{{asset("res/range/left_arrow.svg")}}" alt=""></div>--}}
{{--        <div class="arrow_right arrow"><img src="{{asset('res/range/right_arrow.svg')}}" alt=""></div>--}}
{{--    </div>--}}
    @endif
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slider').slick({
            // Пример реальных настроек
            arrows: true,
            prevArrow: '<div class="arrow_left arrow"><img src="{{asset("res/range/left_arrow.svg")}}" alt=""></div>',
            nextArrow: '<div class="arrow_right arrow"><img src="{{asset('res/range/right_arrow.svg')}}" alt=""></div>',
            variableWidth: true,
            infinite: true,
            // autoplay: true,
            // autoplaySpeed: 5000,
            // responsive: [
            //     {
            //         breakpoint: 1800,
            //         settings: {
            //             slidesToShow: 4,
            //             slidesToScroll: 1,
            //             infinite: true,
            //
            //         }
            //     },
            //     {
            //         breakpoint: 1630,
            //         settings: {
            //             slidesToShow: 3.5,
            //             slidesToScroll: 2
            //         }
            //     },
            //     {
            //         breakpoint: 1440,
            //         settings: {
            //
            //         }
            //     },
            //     {
            //         breakpoint: 1240,
            //         settings: {
            //             slidesToShow: 3,
            //             slidesToScroll: 1
            //         }
            //     }
            //
            // ]
        });
    });
</script>
