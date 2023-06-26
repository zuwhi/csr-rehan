@extends('layouts.general')
@section('content')
<section class=" pt-2 pb-2">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-md-8 mb-3">
                <div class="home-contain h-100">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('user/images/slider (1).jpg') }}" class="d-block w-100 h-100" alt="..." style="filter: brightness(70%)">
                                <div class="corousel-item__title">
                                    <h3>Penyerahan Program CSR Oleh Gubernur Jateng di Karimun Jawa - Jepara</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('user/images/slider (1).jpg') }}" class="d-block w-100 h-100" alt="..." style="filter: brightness(70%)">
                                <div class="corousel-item__title">
                                    <h3>Penyerahan Program CSR Oleh Gubernur Jateng di Karimun Jawa - Jepara</h3>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
        
                        <div id="calendar"></div>
                       
            </div>
        </div>
    </div>
</section>

<section class="pb-4">
    <div class="container-fluid-lg mitra py-55">
        <div class="title">
            <h2>MITRA CSR</h2>
            <span class="title-leaf">
            </span>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-6_1 product-wrapper">
                    <div>
                        <div class="wow fadeInUp">
                            <div class="product-header">
                                <div class="product-image">
                                    <img src="{{ asset('user/images/mitra-1.png') }}" class="img-fluid blur-up lazyload" style="height :150px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="wow fadeInUp">
                            <div class="product-header">
                                <div class="product-image">
                                    <img src="{{ asset('user/images/mitra-1.png') }}" class="img-fluid blur-up lazyload" style="height :150px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="wow fadeInUp">
                            <div class="product-header">
                                <div class="product-image">
                                    <img src="{{ asset('user/images/mitra-1.png') }}" class="img-fluid blur-up lazyload" style="height :150px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="wow fadeInUp">
                            <div class="product-header">
                                <div class="product-image">
                                    <img src="{{ asset('user/images/mitra-1.png') }}" class="img-fluid blur-up lazyload" style="height :150px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="wow fadeInUp">
                            <div class="product-header">
                                <div class="product-image">
                                    <img src="{{ asset('user/images/mitra-1.png') }}" class="img-fluid blur-up lazyload" style="height :150px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="wow fadeInUp">
                            <div class="product-header">
                                <div class="product-image">
                                    <img src="{{ asset('user/images/mitra-1.png') }}" class="img-fluid blur-up lazyload" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-2">
    <div class="container-fluid-lg">
        <div class="row row-deck">
            <div class="col-md-3 mb-3">
                <div class="card card-custome">
                    <div class="card-body">
                        <div class="title">
                            <h2>Berita CSR</h2>
                            <span class="title-leaf">
                            </span>
                        </div>
                        <div class="card-content mb-4">
                            <a href="">
                                <img src="{{ asset('user/images/slider (1).jpg') }}" alt="" width="100%" height="200">
                                <div class="card-content__desc">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore, ex a.
                                    Quas et delectus culpa quo alias quibusda.
                                </div>
                                
                            </a>
                        </div>
                        <div class="card-content mb-4">
                            <a href="">
                                <img src="{{ asset('user/images/slider (1).jpg') }}" alt="" width="100%" height="200">
                                <div class="card-content__desc">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore, ex a.
                                    Quas et delectus culpa quo alias quibusda.
                                </div>
                                
                            </a>
                        </div>
                    </div>
                    <div class="card-footer card-footer__custome">
                        <a href="" class="more-news">Lihat berita lebih lanjut ... >>></a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 mb-3">
                <div class="card card-custome">
                    <div class="card-body">
                        <div class="title">
                            <h2>Kegiatan CSR</h2>
                            <span class="title-leaf">
                            </span>
                        </div>
                        <div class="row">
                        
                            <div class="col-12 mb-3">
                                <div class="slider-7_1 shop-box no-arrow product-wrapper">
                                    <div id="ket1">
                                        <div class="shop-category-box">
                                            <a href="shop-left-sidebar.html">
                                                <div class="shop-category-image">
                                                    <img src="{{ asset('user/images/icon/icon pendidikan.png') }}" class="blur-up lazyload" alt="">
                                                </div>
                                                <div class="category-box-name">
                                                    <h6>Pendidikan</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="ket1">
                                        <div class="shop-category-box">
                                            <a href="shop-left-sidebar.html">
                                                <div class="shop-category-image">
                                                    <img src="{{ asset('user/images/icon/icon Kesehatan.png') }}" class="blur-up lazyload" alt="">
                                                </div>
                                                <div class="category-box-name">
                                                    <h6>Kesehatan</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="ket1">
                                        <div class="shop-category-box">
                                            <a href="shop-left-sidebar.html">
                                                <div class="shop-category-image">
                                                    <img src="{{ asset('user/images/icon/icon Lingkungan.png') }}" class="blur-up lazyload" alt="">
                                                </div>
                                                <div class="category-box-name">
                                                    <h6>Lingkungan</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="ket1">
                                        <div class="shop-category-box">
                                            <a href="shop-left-sidebar.html">
                                                <div class="shop-category-image">
                                                    <img src="{{ asset('user/images/icon/Icon ekonomi.png') }}" class="blur-up lazyload" alt="">
                                                </div>
                                                <div class="category-box-name">
                                                    <h6>Ekonomi</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="ket1">
                                        <div class="shop-category-box">
                                            <a href="shop-left-sidebar.html">
                                                <div class="shop-category-image">
                                                    <img src="{{ asset('user/images/icon/icon infrastruktur.png') }}" class="blur-up lazyload" alt="">
                                                </div>
                                                <div class="category-box-name">
                                                    <h6>Infrastruktur</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="ket1">
                                        <div class="shop-category-box">
                                            <a href="shop-left-sidebar.html">
                                                <div class="shop-category-image">
                                                    <img src="{{ asset('user/images/icon/company.png') }}" class="blur-up lazyload" alt="">
                                                </div>
                                                <div class="category-box-name">
                                                    <h6>Infrastruktur</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card card-news__custome">
                                            <div class="card-body card-body__custome">
                                                <img src="{{ asset('user/images/slider (1).jpg') }}" alt="" width="100%" height="200">
                                                <div class="news-content mb-2 pb-2">
                                                    <small class="pb-2">Lorem, ipsum dolor sit</small>
                                                    <h3 class="pb-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit adipisicing elit.</h3>
                                                    <div>
                                                        <small class="pb-2">Lorem, ipsum dolor sit</small>
                                                        <span class="pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dolores inventore eaque deserunt perspiciatis optio eos sapiente voluptatum temporibus obcaecati.</span>
                                                    </div>
                                                </div>
                                                <a href="" id="detailbutton" class="btn btn-detail__news w-80 mb-3 mx-auto" style="border-radius: 5px !important">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card card-news__custome">
                                            <div class="card-body card-body__custome">
                                                <img src="{{ asset('user/images/slider (1).jpg') }}" alt="" width="100%" height="200">
                                                <div class="news-content mb-2 pb-2">
                                                    <small class="pb-2">Lorem, ipsum dolor sit</small>
                                                    <h3 class="pb-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit adipisicing elit.</h3>
                                                    <div>
                                                        <small class="pb-2">Lorem, ipsum dolor sit</small>
                                                        <span class="pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dolores inventore eaque deserunt perspiciatis optio eos sapiente voluptatum temporibus obcaecati.</span>
                                                    </div>
                                                </div>
                                                <a href="" id="detailbutton" class="btn btn-detail__news w-80 mb-3 mx-auto" style="border-radius: 5px !important">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card card-news__custome">
                                            <div class="card-body card-body__custome">
                                                <img src="{{ asset('user/images/slider (1).jpg') }}" alt="" width="100%" height="200">
                                                <div class="news-content mb-2 pb-2">
                                                    <small class="pb-2">Lorem, ipsum dolor sit</small>
                                                    <h3 class="pb-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit adipisicing elit.</h3>
                                                    <div>
                                                        <small class="pb-2">Lorem, ipsum dolor sit</small>
                                                        <span class="pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dolores inventore eaque deserunt perspiciatis optio eos sapiente voluptatum temporibus obcaecati.</span>
                                                    </div>
                                                </div>
                                                <a href="" id="detailbutton" class="btn btn-detail__news w-80 mb-3 mx-auto" style="border-radius: 5px !important">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card card-news__custome">
                                            <div class="card-body card-body__custome">
                                                <img src="{{ asset('user/images/slider (1).jpg') }}" alt="" width="100%" height="200">
                                                <div class="news-content mb-2 pb-2">
                                                    <small class="pb-2">Lorem, ipsum dolor sit</small>
                                                    <h3 class="pb-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit adipisicing elit.</h3>
                                                    <div>
                                                        <small class="pb-2">Lorem, ipsum dolor sit</small>
                                                        <span class="pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dolores inventore eaque deserunt perspiciatis optio eos sapiente voluptatum temporibus obcaecati.</span>
                                                    </div>
                                                </div>
                                                <a href="" id="detailbutton" class="btn btn-detail__news w-80 mb-3 mx-auto" style="border-radius: 5px !important">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card card-news__custome">
                                            <div class="card-body card-body__custome">
                                                <img src="{{ asset('user/images/slider (1).jpg') }}" alt="" width="100%" height="200">
                                                <div class="news-content mb-2 pb-2">
                                                    <small class="pb-2">Lorem, ipsum dolor sit</small>
                                                    <h3 class="pb-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit adipisicing elit.</h3>
                                                    <div>
                                                        <small class="pb-2">Lorem, ipsum dolor sit</small>
                                                        <span class="pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dolores inventore eaque deserunt perspiciatis optio eos sapiente voluptatum temporibus obcaecati.</span>
                                                    </div>
                                                </div>
                                                <a href="" id="detailbutton" class="btn btn-detail__news w-80 mb-3 mx-auto" style="border-radius: 5px !important">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card card-news__custome">
                                            <div class="card-body card-body__custome">
                                                <img src="{{ asset('user/images/slider (1).jpg') }}" alt="" width="100%" height="200">
                                                <div class="news-content mb-2 pb-2">
                                                    <small class="pb-2">Lorem, ipsum dolor sit</small>
                                                    <h3 class="pb-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit adipisicing elit.</h3>
                                                    <div>
                                                        <small class="pb-2">Lorem, ipsum dolor sit</small>
                                                        <span class="pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dolores inventore eaque deserunt perspiciatis optio eos sapiente voluptatum temporibus obcaecati.</span>
                                                    </div>
                                                </div>
                                                <a href="" id="detailbutton" class="btn btn-detail__news w-80 mb-3 mx-auto" style="border-radius: 5px !important">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer card-footer__custome">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <a href="" class="more-news">Lihat kegiatan lebih lanjut ... >>></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-section pb-4">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-custome">
                    <div class="card-body">
                        <div class="title">
                            <h2>Kegiatan Komite</h2>
                            <span class="title-leaf">
                            </span>
                        </div>
                        <div class="row ratio_65">
                            <div class="col-12 mb-3">
                                <div class="slider-3 shop-box no-arrow product-wrapper">
                                    <div>
                                        <div class="blog-box wow fadeInUp">
                                            <div class="blog-image">
                                                <a href="#">
                                                    <img src="{{ asset('user/images/mitra-1.png') }}"
                                                        class="bg-img blur-up lazyload" alt="">
                                                </a>
                                            </div>

                                            <div class="blog-contain">
                                                <div class="blog-label">
                                                    <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                                    <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                            Speight</span></span>
                                                </div>
                                                <a href="#">
                                                    <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                                </a>
                                                <button onclick="location.href = '#';" class="blog-button">Read More
                                                    <i class="fa-solid fa-right-long"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="blog-box wow fadeInUp">
                                            <div class="blog-image">
                                                <a href="#">
                                                    <img src="{{ asset('user/images/mitra-1.png') }}"
                                                        class="bg-img blur-up lazyload" alt="">
                                                </a>
                                            </div>

                                            <div class="blog-contain">
                                                <div class="blog-label">
                                                    <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                                    <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                            Speight</span></span>
                                                </div>
                                                <a href="#">
                                                    <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                                </a>
                                                <button onclick="location.href = '#';" class="blog-button">Read More
                                                    <i class="fa-solid fa-right-long"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="blog-box wow fadeInUp">
                                            <div class="blog-image">
                                                <a href="#">
                                                    <img src="{{ asset('user/images/mitra-1.png') }}"
                                                        class="bg-img blur-up lazyload" alt="">
                                                </a>
                                            </div>

                                            <div class="blog-contain">
                                                <div class="blog-label">
                                                    <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                                    <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                            Speight</span></span>
                                                </div>
                                                <a href="#">
                                                    <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                                </a>
                                                <button onclick="location.href = '#';" class="blog-button">Read More
                                                    <i class="fa-solid fa-right-long"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="blog-box wow fadeInUp">
                                            <div class="blog-image">
                                                <a href="#">
                                                    <img src="{{ asset('user/images/mitra-1.png') }}"
                                                        class="bg-img blur-up lazyload" alt="">
                                                </a>
                                            </div>

                                            <div class="blog-contain">
                                                <div class="blog-label">
                                                    <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                                    <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                            Speight</span></span>
                                                </div>
                                                <a href="#">
                                                    <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                                </a>
                                                <button onclick="location.href = '#';" class="blog-button">Read More
                                                    <i class="fa-solid fa-right-long"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="newsletter-section ">
    <div class="container-fluid-lg">
        <div class="newsletter-box newsletter-box-2">
            <div class="newsletter-contain py-5" style="height: 250px">
               
            </div>
        </div>
    </div>
</section>

@endsection
