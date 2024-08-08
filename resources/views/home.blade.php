@extends("components/app")
@section('title','Kings Kicks')
@section('content')
    <section class="sliders_content">
        <h3>Наші новинки та знижки!</h3>
        <div class="sliders">
            <div class="main_slider">
                <img class="arrow_left arrow_slider" src="{{asset('res/sliders_content/arrow_left.svg')}}" alt="">
                <div class="decorate">
                    <img class="second" src="{{asset('res/sliders_content/decorate_main_slider(1).svg')}}" alt="">

                    <img class="first" src="{{asset('res/sliders_content/decorate_main_slider.svg')}}" alt="">
                </div>
                <div class="images">
                    <img src="{{asset('res/sliders_content/slider_main.png')}}" alt="">
                </div>
                <img class="arrow_right arrow_slider" src="{{asset('res/sliders_content/arrow_right.svg')}}" alt="">
            </div>
            <div class="small_slider">
                <div class="decorate">
                    <img class="first" src="{{asset('res/sliders_content/small_slider_decorate.svg')}}" alt="">
                    <img class="second" src="{{asset('res/sliders_content/small_slider_decorate(1).svg')}}" alt="">
                    <img class="third" src="{{asset('res/sliders_content/small_slider_decorate(2).svg')}}" alt="">
                    <img class="fourth" src="{{asset('res/sliders_content/small_slider_decorate(3).svg')}}" alt="">
                </div>

                <div class="images">
                    <img src="{{asset('res/sliders_content/test_small_slider.jpg')}}" alt="">
                </div>
                <h4 class="name">Nike terrascape</h4>


            </div>
        </div>
        <div class="underline">
            <img src="{{asset('res/sliders_content/underline.svg')}}" alt="">
        </div>
    </section>

    <section class="range">
        <a class="name_section" href="{{route('range')}}">
            <h2>
                <img src="{{asset('res/range/range_arrow_left.svg')}}" alt="">
                <span>Весь асортимет</span>
                <img src="{{asset('res/range/range_arrow_right.svg')}}" alt="">
            </h2>
            <div class="underline">
                <img src="{{asset('res/range/underlinerange.svg')}}" alt="">
            </div>
        </a>
        @include('components/slider/main')
    </section>
    <section class="brand">
        <div class="column">
            <div class="decorate">
                <img src="{{asset('res/brand/brand_decorate(1).svg')}}" alt="" class="first">
                <img src="{{asset('res/brand/brand_decorate(2).svg')}}" alt="" class="second">
                <img src="{{asset('res/brand/brand_decorate(3).svg')}}" alt="" class="third">
                <img src="{{asset('res/brand/brand_decorate(4).svg')}}" alt="" class="fourth">
            </div>
            <div class="logo_brand">


                <div class="newbalance2002R">
                    <img class="pc" src="{{asset('res/brand/pc/newbalance2002R.svg')}}" alt="">
                    <img class="mobile" src="{{asset('res/brand/mobile/newbalance2002R.svg')}}" alt="">
                </div>
                <div class="asics_logo">
                    <img class="pc" src="{{asset('res/brand/pc/asics_logo.svg')}}" alt="">
                    <img class="mobile" src="{{asset('res/brand/mobile/asics_logo.svg')}}" alt="">
                </div>
                <div class="asics">
                    <img class="pc" src="{{asset('res/brand/pc/asics.svg')}}" alt="">
                    <img class="mobile" src="{{asset('res/brand/mobile/asics.svg')}}" alt="">
                </div>
                <div class="logo_adidas">
                    <img class="pc" src="{{asset('res/brand/pc/logo_adidas.svg')}}" alt="">
                    <img class="mobile" src="{{asset('res/brand/mobile/logo_adidas.svg')}}" alt="">
                </div>
                <div class="nb1906R">
                    <img class="pc" src="{{asset('res/brand/pc/nb1906R.svg')}}" alt="">
                    <img class="mobile" src="{{asset('res/brand/mobile/nb1906R.svg')}}" alt="">
                </div>
                <div class="superstar">
                    <img class="pc" src="{{asset('res/brand/pc/superstar.svg')}}" alt="">
                    <img class="mobile" src="{{asset('res/brand/mobile/superstar.svg')}}" alt="">
                </div>
                <div class="nike">
                    <img class="pc" src="{{asset('res/brand/pc/nike.svg')}}" alt="">
                    <img class="mobile" src="{{asset('res/brand/mobile/nike.svg')}}" alt="">
                </div>
                <div class="nb_logo">
                    <img class="pc" src="{{asset('res/brand/pc/nb_logo.svg')}}" alt="">
                    <img class="mobile" src="{{asset('res/brand/mobile/nb_logo.svg')}}" alt="">
                </div>
                <div class="logo_nike">
                    <img class="pc" src="{{asset('res/brand/pc/logo_nike.svg')}}" alt="">
                    <img class="mobile" src="{{asset('res/brand/mobile/logo_nike.svg')}}" alt="">
                </div>
            </div>
            <div class="text">
                <div class="list">
                    <a class="group_brand" href="">
                        <p>Nike</p>
                        <p>Salomon</p>
                    </a>
                    <a href="" class="group_brand">
                        <p>New balance</p>

                    </a>
                    <a href="" class="group_brand">
                        <p>Maison Yasuhiro</p>

                    </a>
                    <a href="" class="group_brand">
                        <p>DC</p>
                        <p>Converse</p>

                    </a>
                    <a href="" class="group_brand">
                        <p>Adidas</p>
                        <p>Asics</p>

                    </a>
                    <a href="" class="group_brand">
                        <p>Balenciaga</p>


                    </a>
                    <a href="" class="group_brand">
                        <p>Bape</p>
                        <p>Vans</p>


                    </a>

                </div>
            </div>
        </div>

        <div class="underline">
            <img src="{{asset('res/brand/brand_underline.png')}}" alt="">
        </div>
    </section>
    <section class="description">
        <h2>King`s Kicks</h2>
        <h2>Shop</h2>
        <div class="paragraph">
            <p>Ласкаво просимо до нашого унікального магазину брендових кросівок, де стиль зустрічається з мистецтвом!
                Наш
                магазин вирізняється не тільки широким асортиментом найновіших і наймодніших моделей кросівок від
                провідних
                світових брендів, а й своєю незвичайною концепцією оформлення.</p>
            <p>Ми пропонуємо тільки найкраще: від класичних моделей до останніх новинок, наші кросівки відповідають
                найвищим
                стандартам якості та стилю. У нас ви знайдете моделі від таких відомих брендів, як Nike, Adidas,
                Puma, Asics
                та багатьох інших. Незалежно від вашого смаку чи способу життя, у нас є ідеальні кросівки для
                кожного.</p>
        </div>
    </section>
@endsection
