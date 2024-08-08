@extends("components/app")
@section('title','Асортимент')
@section('content')
    <section class="range">
        <div class="name_slider">
            <h2>King's Kicks</h2>
            <div class="slider">
                <div class="left_arrow">
                    <img src="{{asset('res/range/left_arrow.svg')}}" alt="">
                </div>
                <div class="images">
                    <img src="{{asset('res/range/background_slider.jpg')}}" alt="">
                </div>
                <div class="right_arrow">
                    <img src="{{asset('res/range/right_arrow.svg')}}" alt="">
                </div>
            </div>
            <div class="underline">
                <img src="{{asset('res/range/underline.svg')}}" alt="">
            </div>
        </div>
        <div class="content">
            <div class="brand nike">
                <h3>Nike</h3>
                @include('components/slider/main', ['count'=>2], ['arrow'=>false])
                <div class="underline">
                    <img src="{{asset('res/range/underline2.svg')}}" alt="">
                </div>
            </div>
            <div class="brand nike">
                <h3>Adidas</h3>
                @include('components/slider/main')


            </div>
        </div>
    </section>
@endsection
