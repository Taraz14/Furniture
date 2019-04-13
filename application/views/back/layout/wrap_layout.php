<?php
    $this->load->view('back/layout/start_header_script');
    $this->load->view('back/layout/top_navbar');
    $this->load->view('back/layout/side_navbar');
    $this->load->view($content);
    $this->load->view('back/layout/footer');
    // $this->load->view('back/layout/side_panel');
    $this->load->view('back/layout/end_script');
?>