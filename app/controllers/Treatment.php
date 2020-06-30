<?php

class Treatment extends Controller {
    public function index()
    {
        $data['judul'] = 'Treatment List';
        $data['tmn'] = $this->model('Treatment_model')->getAllTreatment();

        $this->view('templates/header', $data);
        $this->view('treatment/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Treatment Detail';
        $data['tmn'] = $this->model('Treatment_model')->getTreatmentById($id);

        $this->view('templates/header', $data);
        $this->view('treatment/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Treatment_model')->tambahDataTreatment($_POST) < 1 ){
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/treatment');
            exit;
        } else {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/treatment');
            exit;
        }
    }

}