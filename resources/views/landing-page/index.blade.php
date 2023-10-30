@extends('landing-page.layouts.index')
@section('content')
    <div class="container-fluid mt-5 py-5" id="home">
        <h1 class="display-4 text-light text-center text-ds fw-bold mb-5 pt-3">Ais Parfume</h1>
        <h1 class="display-6 text-light text-center text-pop-semibold fw-bold mb-5 pt-3">"Rekomendasi Artis"</h1>
        <div class="d-flex flex-column justify-content-center align-items-center gap-2">
            <div class="d-flex justify-content-center align-items-center gap-2">
                <div class="card thumbnails">
                    <img src="{{ asset('assets/images/artis/fuji.JPG') }}" class="card-img-top rounded-0" alt="...">
                    <div class="card-body">
                        <a href="https://www.instagram.com/fuji_an" class="btn card-text" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('assets/icons/instagram.png') }}" width="28" alt="">&nbsp;
                            <span class="text-pop">@fuji_an</span>
                        </a>
                        <a href="https://www.instagram.com/fadlyfsl_" class="btn card-text" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('assets/icons/instagram.png') }}" width="28" alt="">&nbsp;
                            <span class="text-pop">@fadlyfsl_</span>
                        </a>
                    </div>
                </div>
                <div class="card thumbnails">
                    <img src="{{ asset('assets/images/artis/arfan-afif.JPG') }}" class="card-img-top rounded-0" alt="...">
                    <div class="card-body">
                        <a href="https://www.instagram.com/arfanafiif" class="btn card-text" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('assets/icons/instagram.png') }}" width="28" alt="">&nbsp;
                            <span class="text-pop">@arfanafiif</span>
                        </a>
                    </div>
                </div>
                <div class="card thumbnails">
                    <img src="{{ asset('assets/images/artis/inara.jpg') }}" class="card-img-top rounded-0" alt="...">
                    <div class="card-body">
                        <a href="https://www.instagram.com/mommy_starla" class="btn card-text" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('assets/icons/instagram.png') }}" width="28" alt="">&nbsp;
                            <span class="text-pop">@mommy_starla</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center gap-2 mb-2">
                <div class="card thumbnails">
                    <img src="{{ asset('assets/images/artis/thoriq.JPG') }}" class="card-img-top rounded-0" alt="...">
                    <div class="card-body">
                        <a href="https://www.instagram.com/thariqhalilintar" class="btn card-text" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('assets/icons/instagram.png') }}" width="28" alt="">&nbsp;
                            <span class="text-pop">@thariqhalilintar</span>
                        </a>
                    </div>
                </div>
                <div class="container-video card thumbnails">
                    <video onclick="play(event)" src="{{ asset('assets/images/artis/1.mp4') }}" class="thumbnails" id="video"></video>
                    <div class="controls">
                        <button class="btn" onclick="play(event)"><i class="fa fa-play"></i><i class="fa fa-pause"></i></button>
                        <button class="btn" onclick="rewind(event)"><i class="fa fa-fast-backward"></i></button>
                        <div class="timeline">
                            <div class="bar">
                                <div class="inner"></div>
                            </div>
                        </div>
                        <button class="btn" onclick="forward(event)"><i class="fa fa-fast-forward"></i></button>
                        <button class="btn" onclick="fullScreen(event)"><i class="fa fa-expand"></i></button>
                        <button class="btn" onclick="download(event)"><i class="fa fa-cloud-download"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 bg-image-1" id="home">
      <div class="container-overlay d-flex flex-column justify-content-center align-items-center px-5">
        <h1 class="display-3 fw-bold text-ds text-light">Ais Parfume</h1>
        <p class="fs-5 text-pop text-light w-50 text-center">Parfum dengan aroma yang diformulasikan dengan bahan pilihan. Menhasilkan aroma yang nyaman dan pastinya bikin kamu pede.</p>
      </div>
    </div>

    <div class="p-5">
      <div class="container-fluid" id="promo">
        <h1 class="display-4 text-light text-center text-ds fw-bold mb-5 pt-3">Harga Promo</h1>
        <div class="d-flex justify-content-around align-items-center">
            <div class="col-4 card border-light rounded-0 shadow">
                <img src="{{ asset('assets/images/produk/1D9A4946.JPEG') }}" class="card-img-top rounded-0" alt="...">
                <div class="card-body bg-primary">
                    <span class="text-ds fs-2 fw-bold text-light">Rich Series</span>
                    <span class="badge rounded-pill text-bg-light text-pop">6 in 1</span>
                    <span class="d-flex flex-column">
                        <span class="fs-3 text-pop-bold text-light">Rp145.000</span>
                        <small class="text-pop-semibold text-decoration-line-through text-decoration-danger">Rp299.000</small>
                    </span>
                    <div class="d-flex flex-column py-2 justify-content-center align-items-start gap-1">
                        <div class="d-flex text-pop justify-content-start text-secondary align-items-center bg-light rounded-pill px-2 py-1">
                            <i class="fas fa-check text-success"></i>&nbsp;
                            Wangi Tahan 8-12 Jam
                        </div>
                        <div class="d-flex text-pop justify-content-start text-secondary align-items-center bg-light rounded-pill px-2 py-1">
                            <i class="fas fa-check text-success"></i>&nbsp;
                            Gratis Ongkir Sepulau Jawa
                        </div>
                        <div class="d-flex text-pop justify-content-start text-secondary align-items-center bg-light rounded-pill px-2 py-1">
                            <i class="fas fa-check text-success"></i>&nbsp;
                            Dapat 6 botol 3 untuk pria dan 3 untuk wanita
                        </div>
                        <div class="d-flex text-pop justify-content-start text-secondary align-items-center bg-light rounded-pill px-2 py-1">
                            <i class="fas fa-check text-success"></i>&nbsp;
                            Sudah BPOM
                        </div>
                        <div class="d-flex text-pop justify-content-start text-secondary align-items-center bg-light rounded-pill px-2 py-1">
                            <i class="fas fa-check text-success"></i>&nbsp;
                            GRATIS Baby Gold
                        </div>
                    </div>
                </div>
                <a class="btn btn-light rounded-0 text-pop-semibold card-text" href="https://wa.me/+6281944330245?text={{ urlencode('Hallo kak... saya mau ambil promo sekarang') }}">Beli Sekarang</a>
            </div>
    
            <div class="col-4 card border-light rounded-0 shadow">
                <img src="{{ asset('assets/images/produk/1D9A4944.JPEG') }}" class="card-img-top rounded-0" alt="...">
                <div class="card-body bg-primary">
                    <span class="text-ds fs-2 fw-bold text-light">Sultan Series</span>
                    <span class="badge rounded-pill text-bg-light text-pop">12 in 1</span>
                    <span class="d-flex flex-column">
                        <span class="fs-3 text-pop-bold text-light">Rp249.000</span>
                        <small class="text-pop-semibold text-decoration-line-through text-decoration-danger">Rp520.000</small>
                    </span>
                    <div class="d-flex flex-column py-2 justify-content-center align-items-start gap-1">
                    <div class="d-flex text-pop justify-content-start text-secondary align-items-center bg-light rounded-pill px-2 py-1">
                            <i class="fas fa-check text-success"></i>&nbsp;
                            Wangi Tahan 8-12 Jam
                        </div>
                        <div class="d-flex text-pop justify-content-start text-secondary align-items-center bg-light rounded-pill px-2 py-1">
                            <i class="fas fa-check text-success"></i>&nbsp;
                            Gratis Ongkir Sepulau Jawa
                        </div>
                        <div class="d-flex text-pop justify-content-start text-secondary align-items-center bg-light rounded-pill px-2 py-1">
                            <i class="fas fa-check text-success"></i>&nbsp;
                            Dapat 6 botol 3 untuk pria dan 3 untuk wanita
                        </div>
                        <div class="d-flex text-pop justify-content-start text-secondary align-items-center bg-light rounded-pill px-2 py-1">
                            <i class="fas fa-check text-success"></i>&nbsp;
                            Sudah BPOM
                        </div>
                        <div class="d-flex text-pop justify-content-start text-secondary align-items-center bg-light rounded-pill px-2 py-1">
                            <i class="fas fa-check text-success"></i>&nbsp;
                            GRATIS Baby Gold
                        </div>
                    </div>
                </div>
                <a class="btn btn-light rounded-0 text-pop-semibold card-text" href="https://wa.me/+6281944330245?text={{ urlencode('Hallo kak... saya mau ambil promo sekarang') }}">Beli Sekarang</a>
            </div>
        </div>
      </div>
    </div>

    <div class="p-5 mb-4 bg-white" id="products">
      <div class="container-fluid">
        <h1 class="display-6 fw-bold text-pop text-center text-ds mb-5 pt-3">Ais Parfume Rich Series</h1>
        <div class="w-100 d-flex gap-3 overflow-x-auto" style="white-space: nowrap;">
            <div class="col-3 card border-primary rounded-0">
                <img src="{{ asset('assets/images/produk/FPK2023101849.JPEG') }}" class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <span class="text-ds fs-4">Ais Parfume - Eveline</span>
                    <div class="card-text gap-1 d-flex align-items-center">
                        <img src="{{ asset('assets/icons/bpom.png') }}" width="28" alt="Logo BPOM">
                        <span class="text-pop-semibold">NA18230604452</span>
                    </div>
                    <div class="card-text gap-2 mt-2">
                        <span class="text-pop fs-6">Main Accords:</span>
                        <div class="text-wrap">
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Green</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Aromatic</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Woody</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Amber</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Mossy</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Floral</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">White floral</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Sweet</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Earthy</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 card border-primary rounded-0">
                <img src="{{ asset('assets/images/produk/FPK2023101852.JPEG') }}" class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <span class="text-ds fs-4">Ais Parfume - Reval</span>
                    <div class="card-text gap-1 d-flex align-items-center">
                        <img src="{{ asset('assets/icons/bpom.png') }}" width="28" alt="Logo BPOM">
                        <span class="text-pop-semibold">NA18230604457</span>
                    </div>
                    <div class="card-text gap-2 mt-2">
                        <span class="text-pop fs-6">Main Accords:</span>
                        <div class="text-wrap">
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Amber</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Citrus</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Fresh spicy</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Musky</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Aquatic</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Warm spicy</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Woody</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Fresh</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Aromatic</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Smoky</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 card border-primary rounded-0">
                <img src="{{ asset('assets/images/produk/FPK2023101850.JPEG') }}" class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <span class="text-ds fs-4">Ais Parfume - Cherish</span>
                    <div class="card-text gap-1 d-flex align-items-center">
                        <img src="{{ asset('assets/icons/bpom.png') }}" width="28" alt="Logo BPOM">
                        <span class="text-pop-semibold">NA18230604450</span>
                    </div>
                    <div class="card-text gap-2 mt-2">
                        <span class="text-pop fs-6">Main Accords:</span>
                        <div class="text-wrap">
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Vanilla</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Powdery</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Warm spicy</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Amber</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Sweet</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Iris</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Woody</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Cacao</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Floral</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Almond</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 card border-primary rounded-0">
                <img src="{{ asset('assets/images/produk/FPK2023101854.JPEG') }}" class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <span class="text-ds fs-4">Ais Parfume - Royal Man</span>
                    <div class="card-text gap-1 d-flex align-items-center">
                        <img src="{{ asset('assets/icons/bpom.png') }}" width="28" alt="Logo BPOM">
                        <span class="text-pop-semibold">NA18230604458</span>
                    </div>
                    <div class="card-text gap-2 mt-2">
                        <span class="text-pop fs-6">Main Accords:</span>
                        <div class="text-wrap">
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Citrus</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Aromatic</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Warm spicy</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Fresh spicy</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Lavender</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 card border-primary rounded-0">
                <img src="{{ asset('assets/images/produk/FPK2023101851.JPEG') }}" class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <span class="text-ds fs-4">Ais Parfume - Esca Sexy</span>
                    <div class="card-text gap-1 d-flex align-items-center">
                        <img src="{{ asset('assets/icons/bpom.png') }}" width="28" alt="Logo BPOM">
                        <span class="text-pop-semibold">NA18230604451</span>
                    </div>
                    <div class="card-text gap-2 mt-2">
                        <span class="text-pop fs-6">Main Accords:</span>
                        <div class="text-wrap">
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Fruity</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Sweet</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Citrus</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 card border-primary rounded-0">
                <img src="{{ asset('assets/images/produk/FPK2023101853.JPEG') }}" class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <span class="text-ds fs-4">Ais Parfume - Raline</span>
                    <div class="card-text gap-1 d-flex align-items-center">
                        <img src="{{ asset('assets/icons/bpom.png') }}" width="28" alt="Logo BPOM">
                        <span class="text-pop-semibold">NA18230604456</span>
                    </div>
                    <div class="card-text gap-2 mt-2">
                        <span class="text-pop fs-6">Main Accords:</span>
                        <div class="text-wrap">
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Floral</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Fruity</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Ozonic</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Aquatic</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Rose</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Fresh</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Sweet</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Musky</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Powdery</span>
                            <span class="badge rounded-pill text-bg-light text-pop badge-primary">Woody</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="p-5 mb-5">
        <div class="container-fluid pb-3" id="reviews">
            <h1 class="display-6 fw-bold text-pop text-center text-ds mb-5 pt-3 text-light">Testimoni</h1>
            <div class="w-100 d-flex gap-3 overflow-x-auto" style="white-space: nowrap;">
                <div class="col-3 card border-primary rounded-0">
                    <div class="card-header d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets/icons/user.png') }}" class="user-avatar rounded-circle border-primary bg-primary" alt="...">
                        <div class="d-flex flex-column">
                            <span class="fs-4 text-pop-semibold">hilyascarves.official</span>
                            <span class="fs-6 text-pop">Indramayu, Jawa Barat</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-pop text-wrap">Udah murah meriah.. dapet LM juga gais... ini jualan apa sedekah ya... <br> Thanks seller yg baik hati... semoga berkah usahanya...</p>
                        <div class="row">
                            <a href="#" type="button" class="btn p-0 m-0 col-4" style="background-image: url()" data-bs-toggle="modal" data-bs-target="#testimoni-1">
                                <img src="{{ asset('assets/images/testimoni/WhatsApp Image 2023-10-28 at 17.58.59.jpeg') }}" class="img-thumbnail" alt="testimoni-1">
                            </a>
                            <div class="modal fade" id="testimoni-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="container">
                                        <img src="{{ asset('assets/images/testimoni/WhatsApp Image 2023-10-28 at 17.58.59.jpeg') }}" class="img-fluid" alt="testimoni-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 card border-primary rounded-0">
                    <div class="card-header d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets/icons/user.png') }}" class="user-avatar rounded-circle border-primary bg-primary" alt="...">
                        <div class="d-flex flex-column">
                            <span class="fs-4 text-pop-semibold">oqkf2udoa8</span>
                            <span class="fs-6 text-pop">Blitar, Jawa Timur</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-pop text-wrap">Ga seexpect ini parfume murah dapet 6 botol, baru buka box wanginya langsung nyebar ... pengiriman juga cepet banget, berkah terus kak</p>
                        <div class="row">
                            <a href="#" type="button" class="btn p-0 m-0 col-4" style="background-image: url()" data-bs-toggle="modal" data-bs-target="#testimoni-2">
                                <img src="{{ asset('assets/images/testimoni/WhatsApp Image 2023-10-28 at 17.59.25.jpeg') }}" class="img-thumbnail" alt="testimoni-2">
                            </a>
                            <div class="modal fade" id="testimoni-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="container">
                                        <img src="{{ asset('assets/images/testimoni/WhatsApp Image 2023-10-28 at 17.59.25.jpeg') }}" class="img-fluid" alt="testimoni-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 card border-primary rounded-0">
                    <div class="card-header d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets/icons/user.png') }}" class="user-avatar rounded-circle border-primary bg-primary" alt="...">
                        <div class="d-flex flex-column">
                            <span class="fs-4 text-pop-semibold">entincastinih</span>
                            <span class="fs-6 text-pop">Tangerang, Banten</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-pop text-wrap">Bagus,,pengiriman cepat,,wangi'y jg mantap..murah lg</p>
                        <div class="row">
                            <a href="#" type="button" class="btn p-0 m-0 col-4" style="background-image: url()" data-bs-toggle="modal" data-bs-target="#testimoni-3">
                                <img src="{{ asset('assets/images/testimoni/WhatsApp Image 2023-10-28 at 17.59.55.jpeg') }}" class="img-thumbnail" alt="testimoni-3">
                            </a>
                            <div class="modal fade" id="testimoni-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="container">
                                        <img src="{{ asset('assets/images/testimoni/WhatsApp Image 2023-10-28 at 17.59.55.jpeg') }}" class="img-fluid" alt="testimoni-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 card border-primary rounded-0">
                    <div class="card-header d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets/icons/user.png') }}" class="user-avatar rounded-circle border-primary bg-primary" alt="...">
                        <div class="d-flex flex-column">
                            <span class="fs-4 text-pop-semibold">D**n A**a s**p</span>
                            <span class="fs-6 text-pop">Indramayu, Jawa Barat</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-pop text-wrap">Masya Allah paketnya sudah sampai dan alhamdulillah wangi.</p>
                        <div class="row">
                            <a href="#" type="button" class="btn p-0 m-0 col-4" style="background-image: url()" data-bs-toggle="modal" data-bs-target="#testimoni-4">
                                <img src="{{ asset('assets/images/testimoni/Screenshot_20231002_101320_TikTok.jpg') }}" class="img-thumbnail" alt="testimoni-4">
                            </a>
                            <div class="modal fade" id="testimoni-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="container">
                                        <img src="{{ asset('assets/images/testimoni/Screenshot_20231002_101320_TikTok.jpg') }}" class="img-fluid" alt="testimoni-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 card border-primary rounded-0">
                    <div class="card-header d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets/icons/user.png') }}" class="user-avatar rounded-circle border-primary bg-primary" alt="...">
                        <div class="d-flex flex-column">
                            <span class="fs-4 text-pop-semibold">c**u</span>
                            <span class="fs-6 text-pop">Semarang, Jawa Tengah</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-pop text-wrap">Suka sekali sama wanginya keren tempatnya ok banget</p>
                        <div class="row">
                            <a href="#" type="button" class="btn p-0 m-0 col-4" style="background-image: url()" data-bs-toggle="modal" data-bs-target="#testimoni-5">
                                <img src="{{ asset('assets/images/testimoni/Screenshot_20231002_101559_TikTok.jpg') }}" class="img-thumbnail" alt="testimoni-5">
                            </a>
                            <div class="modal fade" id="testimoni-5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="container">
                                        <img src="{{ asset('assets/images/testimoni/Screenshot_20231002_101559_TikTok.jpg') }}" class="img-fluid" alt="testimoni-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-3 card border-primary rounded-0">
                    <div class="card-header d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets/icons/user.png') }}" class="user-avatar rounded-circle border-primary bg-primary" alt="...">
                        <div class="d-flex flex-column">
                            <span class="fs-4 text-pop-semibold">D**n A**a s**p</span>
                            <span class="fs-6 text-pop">Surabaya, Jawa Timur</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-pop text-wrap">Masya Allah paketnya sudah sampai dan alhamdulillah wangi.</p>
                        <div class="row">
                            <a href="#" type="button" class="btn p-0 m-0 col-4" style="background-image: url()" data-bs-toggle="modal" data-bs-target="#testimoni-1">
                                <img src="{{ asset('assets/images/testimoni/Screenshot_20231002_101320_TikTok.jpg') }}" class="img-thumbnail" alt="testimoni-1">
                            </a>
                            <div class="modal fade" id="testimoni-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="container">
                                        <img src="{{ asset('assets/images/testimoni/Screenshot_20231002_101320_TikTok.jpg') }}" class="img-fluid" alt="testimoni-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 card border-primary rounded-0">
                    <div class="card-header d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets/icons/user.png') }}" class="user-avatar rounded-circle border-primary bg-primary" alt="...">
                        <div class="d-flex flex-column">
                            <span class="fs-4 text-pop-semibold">c**u</span>
                            <span class="fs-6 text-pop">Blitar, Jawa Timur</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-pop text-wrap">Suka sekali sama wanginya keren tempatnya ok banget</p>
                        <div class="row">
                            <a href="#" type="button" class="btn p-0 m-0 col-4" style="background-image: url()" data-bs-toggle="modal" data-bs-target="#testimoni-2">
                                <img src="{{ asset('assets/images/testimoni/Screenshot_20231002_101559_TikTok.jpg') }}" class="img-thumbnail" alt="testimoni-2">
                            </a>
                            <div class="modal fade" id="testimoni-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="container">
                                        <img src="{{ asset('assets/images/testimoni/Screenshot_20231002_101559_TikTok.jpg') }}" class="img-fluid" alt="testimoni-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 card border-primary rounded-0">
                    <div class="card-header d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets/icons/user.png') }}" class="user-avatar rounded-circle border-primary bg-primary" alt="...">
                        <div class="d-flex flex-column">
                            <span class="fs-4 text-pop-semibold">M**</span>
                            <span class="fs-6 text-pop">Jawa Barat</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-pop text-wrap">Suka bgt sama ini parfum bau nya segar2 dan cpt sampai</p>
                        <div class="row">
                            <a href="#" type="button" class="btn p-0 m-0 col-4" style="background-image: url()" data-bs-toggle="modal" data-bs-target="#testimoni-3">
                                <img src="{{ asset('assets/images/testimoni/Screenshot_20231002_101614_TikTok.jpg') }}" class="img-thumbnail" alt="testimoni-3">
                            </a>
                            <div class="modal fade" id="testimoni-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="container">
                                        <img src="{{ asset('assets/images/testimoni/Screenshot_20231002_101614_TikTok.jpg') }}" class="img-fluid" alt="testimoni-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 card border-primary rounded-0">
                    <div class="card-header d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets/icons/user.png') }}" class="user-avatar rounded-circle border-primary bg-primary" alt="...">
                        <div class="d-flex flex-column">
                            <span class="fs-4 text-pop-semibold">m**n</span>
                            <span class="fs-6 text-pop">Jawa Barat</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-pop text-wrap">Semuanya baik ,, rekomen bgt buat yang cari parfume dengan wangi yg elegan</p>
                        <a href="#" type="button" class="btn p-0 m-0 col-4" style="background-image: url()" data-bs-toggle="modal" data-bs-target="#testimoni-4">
                                <img src="{{ asset('assets/images/testimoni/Screenshot_20231002_101629_TikTok.jpg') }}" class="img-thumbnail" alt="testimoni-4">
                            </a>
                            <div class="modal fade" id="testimoni-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="container">
                                        <img src="{{ asset('assets/images/testimoni/Screenshot_20231002_101629_TikTok.jpg') }}" class="img-fluid" alt="testimoni-4">
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 card border-primary rounded-0">
                    <div class="card-header d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets/icons/user.png') }}" class="user-avatar rounded-circle border-primary bg-primary" alt="...">
                        <div class="d-flex flex-column">
                            <span class="fs-4 text-pop-semibold">G**i</span>
                            <span class="fs-6 text-pop">Jawa Barat</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-pop text-wrap">Baru buka box wanginya sudah kemana2..</p>
                        <a href="#" type="button" class="btn p-0 m-0 col-4" style="background-image: url()" data-bs-toggle="modal" data-bs-target="#testimoni-5">
                                <img src="{{ asset('assets/images/testimoni/Screenshot_20231002_101706_TikTok.jpg') }}" class="img-thumbnail" alt="testimoni-5">
                            </a>
                            <div class="modal fade" id="testimoni-5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="container">
                                        <img src="{{ asset('assets/images/testimoni/Screenshot_20231002_101706_TikTok.jpg') }}" class="img-fluid" alt="testimoni-5">
                                    </div>
                                </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="p-5 bg-white" id="faq">
        <div class="container-fluid">
            <h1 class="display-6 fw-bold text-pop text-center text-ds mb-5 pt-3">FAQ</h1>
            <div class="container">
                <div class="accordion" id="faq">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button text-pop-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Apakah sudah termasuk gratis ongkir ?
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body text-pop">
                            Gratis ongkir di antar sampai depan rumah khusus wilayah pulau Jawa aja kak, selain itu kami ada potongan ongkir sebesar 20ribu rupiah
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button text-pop-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Apakah bisa bayar ditempat / COD ?
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body text-pop">
                            Bisa banget kak, pembayaran ditempat sangat direkomendasikan
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button text-pop-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Wangi tahan berapa lama kak ?
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body text-pop">
                            Wangi tahan 8 - 12 Jam kakak
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection