<?php

    class Dosen_model {
        private $table='dosen';
	    private $db;

        public function __construct(){
            //data source name
            $this->db=new Database;
        }
        public function getAllDsn(){
            $this->db->query('SELECT * FROM '. $this->table);
		return $this->db->resultSet();
        }
    }



?>