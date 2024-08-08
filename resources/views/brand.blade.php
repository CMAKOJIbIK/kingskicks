@extends("components/app")
@section('title','brand')
@section('brand')
    <section class="brand">
        <div class="content">
            <div class="name">
                <h2>Nike</h2>
                <img src="{{asset('res/brand_content/underline.svg')}}" alt="">
            </div>
            <div class="summer prod_cards">
                <h3>Літо</h3>

                <div class="cards">
                    <div class="arrow">
                        <div class="arrow_left">
                            <img src="{{asset('res/range/left_arrow.svg')}}" alt="">
                        </div>
                        <div class="arrow_right">
                            <img src="{{asset('res/range/right_arrow.svg')}}" alt="">
                        </div>
                    </div>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike SB Dunk Parra</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>

                </div>
                <div class="cards">

                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike SB Dunk Parra</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>

                </div>
            </div>
            <div class="autumn prod_cards">
                <h3>Весна/Осінь</h3>

                <div class="cards">
                    <div class="arrow">
                        <div class="arrow_left">
                            <img src="{{asset('res/range/left_arrow.svg')}}" alt="">
                        </div>
                        <div class="arrow_right">
                            <img src="{{asset('res/range/right_arrow.svg')}}" alt="">
                        </div>
                    </div>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike SB Dunk Parra</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>

                </div>
                <div class="cards">

                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike SB Dunk Parra</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>
                    <a class="card" href="{{route('products')}}">
                        <div class="image">
                            <img src="{{asset('res/range/test_shoe1.jpg')}}" alt="">
                            <div class="price">
                                <p>4000₴</p>
                            </div>
                        </div>
                        <p class="name">Nike Dunk SB</p>
                    </a>

                </div>
            </div>
            <div class="winter prod_cards"></div>
        </div>
    </section>
@endsection
