@extends('user.layouts.assets')

@section('content')
    @include('user.layouts.navbar2')

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about mt-5" style="margin-top: 100px;">
            <div class="container">
                <div class="text-center">
                    <h1>Detail Cafe</h1>
                </div>
                <div class="card">
                    <div class="container">
                        <div class="row mb-4 mt-4">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"
                                    style="border-radius: 16px;">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?= asset('user/assets/img/assets1.png') ?>" style="width:100%"
                                                class="d-block w-100" alt="<?= asset('user/assets/img/assets1.png') ?>">
                                            <div class="carousel-caption">
                                                <p>Coffee aku</p>
                                                <p>* rating/5</p>
                                                <p>loc Jakarta</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= asset('user/assets/img/assets1.png') ?>" style="width:100%"
                                                class="d-block w-100" alt="<?= asset('user/assets/img/assets1.png') ?>">
                                            <div class="carousel-caption">
                                                <p>Coffee kamu</p>
                                                <p>* rating/5</p>
                                                <p>loc Jakarta</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= asset('user/assets/img/assets1.png') ?>" style="width:100%"
                                                class="d-block w-100" alt="<?= asset('user/assets/img/assets1.png') ?>">
                                            <div class="carousel-caption">
                                                <p>Coffee Dia</p>
                                                <p>* rating/5</p>
                                                <p>loc Jakarta</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <h3>Promo 11.11 Diskon 11%</h3>
                                <strong>Lokasi</strong>
                                <br>
                                <strong>Alamat</strong>
                                <br>
                                <strong>Kategori</strong>
                                <br>
                                <strong>Tanggal</strong>
                                <br>
                                <strong>Waktu</strong>
                                <br>
                                <br>
                                Deskripsi
                                <br>
                                <a href="" class="btn btn-light mt-5" style="width: 100%">See Google Maps
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-body mb-2">
                        <strong>Comments</strong>
                        <br>
                        <hr>
                        <div class="row mt-2">
                            <div class="col-lg-10 col-md-10 col-sm-10">
                                <strong>Nama User</strong>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, quis.
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2" style="text-align:right;">
                                12/03/2022
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-10 col-md-10 col-sm-10">
                                <strong>Nama User</strong>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, quis.
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2" style="text-align:right;">
                                12/03/2022
                            </div>
                        </div>
                        <div class="row gy-4 mt-3 justify-content-center">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Write a Comment"
                                        aria-label="Search" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"
                                            style="color: rgb(0, 0, 0); border-color:rgb(0, 0, 0); border-radius: 0px 5px 5px 0px">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
    </main><!-- End #main -->

    @include('user.layouts.footer')
@endsection
