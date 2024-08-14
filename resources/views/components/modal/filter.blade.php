<section class="filter modal" id="filter">
    <div class="content">
        <div class="cross_name">
            <h2>Фільтр</h2>
            <div onclick="closeModal()"><img src="{{asset('res/filter/cross.svg')}}" alt=""></div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="brand">
                    <div class="name">
                        <h3>Брeнд</h3>
                        <img src="{{asset('res/filter/underline.svg')}}" alt="">
                    </div>
                    <div class="logo">
                        <div class="card">
                            <img class="logo_nike" src="{{asset('res/filter/logo_nike.svg')}}" alt="">
                            <p>Nike</p>
                        </div>
                        <div class="card">
                            <img class="nb_logo" src="{{asset('res/filter/nb_logo.svg')}}" alt="">
                            <p>New B...</p>
                        </div>
                        <div class="card">
                            <img class="asics_logo" src="{{asset('res/filter/asics_logo.svg')}}" alt="">
                            <p>Asics</p>
                        </div>
                        <div class="card">
                            <img class="vans_logo" src="{{asset('res/filter/vans_logo.svg')}}" alt="">
                            <p>Vans</p>
                        </div>
                        <div class="card">
                            <img class="salomon_logo" src="{{asset('res/filter/salomon_logo.svg')}}" alt="">
                            <p>Salomon</p>
                        </div>
                        <div class="card">
                            <img class="logo_adidas" src="{{asset('res/filter/logo_adidas.svg')}}" alt="">
                            <p>Adidas</p>
                        </div>

                    </div>
                    <div class="button">
                        <button>
                            <p>Показати більше</p>
                        </button>
                        <div class="an"></div>


                    </div>


                </div>
                <div class="size_price">
                    <div class="size">
                        <div class="name">
                            <h3>Розмір</h3>
                            <img src="{{asset('res/filter/underline.svg')}}" alt="">
                        </div>
                        <div class="sizes">
                            <div class="div">
                                <p>36</p>
                            </div>
                            <div class="div">
                                <p>37</p>
                            </div>
                            <div class="div">
                                <p>38</p>
                            </div>
                            <div class="div">
                                <p>39</p>
                            </div>
                            <div class="div">
                                <p>40</p>
                            </div>
                            <div class="div">
                                <p>41</p>
                            </div>
                            <div class="div">
                                <p>42</p>
                            </div>
                            <div class="div">
                                <p>43</p>
                            </div>
                            <div class="div">
                                <p>44</p>
                            </div>
                            <div class="div">
                                <p>45</p>
                            </div>
                            <div class="div">
                                <p>46</p>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <div class="name">
                            <h3>Ціна</h3>
                            <img src="{{asset('res/filter/underline.svg')}}" alt="">
                        </div>
                        <div class="slide">
                            <div class="from">
                                <div class="text">
                                    <p>Від</p>
                                    <p>4000₴</p>
                                </div>
                                <div class="img">
                                    <img class="line" src="{{asset('res/price/line.svg')}}" alt="">
                                    <img class="dot" src="{{asset('res/price/dot.svg')}}" alt="">
                                </div>
                            </div>
                            <div class="to">
                                <div class="text">
                                    <p>До</p>
                                    <p>8000₴</p>
                                </div>
                                <div class="img">
                                    <img class="line" src="{{asset('res/price/line.svg')}}" alt="">
                                    <img class="dot" src="{{asset('res/price/dot.svg')}}" alt="">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="season">
                    <div class="name">
                        <h3>Сезон</h3>
                        <img src="{{asset('res/filter/underline.svg')}}" alt="">
                    </div>
                    <div class="seasons">
                        <div class="card">
                            <div class="button_card">
                                <button>
                                    <p>Зима</p>
                                </button>
                                <div class="an"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="button_card">
                                <button>
                                    <p>Осінь</p>
                                </button>
                                <div class="an"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="button_card">
                                <button>
                                    <p>Весна</p>
                                </button>
                                <div class="an"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="button_card">
                                <button>
                                    <p>Літо</p>
                                </button>
                                <div class="an"></div>
                            </div>
                        </div>

                    </div>
                    <div class="button_search">
                        <button>
                            <p>Пошук</p>
                            <svg class="pc" width="29" height="27" viewBox="0 0 29 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.9521 2.72539C18.7957 2.38785 17.394 2.40437 17.1428 2.42758C15.9267 2.53991 14.495 2.58259 13.4507 3.28721C12.4863 3.93791 11.9428 5.02899 11.871 6.18358C11.7785 7.66928 11.9488 9.01638 12.2245 10.4828C12.4855 11.8708 14.1332 13.1727 15.3287 13.8158C16.3263 14.3526 17.4469 14.8987 18.549 15.1893C19.9167 15.55 21.2501 15.5994 22.6328 15.1717C23.7601 14.823 25.5189 14.2529 25.9467 13.0008C26.4935 11.4006 26.3977 9.67076 26.0816 7.98949C25.948 7.27939 25.8728 6.52943 25.5972 5.85932C25.281 5.09041 24.7611 4.57163 24.2473 3.9628C23.6155 3.21413 22.5882 2.64278 21.6451 2.40807C20.7912 2.19556 19.5396 2.08325 18.6475 2.25099" stroke="white" stroke-width="3" stroke-linecap="round"/>
                                <path d="M14.9696 14.8737C14.962 15.4131 14.5169 16.1372 14.2459 16.5836C13.7766 17.3566 13.1453 18.0561 12.4856 18.676C11.476 19.6247 10.2971 20.4238 9.22081 21.3014C8.56692 21.8346 7.95281 22.4114 7.32304 22.9715C6.31369 23.8693 5.13162 24.6184 3.87881 25.12" stroke="white" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </button>
                        <div class="an"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

