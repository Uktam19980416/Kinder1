@extends('layouts.code')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/about.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Haqimizda</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Asosiy <i class="ion-ios-arrow-forward"></i></a></span> <span>Haqimizda <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

      <section class="ftco-section ftco-no-pt ftc-no-pb">
          <div class="container">
              <div class="row">
                  <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
                      <div class="text px-4 ftco-animate">
                <h2 class="mb-4">118-sonli maktabgacha ta'lim muassasasiga xush kelibsiz!</h2>
                        <p>Bog'chamizda to‘liq guruhlarda ruscha guruhlardan tashqari inglizcha guruh ham mavjud. Bu guruhlarga 1,5 yoshdan 7 yoshgacha bo‘lgan bolalar qabul qilinadi. Bog'chamizda oliy ma'lumotli va malakali mutaxassislar faoliyat yuritishadi. 2019 yil fevraldan boshlab bolajonlar uchun xizmat qilayotgan 118-sonli MTT haftada 5 kun 08:00 dan 18:00gacha ishlaydi. Shanba kuni esa ish vaqti 08:00da 17:00gacha.</p>
                           <p> Bog'chamizda tarbiyalanayotgan bolalarning ota-onalari farzandlari nima bilan mashg‘ul bo‘layotgani haqida telegram orqali ma'lumot olib turishlari mumkin bo‘ladi. Bog‘chada bolalarga 4 mahal issiq ovqatdan tashqari yogurt, mevali desert, kompot beriladi. Bolajonlar har 3 oyda pediatr ko‘rigidan o‘tkaziladi. Bundan tashqari bog'chamizda faoliyat yuritadigan hamshira har kuni ertalab bolalarni tekshiruvdan o‘tkazadi.</p>
                {{-- <p><a href="#" class="btn btn-secondary px-4 py-3">Ko'proq o'qish</a></p> --}}
                      </div>
                  </div>
                  <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">Biz nimani taklif qilamiz</h2>
                      <p>Mazkur bog'chaning ta’lim dasturi bolalarning har tomonlama rivojlanishlari uchun tog‘ri keladi, bu esa ta‘lim jarayonida ularning ham ijtimoiy, ham aniq fanlarni bir xilda yaxshi o‘rganishlarini bildirad</p>
                      <div class="row mt-5">
                          <div class="col-lg-6">
                              <div class="services-2 d-flex">
                                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
                                  <div class="text">
                                      <h3>Birinchidan xavfsizlik</h3>
                                      <p>Solt – dunyoda yuqori darajali xususiy maktablarda qo‘llaniladigan yangi qo‘riqlash tizimi.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="services-2 d-flex">
                                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                                  <div class="text">
                                      <h3>Doimiy darslar</h3>
                                      <p>Maktabga tayyorgarlik vazifasini bajaruvchi bu guruhlarda rus va ingliz tili to‘garaklari mavjud.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="services-2 d-flex">
                                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                                  <div class="text">
                                      <h3>Oliy toifali o'qituvchilar</h3>
                                      <p>Yuqori malakali va ko‘p yillik tajribaga ega mutaxassislar bolalar ta’lim-tarbiyasi hamda sog‘ligining barcha jihatlariga e’tibor qaratadi.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="services-2 d-flex">
                                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                                  <div class="text">
                                      <h3>Sinf xonalar yetarli</h3>
                                      <p>Bolalarni yo‘l harakati qoidalari bilan tanishtirish uchun maxsus jihozlangan xonalar ham mavjud.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="services-2 d-flex">
                                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                                  <div class="text">
                                      <h3>Ijodiy darslar</h3>
                                      <p>Art room. Bu yerda bolalar hamma joyga, hatto xona devorlariga ham chizishlari, yoki kulolchilik sirlarini o‘rganishlari mumkin.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="services-2 d-flex">
                                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                                  <div class="text">
                                      <h3>Sport inshootlari</h3>
                                      <p>Immunitet tizimini mustahkam saqlash uchun tuzli xona, yopiq suv havzasi hamda ikkita sport zallari mavjud.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

  <section class="ftco-section testimony-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
            <h2>Tavsiyanoma</h2>
          <h2 class="mb-4"><span>Ota-onalar biz haqimizda nima deyishadi</span></h2>
          <p>Har bir mashg‘ulot mavzusi maktabgacha yoshdagi bolani rivojlantirishning 4-5 soha: atrof olamni o‘rganish, ijodiy va ta’lim olish, nutq va mantiqiy qobiliyatlarini rivojlantirishni qamrab oladi</p>
        </div>
      </div>
      <div class="row ftco-animate justify-content-center">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
              @include('parents.parentspart')
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-gallery">
      <div class="container-wrap">
          <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/course-1.jpg);">
                      <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                      </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_2.jpg);">
                      <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                      </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_3.jpg);">
                      <div class="icon mb-4 d-flex align-items-center justify-content-center">
                         <span class="icon-instagram"></span>
                      </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_4.jpg);">
                     <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                     </div>
                    </a>
                </div>
          </div>
      </div>
  </section>

@endsection()
