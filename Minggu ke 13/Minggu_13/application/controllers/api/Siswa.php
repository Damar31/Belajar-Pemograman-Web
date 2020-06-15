<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Siswa extends REST_Controller
{
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $siswa = $this->Siswa_model->getSiswa();
        } else {
            $siswa = $this->Siswa_model->getSiswa($id);
        }

        if ($siswa) {
            $this->response([
                'status' => true,
                'data' => $siswa
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');

        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'provide an id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->Siswa_model->deleteSiswa($id) > 0) {
                //ok
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted'
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                //id not found
                $this->response([
                    'status' => false,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }
    public function index_post() //add data
    {
        $logo = $_FILES['logo'];

        if ($logo = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('logo')) {
                echo "Upload Gagal";
                die();
            } else {
                $logo = $this->upload->data('file_name');
            }
        }
 
        $data = [
            'id' => $this->post('id'),
            'nama' => $this->post('nama'),
            'alamat' => $this->post('alamat'),
            'logo' => $logo,
        ];


        if ($this->Siswa_model->createSiswa($data) > 0) {
                $this->response([
                    'status' => true,
                    'message' => 'new mahasiswa has been created.'
                ], REST_Controller::HTTP_CREATED);
        }else {
                //id not found
                $this->response([
                    'status' => false,
                    'message' => 'failed to create new data'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
    } 

    public function index_put()
    {
        $id = $this->put('id');
        $data = [
        'id' => $this->put('id'),
        'nama' => $this->put('nama'),
        'alamat' => $this->put('alamat'),
        'logo' => $this->put('logo'),
        ];

        if ($this->Siswa_model->updateSiswa($data, $id) > 0) {
                $this->response([
                    'status' => true,
                    'message' => 'new mahasiswa has been updated.'
                ], REST_Controller::HTTP_NO_CONTENT);
        }else {
                //id not found
                $this->response([
                    'status' => false,
                    'message' => 'failed to updated data'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
    }
}
