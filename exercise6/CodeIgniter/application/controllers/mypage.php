<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mypage extends CI_Controller {

    public function index()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('mypage_view');
    }
}
?>