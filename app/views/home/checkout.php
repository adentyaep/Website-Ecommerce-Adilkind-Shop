
<div class="container pt-5">
    <div class="modal-content">
                          <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLabel">Checkout</h2>
                          </div>
                          <form class="form-group" action="" method="POST">
                            <div class="modal-body col-md">
                                <div class="row g-3">
                                  <div class="col-md-8 order-md mb-5">
                                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                                      <span class="text-muted">Keranjang Belanjamu</span>
                                      <span class="badge bg-warning rounded-pill" id="jml_item" name="jml_item"><?= $_POST['jml_item'];?></span>
                                    </h4>
                                    <ul class="list-group mb-3">
                                      <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                          <h6 class="">Produk</h6>
                                          <small class="text-muted" id="namaGerabah" name="nama_gerabah"><?= $_POST['namaGerabah'];?></small>
                                        </div>
                                        <span class="text-muted" id="hargaGerabah" name="hargaGerabah">Rp. <?= $harga_total = $_POST['hargaGerabah'] * $_POST['jml_item'];?></span>
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
                                        <strong id="harga_total" name="harga_total">Rp. <?= $harga_total-5000;?></strong>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="col-md-8 col-lg-8">
                                    <h4 class="mb-3">Alamat Pengiriman</h4>
                                    <form class="needs-validation" novalidate>
                                      <div class="row">
                                        <div class="col-12 mt-2">
                                          <label for="email" class="form-label">Nama Penerima <span class="text-muted">(Optional)</span></label>
                                          <input type="text" class="form-control" id="email" placeholder="contoh : abdul... ">
                                          <div class="invalid-feedback">
                                            Anda belum mengisi nama pengirim
                                          </div>
                                        </div>
                            
                                        <div class="col-12 mt-2">
                                          <label for="address" class="form-label">Alamat</label>
                                          <input type="text" class="form-control" id="address" placeholder="contoh : jalanin aja dulu...." required>
                                          <div class="invalid-feedback">
                                            Anda belum mengisi alamat
                                          </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                          <label for="country" class="form-label">Provinsi</label>
                                          <select class="form-control col-md" id="country" required>
                                            <option value="">Pilih...</option>
                                            <option>Jawa Tengah</option>
                                          </select>
                                          <div class="invalid-feedback">
                                            Anda belum memilih provinsi
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
                                            Anda belum memilih kabupaten/kota
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