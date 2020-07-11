<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
        $data['title'] = 'WPU User Registration';
        $data = $this->mymodel->getAllFilm();
        $output = array('data' => $data);
        $this->load->view('header', $data);
        $this->load->view('admin', $output);
    }

    public function tambah()
    {
        if($this->mymodel->tambahDataFilm($_POST) > 0 ) {
            // Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            redirect("admin");
            exit;
        } else {
            // Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            redirect("admin");
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->mymodel->hapusDataFilm($id) > 0 ) {
            // Flasher::setFlash('berhasil', 'dihapus', 'success');
            redirect("admin");
            exit;
        } else {
            // Flasher::setFlash('gagal', 'dihapus', 'danger');
            redirect("admin");
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->mymodel->getFilmById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->mymodel->ubahDataFilm($_POST) > 0 ) {
            // Flasher::setFlash('berhasil', 'diubah', 'success');
            redirect("admin");
            exit;
        } else {
            // Flasher::setFlash('gagal', 'diubah', 'danger');
            redirect("admin");
            exit;
        } 
    }
}
