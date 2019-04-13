<?
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

    private static $tb_admin = 'tb_admin';

    public function check($where){
        return $this->db->get_where(self::$tb_admin, $where);
    }

}

/* End of file M_auth.php */
