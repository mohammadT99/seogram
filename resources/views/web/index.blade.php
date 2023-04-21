@extends('layouts.web')
@section('title','خانه')
@section('content')
    <!-- start top-bar -->
    <div class="top-bar d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>
    </div>
    <!-- end top-bar -->

    <!-- start menu -->
    <div class="menu" id="menu">
        <div class="container">
            <div class="row">
                <x-navbar></x-navbar>
    <!-- start slider section -->
    <section class="slider">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="slider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators slider__indicators d-none">
                            <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#slider" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#slider" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner slider__inner">
                            <div class="carousel-item slider__item active">
                                <img src="./assets/images/slide1.jpg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption slider__caption d-none d-md-block">
                                    <h5 class="slider__caption__title">عنوان اول</h5>
                                    <p class="slider__caption__text">
                                        این عنوانی برای این اسلاید است.
                                    </p>
                                    <button class="btn slider__caption__btn">
                                        مشاهده بیشتر
                                    </button>
                                </div>
                            </div>
                            <div class="carousel-item slider__item">
                                <img src="./assets/images/slide2.jpg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption slider__caption d-none d-md-block">
                                    <h5 class="slider__caption__title">عنوان دوم</h5>
                                    <p class="slider__caption__text">
                                        این عنوانی برای این اسلاید است.
                                    </p>
                                    <button class="btn slider__caption__btn">
                                        مشاهده بیشتر
                                    </button>
                                </div>
                            </div>
                            <div class="carousel-item slider__item">
                                <img src="./assets/images/slide2.jpg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption slider__caption d-none d-md-block">
                                    <h5 class="slider__caption__title">عنوان سوم</h5>
                                    <p class="slider__caption__text">
                                        این عنوانی برای این اسلاید است.
                                    </p>
                                    <button class="btn slider__caption__btn">
                                        مشاهده بیشتر
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev slider__control-prev" type="button"
                            data-bs-target="#slider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon slider__control-prev__icon"
                                aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next slider__control-next" type="button"
                            data-bs-target="#slider" data-bs-slide="next">
                            <span class="carousel-control-next-icon slider__control-next__icon"
                                aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->

    <!-- start articles section -->
    <section class="articles">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="article">
                        <div class="article__img">
                            <img src="./assets/images/a1.jpg" alt="" />
                        </div>
                        <a href="#" class="article__category bg-dark">سبک زندگی</a>
                        <a href="#" class="article__content">
                            <div class="article__info">
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <span class="article__info__item__text">15 مهر 1399</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-eye"></i>
                                    </span>
                                    <span class="article__info__item__text">1563</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-heart"></i>
                                    </span>
                                    <span class="article__info__item__text">لایک؟</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="fas fa-share-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class="article__title">این یک عنوان طولانی است.</h3>
                        </a>
                        <div class="article__shadow"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="article">
                        <div class="article__img">
                            <img src="./assets/images/a3.jpg" alt="" />
                        </div>
                        <a href="#" class="article__category bg-green">سبک زندگی</a>
                        <a href="#" class="article__content">
                            <div class="article__info">
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <span class="article__info__item__text">15 مهر 1399</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-eye"></i>
                                    </span>
                                    <span class="article__info__item__text">1563</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-heart"></i>
                                    </span>
                                    <span class="article__info__item__text">لایک؟</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="fas fa-share-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class="article__title">این یک عنوان طولانی است.</h3>
                        </a>
                        <div class="article__shadow"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="article">
                        <div class="article__img">
                            <img src="./assets/images/a2.jpg" alt="" />
                        </div>
                        <a href="#" class="article__category">سبک زندگی</a>
                        <a href="#" class="article__content">
                            <div class="article__info">
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <span class="article__info__item__text">15 مهر 1399</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-eye"></i>
                                    </span>
                                    <span class="article__info__item__text">1563</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-heart"></i>
                                    </span>
                                    <span class="article__info__item__text">لایک؟</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="fas fa-share-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class="article__title">این یک عنوان طولانی است.</h3>
                        </a>
                        <div class="article__shadow"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="article">
                        <div class="article__img">
                            <img src="./assets/images/a1.jpg" alt="" />
                        </div>
                        <a href="#" class="article__category bg-orange">سبک زندگی</a>
                        <a href="#" class="article__content">
                            <div class="article__info">
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <span class="article__info__item__text">15 مهر 1399</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-eye"></i>
                                    </span>
                                    <span class="article__info__item__text">1563</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-heart"></i>
                                    </span>
                                    <span class="article__info__item__text">لایک؟</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="fas fa-share-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class="article__title">این یک عنوان طولانی است.</h3>
                        </a>
                        <div class="article__shadow"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="article">
                        <div class="article__img">
                            <img src="./assets/images/a3.jpg" alt="" />
                        </div>
                        <a href="#" class="article__category bg-pink">سبک زندگی</a>
                        <a href="#" class="article__content">
                            <div class="article__info">
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <span class="article__info__item__text">15 مهر 1399</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-eye"></i>
                                    </span>
                                    <span class="article__info__item__text">1563</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-heart"></i>
                                    </span>
                                    <span class="article__info__item__text">لایک؟</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="fas fa-share-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class="article__title">این یک عنوان طولانی است.</h3>
                        </a>
                        <div class="article__shadow"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="article">
                        <div class="article__img">
                            <img src="./assets/images/a2.jpg" alt="" />
                        </div>
                        <a href="#" class="article__category bg-blue">سبک زندگی</a>
                        <a href="#" class="article__content">
                            <div class="article__info">
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <span class="article__info__item__text">15 مهر 1399</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-eye"></i>
                                    </span>
                                    <span class="article__info__item__text">1563</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-heart"></i>
                                    </span>
                                    <span class="article__info__item__text">لایک؟</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="fas fa-share-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class="article__title">این یک عنوان طولانی است.</h3>
                        </a>
                        <div class="article__shadow"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end articles section -->

    <!-- start banner section -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-section__content">
                        <img src="./assets/images/slide.png" alt="" class="banner-section__img" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner section -->

    <!-- start news section -->
    <section class="news">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="article">
                        <div class="article__img">
                            <img src="./assets/images/a1.jpg" alt="" />
                        </div>
                        <a href="#" class="article__category bg-dark">سبک زندگی</a>
                        <a href="#" class="article__content">
                            <div class="article__info">
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <span class="article__info__item__text">15 مهر 1399</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-eye"></i>
                                    </span>
                                    <span class="article__info__item__text">1563</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-heart"></i>
                                    </span>
                                    <span class="article__info__item__text">لایک؟</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="fas fa-share-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class="article__title">این یک عنوان طولانی است.</h3>
                        </a>
                        <div class="article__shadow"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="article">
                        <div class="article__img">
                            <img src="./assets/images/a3.jpg" alt="" />
                        </div>
                        <a href="#" class="article__category bg-green">سبک زندگی</a>
                        <a href="#" class="article__content">
                            <div class="article__info">
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <span class="article__info__item__text">15 مهر 1399</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-eye"></i>
                                    </span>
                                    <span class="article__info__item__text">1563</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-heart"></i>
                                    </span>
                                    <span class="article__info__item__text">لایک؟</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="fas fa-share-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class="article__title">این یک عنوان طولانی است.</h3>
                        </a>
                        <div class="article__shadow"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="article">
                        <div class="article__img">
                            <img src="./assets/images/a2.jpg" alt="" />
                        </div>
                        <a href="#" class="article__category">سبک زندگی</a>
                        <a href="#" class="article__content">
                            <div class="article__info">
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <span class="article__info__item__text">15 مهر 1399</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-eye"></i>
                                    </span>
                                    <span class="article__info__item__text">1563</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-heart"></i>
                                    </span>
                                    <span class="article__info__item__text">لایک؟</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="fas fa-share-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class="article__title">این یک عنوان طولانی است.</h3>
                        </a>
                        <div class="article__shadow"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="article">
                        <div class="article__img">
                            <img src="./assets/images/a1.jpg" alt="" />
                        </div>
                        <a href="#" class="article__category bg-orange">سبک زندگی</a>
                        <a href="#" class="article__content">
                            <div class="article__info">
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <span class="article__info__item__text">15 مهر 1399</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-eye"></i>
                                    </span>
                                    <span class="article__info__item__text">1563</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-heart"></i>
                                    </span>
                                    <span class="article__info__item__text">لایک؟</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="fas fa-share-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class="article__title">این یک عنوان طولانی است.</h3>
                        </a>
                        <div class="article__shadow"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="article">
                        <div class="article__img">
                            <img src="./assets/images/a3.jpg" alt="" />
                        </div>
                        <a href="#" class="article__category bg-pink">سبک زندگی</a>
                        <a href="#" class="article__content">
                            <div class="article__info">
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <span class="article__info__item__text">15 مهر 1399</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-eye"></i>
                                    </span>
                                    <span class="article__info__item__text">1563</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-heart"></i>
                                    </span>
                                    <span class="article__info__item__text">لایک؟</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="fas fa-share-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class="article__title">این یک عنوان طولانی است.</h3>
                        </a>
                        <div class="article__shadow"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="article">
                        <div class="article__img">
                            <img src="./assets/images/a2.jpg" alt="" />
                        </div>
                        <a href="#" class="article__category bg-blue">سبک زندگی</a>
                        <a href="#" class="article__content">
                            <div class="article__info">
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <span class="article__info__item__text">15 مهر 1399</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-eye"></i>
                                    </span>
                                    <span class="article__info__item__text">1563</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="far fa-heart"></i>
                                    </span>
                                    <span class="article__info__item__text">لایک؟</span>
                                </div>
                                <div class="article__info__item">
                                    <span class="article__info__item__icon">
                                        <i class="fas fa-share-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class="article__title">این یک عنوان طولانی است.</h3>
                        </a>
                        <div class="article__shadow"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end news section -->

    <!-- start banner section -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-section__content">
                        <img src="./assets/images/slide1.jpg" alt="" class="banner-section__img" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner section -->

    <!-- start banner section -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-section__content">
                        <img src="./assets/images/slide2.jpg" alt="" class="banner-section__img" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner section -->
    <x-footer></x-footer>

 @endsection
   

