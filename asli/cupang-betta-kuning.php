<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My Css -->
    <style>
      section{
        min-height: 420px;
      }
    </style>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/539ff654ff.js" crossorigin="anonymous"></script>

    <title>BeautyFish</title>
  </head>
  <body class="mt-5">
   
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white shadow p-2 mb-5">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="index.html"><img src="./img/logo.png" alt=""></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kategori
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="kategori-cupang-betta.html">Cupang Betta</a>
                    <a class="dropdown-item" href="#">Cupang Halfmoon</a>
                    <a class="dropdown-item" href="#">Cupang Serit</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Guppy</a>
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari Ikan" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
            </form>
            </div>
        </div>
    </nav>
   
    
    
    <section id="card" class="card bg-light py-4">        
        <div class="container p-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Cupang Betta Biru Kuning</li>
                </ol>
              </nav>
            <div class="row mb-4">
                <div class="col-md">
                  <form action="checkout.html">
                    <div class="card shadow p-3 mb-5" >
                      <a href="img/betta-kuning.jpg"><img class="card-img-top" src="img/100/betta-kuning.jpg" alt="Card image cap"></a>
                      <div class="card-body">
                          <h5 class="card-title" id="namaIkan">Cupang Betta Kuning</h5>
                          <p class="card-text text-justify">Betta splendens selain sebagai cupang hias,betta splendes merupakan jenis adu terutama jenis yang lama. menurut catatan ikan ini telah dibudidayakan sejak tahun 1970.Ikan ini memiliki daya tahan yang kuat namun tidak ditopang dengan gigi tajam dan sisik yang kuat.Pada tutup ingsangnya terdapat 2 garis vertikal berwarna merah.sosok cupang ini bisa dibilang kecil dengan warna tubuh cenderung gelap.warnannya perpaduan antara merah tua dan biru tua serta tidak ada totol di tubuhnya.gerakan tubuhnya cendrung agresif dan terlebih dahulu menyerang ketika bertarung</p>
                          <h3 class="card-title" id="hargaIkan">Rp 40000</h3>
                          <i class="fas fa-star"> 4.5</i>
                      </div>
                      <div class="form p-1">
                          <div class="form-group">
                              <select class="form-control col-md-2" id="jml-pesanan">
                                  <option value="">Jumlah</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                          </div>
                          <div class="form-group">
                            <button type="button" class="btn btn-outline-secondary btn-lg col-md-2 m-1" id="btnBeli" data-bs-toggle="modal" data-bs-target="#exampleModal">Beli</button>
                            <button type="submit" class="btn btn-primary btn-lg col-md-2 m-1"><i class="fas fa-plus"></i> Keranjang</button>
                          </div>
                      </div>
                  </div>
                  <div class="modal fade" id="exampleModal"  aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title" id="exampleModalLabel">Checkout</h2>
                        </div>
                        <div class="modal-body col-md">
                              <div class="row g-3">
                                <div class="col-md-8 order-md mb-5">
                                  <h4 class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted">Keranjang Belanjamu</span>
                                    <span class="badge bg-secondary rounded-pill" id="jmlPesan">0</span>
                                  </h4>
                                  <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                      <div>
                                        <h6 class="">Produk</h6>
                                        <small class="text-muted" id="namaProduk">Cupang</small>
                                      </div>
                                      <span class="text-muted" id="hargaProduk"></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between bg-light">
                                      <div class="text-success">
                                        <h6 class="">Kode Promo</h6>
                                        <small>PROMOAKHIRTAHUN</small>
                                      </div>
                                      <span class="text-success" id="promo">-Rp 5000</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                      <span>Total</span>
                                      <strong id="total"></strong>
                                    </li>
                                  </ul>
                                  <form class="card p-2">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Promo code">
                                      <button type="submit" class="btn btn-secondary">Redeem</button>
                                    </div>
                                  </form>
                                </div>
                                <div class="col-md-8 col-lg-8">
                                  <h4 class="mb-3">Alamat Pengiriman</h4>
                                  <form class="needs-validation" novalidate>
                                    <div class="row g-3">
                                      <div class="col-sm-6 mt-2">
                                        <label for="firstName" class="form-label">Nama Depan</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                        <div class="invalid-feedback">
                                          Nama Depan is required.
                                        </div>
                                      </div>
                          
                                      <div class="col-sm-6 mt-2">
                                        <label for="lastName" class="form-label">Nama Belakang</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                        <div class="invalid-feedback">
                                         Nama Depan is required.
                                        </div>
                                      </div>
                          
                                      <div class="col-12 mt-2">
                                        <label for="username" class="form-label">Username</label>
                                        <div class="input-group">
                                          <input type="text" class="form-control" id="username" placeholder="Username" required>
                                        <div class="invalid-feedback">
                                            Your username is required.
                                          </div>
                                        </div>
                                      </div>
                          
                                      <div class="col-12 mt-2">
                                        <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                        <div class="invalid-feedback">
                                          Please enter a valid email address for shipping updates.
                                        </div>
                                      </div>
                          
                                      <div class="col-12 mt-2">
                                        <label for="address" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                                        <div class="invalid-feedback">
                                          Please enter your shipping address.
                                        </div>
                                      </div>
                                      <div class="col-md-12 mt-2">
                                        <label for="country" class="form-label">Provinsi</label>
                                        <select class="form-control col-md" id="country" required>
                                          <option value="">Pilih...</option>
                                          <option>Jawa Tengah</option>
                                        </select>
                                        <div class="invalid-feedback">
                                          Please select a valid country.
                                        </div>
                                      </div>
                          
                                      <div class="col-md-12 mt-4">
                                        <label for="state" class="form-label">Kabupaten/Kota</label>
                                        <select class="form-control col-md" id="state" required>
                                          <option value="">Pilih...</option>
                                          <option>Semarang</option>
                                          <option>Brebes</option>
                          
                                        </select>
                                        <div class="invalid-feedback">
                                          Please provide a valid state.
                                        </div>
                                      </div>
                          
                                      <div class="col-md-12 mt-4">
                                        <label for="zip" class="form-label">Kode Pos</label>
                                        <input type="text" class="form-control" id="zip" placeholder="" required>
                                        <div class="invalid-feedback">
                                          Kode Pos required.
                                        </div>
                                      </div>
                                    </div>
                          
                                    <hr class="my-4">
                          
                                    <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="same-address" required>
                                      <label class="form-check-label" for="same-address">Alamat Pengiriman ini adalah valid</label>
                                    </div>
                          
                                    <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="save-info" required>
                                      <label class="form-check-label" for="save-info">Simpan Informasi Ini Untuk Pembelian Selanjutnya</label>
                                    </div>
                          
                                    <hr class="my-4">
                          
                                    <h4 class="mb-3">Pembayaran</h4>
                          
                                    <div class="my-3">
                                      <div class="form-check">
                                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                        <label class="form-check-label" for="credit">Bank Mandiri</label>
                                      </div>
                                      <div class="form-check">
                                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                        <label class="form-check-label" for="debit">OVO</label>
                                      </div>
                                      <div class="form-check">
                                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                        <label class="form-check-label" for="paypal">Indomaret</label>
                                      </div>
                                    </div>
                                  
                                </div>
                              </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>
                          <button class="btn btn-primary btn-lg" type="submit">Lanjut Pembayaran</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                  </form>
                    
                    <div class="card shadow p-3 mb-5 ">
                        <div class="card-header bg-white">
                          <h5>Ulasan</h5>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Mrs. Sellyboy</h5>
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                          <p class="card-text">Cupangnya keren abis</p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mr. Abingku</h5>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <p class="card-text">Cupangnya Mantap keren</p>
                          </div>
                      </div>
                    
                </div>
                
            </div>
        </div>
    </section>

    <footer>
      <p class="text-center p-4">
        &copy; 2020 Kelompok 1 <a href="#">Pricavy</a> , <a href="#">Terms</a>
      </p>
    </footer>
    
    
    
    
    

    



    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/form-validation.js"></script>
    <script src="js/form-checkout.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>