@extends('index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-9">
                <div class="info d-flex flex-column align-items-center text-center">
                    <img src="/public/assets/images/logo.png" class="card-img-top w-50" alt="...">
                    <h5><b>Наш девиз</b></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, cumque debitis earum est eveniet facilis harum hic ipsam magnam modi odio, perspiciatis possimus praesentium qui recusandae sapiente tempora veritatis, voluptas.</p>
                    <h5 class="mt-4"><b>Наши новинки</b></h5>
                    <div id="carouselExampleCaptions" class="carousel slide w-50" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/public/assets/images/craft.jpg" class="slide h-100 d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Магнолия</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/public/assets/images/rose.jpg" class="slide h-100 d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Роза</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/public/assets/images/kor.jpg" class="slide h-100 d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Ромашка</h5>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
