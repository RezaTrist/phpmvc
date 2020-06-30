<?php

class Treatment_model {
    private $table = 'treament';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTreatment()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getTreatmentById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id =:id' );
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataTreatment($data)
    {
        $query = "INSERT INTO treament
                    VALUES
                    ('', :nama, :harga, :deskripsi)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('deskripsi', $data['deskripsi']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}