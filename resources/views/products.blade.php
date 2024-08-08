@extends("components/app")
@section('title','products')
@section('content')
    <section class="products">
        <div class="content">
            <div class="left">
                <div class="images">
                    <div>
                        <img src="{{asset('res/products/test14.jpg')}}" alt="">
                        <img src="{{asset('res/products/test14.jpg')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('res/products/test14.jpg')}}" alt="">
                        <img src="{{asset('res/products/test14.jpg')}}" alt="">
                    </div>

                </div>
                <div class="button">
                    <button>
                        <p>Більше фото</p>
                    </button>
                    <div class="an"></div>

                </div>
            </div>

            <div class="right">
                <h3>{{$product->name}}</h3>
                <div class="price"><span>{{$product->price}}₴</span></div>
                <div class="colors">
                    <h4>Кольори</h4>
                    <div class="images">

                            @foreach($colors as $item)
                            <img src="{{asset($item)}}" alt="">
                            @endforeach


                    </div>
                </div>
                <div class="sizes">
                    <h4>Розміри</h4>
                    <div class="list">
                        <div class="size"><p>36</p></div>
                        <div class="size"><p>37</p></div>
                        <div class="size"><p>38</p></div>
                        <div class="size"><p>39</p></div>
                        <div class="size"><p>40</p></div>
                        <div class="size"><p>41</p></div>
                        <div class="size"><p>42</p></div>
                        <div class="size"><p>43</p></div>
                        <div class="size"><p>44</p></div>
                        <div class="size"><p>45</p></div>
                        <div class="size"><p>46</p></div>
                    </div>
                </div>
                <div class="material">
                    <h4>Матеріали</h4>

                    <p>Верх:<span>{{$material[$product->verh]}}</span></p>
                    <p>Підошва:<span>{{$material[$product->pidoshva]}}</span></p>
                    <p>Підкладка:<span>{{$material[$product->pidkladka]}}</span></p>
                </div>
                <div class="product_description">
                    <h4>Опис</h4>
                    <p>Ці знакові кросівки adidas Superstar випереджали свій час, коли вперше з'явилися на вулицях у 70-х роках. Тепер вони повертаються, щоб показати сучасній культурі кросівок, як це робиться. Натхненні спортивним костюмом adidas, який дозволяв швидко змінювати одяг, вони мають нашивку на язичку як відгук на 90-ті роки. Гладкий верх з шкіри, носок у формі мушлі та гумова підошва все ще забезпечують спортивний стиль і щоденний комфорт. Протягом понад 50 років Superstar були вибором легенд як на кортах, так і на вулицях. Крокуйте в історію.</p>
                </div>
                <div class="button"></div>
            </div>
        </div>
    </section>
@endsection
