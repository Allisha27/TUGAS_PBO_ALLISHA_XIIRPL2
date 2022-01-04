<?php

// Class pegawai (CRUD pegawai)
class pegawai{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

    
    // Method untuk mengambil semua data dari table
    function GetData_All (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

     // Method untuk mengambil semua data dari table jenis lakilaki
     function GetData_All_l (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai where jns_kel='L'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

     // Method untuk mengambil semua data dari table status menikah
     function GetData_All_M (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai where status='M'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

     // Method untuk mengambil semua data dari table status belum menikah
     function GetData_All_B (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai where status='B'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

       // Method untuk mengambil semua data dari table umur 20 sampai 30
       function GetData_All_U5 (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"SELECT * ,TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) AS umur FROM pegawai");
        while($this->data=mysqli_fetch_array($this->query)){
            if (($this->data['umur']>=20)&&($this->data['umur']<=30)) {
                $this->result[]=$this->data;
            }
          
        }
        return $this->result;
    }

     // Method untuk mengambil semua data dari table umur 31 sampai 45
     function GetData_All_U6 (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"SELECT * ,TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) AS umur FROM pegawai");
        while($this->data=mysqli_fetch_array($this->query)){
            if (($this->data['umur']>=31)&&($this->data['umur']<=45)) {
                $this->result[]=$this->data;
            }
          
        }
        return $this->result;
    }

         // Method untuk mengambil semua data dari table Masa kerja 1 - 5 tahun
         function GetData_All_U7 (){

            // Membuat Object dari Class database
            include 'database.php';
            $this->db = new database();
            $this->con=$this->db->Connect();
    
            // perintah Get data
            $this->query=mysqli_query($this->con,"SELECT * ,TIMESTAMPDIFF(YEAR, mulai_kerja, CURDATE()) AS umur FROM pegawai");
            while($this->data=mysqli_fetch_array($this->query)){
                if (($this->data['umur']>=1)&&($this->data['umur']<=5)) {
                    $this->result[]=$this->data;
                }
              
            }
            return $this->result;
        }

        
         // Method untuk mengambil semua data dari table Masa kerja 6 - 10 tahun
         function GetData_All_U8 (){

            // Membuat Object dari Class database
            include 'database.php';
            $this->db = new database();
            $this->con=$this->db->Connect();
    
            // perintah Get data
            $this->query=mysqli_query($this->con,"SELECT * ,TIMESTAMPDIFF(YEAR, mulai_kerja, CURDATE()) AS umur FROM pegawai");
            while($this->data=mysqli_fetch_array($this->query)){
                if (($this->data['umur']>=6)&&($this->data['umur']<=10)) {
                    $this->result[]=$this->data;
                }
              
            }
            return $this->result;
        }

         // Method untuk mengambil semua data dari table Masa kerja 11 - 25 tahun
         function GetData_All_U9 (){

            // Membuat Object dari Class database
            include 'database.php';
            $this->db = new database();
            $this->con=$this->db->Connect();
    
            // perintah Get data
            $this->query=mysqli_query($this->con,"SELECT * ,TIMESTAMPDIFF(YEAR, mulai_kerja, CURDATE()) AS umur FROM pegawai");
            while($this->data=mysqli_fetch_array($this->query)){
                if (($this->data['umur']>=11)&&($this->data['umur']<=25)) {
                    $this->result[]=$this->data;
                }
              
            }
            return $this->result;
        }
}


?>