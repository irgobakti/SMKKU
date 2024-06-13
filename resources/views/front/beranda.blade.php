@extends('front.layout.app')

@section('content')

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <img src="{{asset('front')}}/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <h3>Beranda</h3>
          <p>
            SMKKU adalah Institusi Pendidikn yang berintegritas tinggi dan menjunjung tinggi nilai pancansila dan agama. 
          </p>
          <ul>
            <li><i class="bx bx-check-double"></i>  SMKKU adalah Institusi Pendidikn yang berintegritas tinggi dan menjunjung tinggi nilai pancansila dan agama.</li>
            <li><i class="bx bx-check-double"></i> Memberikan pelayanan pendidikan dan kegiatan keagamaan untuk meningkatkan ketakwaan dan akhlak mulia
                Mendidik siswa dalam ranah keterampilan, pengetahuan dan pembinaan karakter serta pelestarian lingkungan sesuai dengan program keahliannya
                Menyiapkan siswa yang dapat berkolaborasi di dunia kerja dan berkebhinekaan global
                Mewujudkan siswa yang memiliki jiwa wirausaha, dapat melanjutkan pendidikan ke jenjang yang lebih tinggi dan memiliki daya saing pada tingkat global
                Meningkatkan peran sekolah kejuruan sebagai pusat pengembangan keahlian, budaya hidup sehat dan berwawasan lingkungant.</li>
          </ul>
          <div class="row icon-boxes">
            <div class="col-md-6">
              <i class="bx bx-receipt"></i>
              <h4>Visi</h4>
              <p></p>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <i class="bx bx-cube-alt"></i>
              <h4>Misi</h4>
              <p></p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <section>
    <div>
        <video width="1000"  controls>
            <source src="{{asset('front/Video/Video.mp4')}}" type="video/mp4">
            
            Your browser does not support HTML video.
          </video>
    </div>
  </section>
@endsection