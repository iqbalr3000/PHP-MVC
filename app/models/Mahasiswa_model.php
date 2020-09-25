<?php

class Mahasiswa_model {

    // private $mhs = [
    //     [
    //         "nama" => "Iqbal Ramadhan",
    //         "nrp" => "3456789",
    //         "email" => "iqbal@mail.com",
    //         "jurusan" => "teknik informatika"
    //     ],

    //     [
    //         "nama" => "Iqbal Ramadhan 2",
    //         "nrp" => "872186371268",
    //         "email" => "iqbal2@mail.com",
    //         "jurusan" => "teknik informatika"
    //     ],

    //     [
    //         "nama" => "Iqbal Ramadhan 3",
    //         "nrp" => "3456737618276381289",
    //         "email" => "iqbal3@mail.com",
    //         "jurusan" => "teknik informatika"
    //     ],

    //     [
    //         "nama" => "Iqbal Ramadhan 4",
    //         "nrp" => "34567127718289",
    //         "email" => "iqbal4@mail.com",
    //         "jurusan" => "teknik informatika"
    //     ]
    // ];

    private $dbh; //database handler
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=php_mvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getAllMahasiswa()
    {
        // return $this->mhs;

        $this->stmt = $this->dbh->prepare('SELECT * from mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

    }


}

?>