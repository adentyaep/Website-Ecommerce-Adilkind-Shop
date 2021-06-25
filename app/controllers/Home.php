<?php 
    class Home extends Controller{
        public function index(){
            $data['nama'] = "Adilkind";
            $data['title'] = "Halaman Home";
            $data['idgerabah'] = $this->model('Home_model')->getAllData();
            $this->view('templates/header',$data);
            $this->view('home/index',$data);
            $this->view('templates/footer',$data);
        }

        public function detail($id){
            $data['title'] = 'Detail Barang';
            $data['idgerabah'] = $this->model('Home_model')->getDataById($id);
            $this->view('templates/header', $data);
            $this->view('home/detail', $data);
            $this->view('templates/footer');
        }

        public function kategori($idjenis){
            if($idjenis == 1){
                $data['nama'] = "Adilkind";
                $data['title'] = "Halaman Kategori Cangkir";
                $data['id_jenis'] = $this->model('Home_model')->getDatabyJenis($idjenis);
                $this->view('templates/header', $data);
                $this->view('home/cangkir', $data);
                $this->view('templates/footer');
            }else if($idjenis == 2){
                $data['nama'] = "Adilkind";
                $data['title'] = "Halaman Kategori Mangkok";
                $data['id_jenis'] = $this->model('Home_model')->getDatabyJenis($idjenis);
                $this->view('templates/header', $data);
                $this->view('home/mangkok', $data);
                $this->view('templates/footer');
            }
        }

        public function checkout(){
            $this->view('templates/header');
            $this->view('home/checkout');
            $this->view('templates/footer');
        }

        public function simpanTransaksi(){
            $idpelanggan = "1";
            $idgerabah = $_POST['idgerabah'];
            $nama_gerabah = $_POST['namaGerabah'];
            $jml_item = $_POST['jml_item'];
            $harga = $_POST['hargaGerabah'];
            $harga_total = $_POST['harga_total'];
            $alamat = $_POST['alamat'];
            $namaPenerima = $_POST['nama_penerima'];
            $provinsi = $_POST['provinsi'];
            $kab_kota = $_POST['kab_kota'];
            $kode_pos = $_POST['kode_pos'];
            $no_hp = $_POST['no_hp'];

            // $detAlamat[] = [
            //     $namaPenerima,
            //     $alamat,
            //     $provinsi,
            //     $kab_kota,
            //     $kode_pos,
            //     $no_hp
            // ];
            date_default_timezone_set('Asia/Jakarta');
            $detAlamat = $namaPenerima . " " . $alamat . " " . $provinsi . " " . $kab_kota . " " . $kode_pos . " " . $no_hp;
            $tanggal_pesan = date('y-m-d h:i:s');

            $data['id_transaksi'] = $this->model('Transaksi_model')->tambahTransaksi($idpelanggan,$idgerabah,$nama_gerabah,$jml_item,$harga,$harga_total,$tanggal_pesan,$detAlamat);

        }
    }
?>