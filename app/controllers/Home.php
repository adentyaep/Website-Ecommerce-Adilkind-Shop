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
            $data['id_gerabah'] = $this->model('Home_model')->getDataById($id);
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
    }
?>