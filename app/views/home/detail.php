<section id="card" class="card bg-light py-4">        
        <div class="container p-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page" id="namaCupang">Cupang Serit</li>
                </ol>
              </nav>
            <div class="row mb-4">
                <div class="col-md">
                  <form>
                    <div class="card shadow p-3 mb-5" >
                        <img class="card-img-top" src="<?= BASEURL; ?>/gambar/<?= $data['idgerabah']['foto_gerabah']; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" id="namaGerabah" name="cupang"><?= $data['idgerabah']['nama_gerabah']?></h5>
                            <p class="card-text text-justify">Cangkir Asli Kopin Berkualitas </p>
                            <h3 class="card-title" id="hargaIkan" ><?= $data['idgerabah']['harga']?></h3>
                            <i class="fas fa-star"> 4.5</i>
                        </div>
                        <div class="form p-1">
                            <div class="form-group">
                                <select class="form-control col-md-2" id="jml-pesanan">
                                    <option value="jml">Jumlah</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
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
                
                    <div class="card shadow p-3 mb-5 ">
                        <div class="card-header bg-white">
                          <h5>Ulasan</h5>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Mr. Ahmad</h5>
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                          <p class="card-text">Cupangnya keren abis</p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mr. Rudi</h5>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <p class="card-text">Cupangnya Mantap abis</p>
                          </div>
                      </div>
            </div>
        </div>
      </section>