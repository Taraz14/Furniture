<?
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('id_admin')){
            $this->session->set_flashdata('notif',
                '<div class="callout callout-danger">
                    <h4>Reminder!</h4>
                    <p>Anda Harus Login!</p>
                </div>'
            );
            redirect('login');
        }
    }
    
    public function index(){
        $data = [
            'content' => 'back/pages/v_product'
        ];
        $this->load->view('back/layout/wrap_layout', $data);
    }
}

/* End of file Produk.php */
