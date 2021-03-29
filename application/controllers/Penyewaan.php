<?php


    class Penyewaan extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelTransaction');
        }
        public function process_confirmation(){
            $id_transaction = $this->uri->segment(3);

            $data = array(
                "status" => 1
            );
            $this->ModelTransaction->UpdateStatusPenyewaan($data,$id_transaction);
            $this->session->set_flashdata("pesan", "Data berhasil");
            $this->session->set_flashdata("title", "Sukses");
            $this->session->set_flashdata("type", "success");
            redirect(base_url('dashboard/data_penyewaan'));
        }
        public function cancel_penyewaan(){
            $id_transaction = $this->uri->segment(3);

            $data = array(
            'status' => 5,

            );
            $this->ModelTransaction->cancelTransactionById($data,$id_transaction);
            $this->session->set_flashdata("pesan", "Cancel Data Penyewaan Berhasil");
            $this->session->set_flashdata("title", "Sukses");
            $this->session->set_flashdata("type", "success");
            redirect(base_url('dashboard/data_penyewaan'));
        }
    }