<?php 
    session_start();
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
            if(!isset($_SESSION['login'])){
                $this->view('templates/header');
                $this->view('login/login');
                $this->view('templates/footer');
            }else{
                $this->view('templates/header');
                $this->view('home/checkout');
                $this->view('templates/footer');
            }

            
        }

        public function simpanTransaksi(){
            $idpelanggan = $_POST['idPelanggan'];
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
            $stok = $_POST['stok'];

            $stokAkhir = $stok-$jml_item;


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
            
            $this->model('Home_model')->updateStok($idgerabah, $stokAkhir);

            $data['id_transaksi'] = $this->model('Transaksi_model')->tambahTransaksi($idpelanggan,$idgerabah,$nama_gerabah,$jml_item,$harga,$harga_total,$tanggal_pesan,$detAlamat);
            
            header('location:../home/transaksi');
        }

        public function transaksi(){
            $this->view('templates/header');
            $this->view('home/transaksi');
            $this->view('templates/footer');
        }

        public function login(){
            $this->view('templates/header');
            $this->view('login/login');
            $this->view('templates/footer');
        }
        public function checkLogin(){
            
            $username = $_POST['username'];
            $pass = $_POST['pass'];

            $this->model('Login_model')->checkLogin($username,$pass);

            
                header('location:../home');
            
            
        }

        public function daftar(){
            $this->view('templates/header');
            $this->view('login/tambah');
            $this->view('templates/footer');
        }

        public function tambah(){
            
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $pass = $_POST['pass'];

            $this->model('Login_model')->simpanAkun($nama,$username,$pass);
            session_start();
            header('location:../home');
        }

        public function logout(){

            session_start();
            session_destroy();

            header('location:../home');
        }
    }
?>