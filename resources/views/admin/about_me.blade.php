@extends('main')

@section ('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <div class="container">
                        <div class="row">
                            <div class="col align-self-center">
                                <!-- <p class="greeting col-sm-10 text-center m-auto display-1 align-items-center align-self-center "  >Hi My Name is Perwira Satria</p> -->
                                <h3 class="text-primary text-center align-items-center align-self-center">Hi, I'm Satria.</h3>
                                <h3 class="text-primary text-center align-items-center align-self-center">I'm a student from university of Sumatera Utara</h3>
                                <h3 class="text-primary text-center align-items-center align-self-center">and a beginner in front end developer.</h3>
                              </div>
                        </div>
                    </div>

                    <div><br></div>
                    <div><br></div>
                    <div><br></div>
                    <div><br></div>
                    <div><br></div>
                    <div><br></div>

                    <div class="container mb-5">
                      <div class="row">
                          <div id="pot" class="col-sm-5 text-center">
                            <img src="{{ asset('img/hode1.jpg') }}" class="img-fluid img-responsive" alt="Responsive image">
                          </div>

                          <div class="col-sm"></div>

                          <div class="col-sm-6 align-self-center">
                            <h3>Tentang Saya</h3>
                            <hr style="height:2px; border:none; color:#e6e6e6; background-color:#20478a;">
                            <p>Nama saya Perwira Satria. Saya hanyalah manusia biasa dan seperti mayoritas mahasiswa lainnya, saya hanya pengen cepet lulus. </p>
                            <p>saya adalah seorang front end website developer pemula, yang memiliki beberapa pengetahuan dan skill tentang html dengan menggunakan css dan bootstrap.</p>
                          </div>
                      </div>
                    </div>

                    <div><br></div>
                    <div><br></div>
                    <div><br></div>
                    <div><br></div>

                    <div class="container"></div>
                    <div id="por" class="container mb-5">
                      <div class="row">
                        <div class="col-sm-5 mr-5 ">
                          <h3>BIODATA</h3>
                          <p>Nama Lengkap : Perwira Satria Taufik QD</p>
                          <p>Jenis Kelamin : Laki-Laki</p>
                          <p>Tempat Dan Tanggal Lahir :Tanjung Enim, 20 maret 2004</p>
                          <p>Agama : Islam</p>
                          <p>Status : Mahasiswa</p>
                        </div>

                        <div class="col-sm-5 ">
                          <h3>MY SKILL</h3>
                          <p style="font-size: 20px;">html</p>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          <p style="font-size: 20px;">css</p>
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          <p style="font-size: 20px;">bootstrap</p>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 22%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          <p style="font-size: 20px;">php</p>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="col-sm-5">
                          <h3>PENDIDIKAN</h3>
                          <p>Berikut  riwayat pendidikan-pendidikan yang telah saya tempuh selama 18 tahun ini</p>
                          <ul>
                            <li>SD IT RABBANI MUARA ENIM</li>
                            <li>SMP 3 TANJUNG RAJA</li>
                            <li>SMK BUKIT ASAM TANJUNG ENIM</li>
                            <li>Universitas Sumatera Utara (semester 1)</li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection
