<?php
    class Home_model{
        private $table = 'tb_gerabah';
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getAllData(){
            $this->db->query('SELECT * FROM '.$this->table);
            return $this->db->resultSet();
        }

        public function getDataById($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_gerabah=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }

        public function getDataByJenis($idjenis){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_jenis=:idjenis');
            $this->db->bind('idjenis', $idjenis);
            return $this->db->resultSet();
        }
    }