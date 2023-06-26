@extends('layouts.general')
@section('sub_title-1', 'Profile - Kabupaten Jepara')
@section('sub_title-2')
    <li class="breadcrumb-item">
        <a href="index.html">
            <i class="fa-solid fa-house"></i>
        </a>
    </li>
@endsection
@section('sub_title-3', 'Profile - Kabupaten Jepara')
@section('content')
@section('content')
<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>Kabupaten Jepara</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Kabupaten Jepara</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<section class="fresh-vegetable-section">
    <div class="container-fluid-lg">
        <div class="row gx-xl-5 gy-xl-0 g-3 ratio_148_1">
            <div class="col-xl-6 col-12">
                <div class="row g-sm-4 g-2">
                    <div class="col-6">
                        <div class="fresh-image-2">
                            <div class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{ asset('user/images/slider (1).jpg') }}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="{{ asset('user/images/slider (1).jpg') }}" class="bg-img blur-up lazyloaded" alt="" style="display: none;">
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="fresh-image">
                            <div class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{ asset('user/images/slider (1).jpg') }}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="{{ asset('user/images/slider (1).jpg') }}" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-12">
                <div class="fresh-contain p-center-left">
                    <div>
                        <div class="review-title">
                            <h4>Kabupaten Jepara</h4>
                            <h2>Profile Kabupaten Jepara</h2>
                        </div>
                        <div class="delivery-list">
                            <p class="text-content fs-6" style="text-align: justify">Jepara (bahasa Jawa: ꦏꦧꦸꦥꦠꦺꦤ꧀​ꦗꦼꦥꦫ, translit. Kabupatèn Jepara, pengucapan bahasa Jawa: [kabupat̪ɛn d͡ʒəpɔrɔ]) adalah salah satu kabupaten di Provinsi Jawa Tengah. Ibu kotanya adalah Kecamatan Jepara. Kabupaten ini berbatasan dengan Laut Jawa di barat dan utara, Kabupaten Pati dan Kabupaten Kudus di timur, serta Kabupaten Demak di selatan. Wilayah Kabupaten Jepara juga meliputi Kepulauan Karimunjawa, yang berada di Laut Jawa.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fresh-vegetable-section section-lg-space">
    <div class="container-fluid-lg">
        <div class="row gx-xl-5 gy-xl-0 g-3 ratio_148_1">
        <p class="text-content fs-6" style="line-height: 25px;text-align:justify">Menurut sejarahwan Hindia Belanda Cornelis Lekkerkerker, nama Jepara berasal dari kata Ujungpara yang kemudian berubah menjadi kata Ujung Mara, Jumpara, dan akhirnya Jepara atau Japara. Kata Ujungpara berasal dari bahasa Jawa yang terdiri atas dua kata, yaitu Ujung dan Para. Kata Ujung berarti “bagian darat yang menjorok jauh ke laut”, sedangkan kata Para, berarti "menunjukkan arah”. Dengan demikian, kata Ujungpara berarti “suatu daerah yang letaknya menjorok jauh ke laut”. Dalam sumber lain, kata Para merupakan kependekan dari Pepara, yang artinya "bebakulan mrono mrene" (berdagang ke sana ke mari). Dengan artian ini, maka kata Ujungpara juga berarti "sebuah ujung tempat bermukimnya para pedagang dari berbagai daerah".</p>
        <p class="text-content  fs-6" style="line-height: 25px;text-align:justify">Secara geografis Kabupaten Jepara terletak pada posisi 110°9'48,02" sampai 110°58'37,40" Bujur Timur dan 5°43'20,67" sampai 6°47'25,83" Lintang Selatan, sehingga merupakan daerah paling ujung sebelah utara dari Provinsi Jawa Tengah. Kabupaten Jepara terletak di Pantura Timur Jawa Tengah yang bagian barat dan utaranya dibatasi oleh laut. Bagian timur wilayah kabupaten ini merupakan daerah pegunungan. Luas wilayah daratan Kabupaten Jepara 1.004,132 km2 dengan panjang garis pantai 72 km. Wilayah tersempit adalah Kecamatan Kalinyamatan (24,179 km²) sedangkan wilayah terluas adalah Kecamatan Keling (231,758 km²).</p>
        <p class="text-content fs-6" style="line-height: 25px;text-align:justify">Wilayah Kabupaten Jepara juga meliputi Kepulauan Karimunjawa, yakni gugusan pulau-pulau di Laut Jawa. Dua pulau terbesarnya adalah Pulau Karimunjawa dan Pulau Kemujan. Sebagian besar wilayah Karimunjawa dilindungi dalam Cagar Alam Laut Karimunjawa.</p>
        </div></div>
</section>


@endsection