<?
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('back/authentic/M_auth');
        
    }
    public function index(){
        $this->load->view('back/auth/v_login_page');
    }

    public function login(){
        $username   = $this->input->post('username', TRUE);
        $pass       = $this->input->post('pass', TRUE);

        $where = array(
                'username' => $username,
                'password' => md5($pass)
        );

        $check = $this->M_auth->check($where)->num_rows();

        if($check > 0){
                $row = array(
                    'tb_admin' => TRUE,
                    'id_admin' => id_admin,
                    'username' => $username
                );
                $this->session->set_userdata($row);
                redirect('admin');
        }
        else{
            $this->session->set_flashdata('notif',
               '<div class="callout callout-danger">
                    <h4>Reminder!</h4>
                    <p>Username atau Password salah!</p>
                </div>'
            );
            redirect('login');
        }
    }

    public function logout() {
		$this->session->sess_destroy();
		redirect('login');
	}

}

/* End of file Auth.php */
