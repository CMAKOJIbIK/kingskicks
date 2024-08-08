<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@extends("components.appnohead")
@section('title','profile')
@section('profile')
    <section class="profile">
        <div class="content">
            <div class="cross_name">
                <div class="name">
                    <h2>Профіль</h2>
                    <img src="{{asset('res/profile/underline.svg')}}" alt="">
                </div>

                <a href="{{route('home')}}"><img class="cross" src="{{asset('res/filter/cross.svg')}}" alt=""></a>
            </div>
            <div class="columns">
                <div class="left">
                    <h2>Створіть шаблон відправки товару</h2>
                    <div class="cards">
                        <label class="card">
                            <input type="text" placeholder="Прізвище">
                            <div class="an"></div>
                        </label>
                        <label class="card">
                            <input type="text" placeholder="Ім’я">

                            <div class="an"></div>
                        </label>
                        <label class="card">
                            <input type="text" placeholder="По батькові">

                            <div class="an"></div>
                        </label>
                        <label class="card">
                            <input type="text" placeholder="Поштовий індекс">
                            <div class="an"></div>
                        </label>
                        <label class="card">
                            <input type="text" placeholder="(+380)__ __ ____">
                            <div class="an"></div>
                        </label>
                    </div>
                </div>
                <div class="right">
                    <h2>Історія покупок</h2>
                    <div class="cards">
                        <div class="card">
                            <div class="text">
                                <p>Adidas superstar red</p>
                            </div>

                            <div class="an"></div>
                        </div>
                        <div class="card">
                            <div class="text">
                                <p>Nike air force 1</p>
                            </div>

                            <div class="an"></div>
                        </div>
                    </div>
                </div>
                <div class="decorate">
                    <img class="decorate1" src="{{asset('res/profile/decorate1.svg')}}" alt="">
                    <img class="decorate2" src="{{asset('res/profile/decorate2.svg')}}" alt="">
                    <img class="decorate3" src="{{asset('res/profile/decorate3.svg')}}" alt="">
                    <img class="decorate4" src="{{asset('res/profile/decorate4.svg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
</body>
</html>
