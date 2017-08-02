<?php
    $config['upload_path']          = './assets/images/icons';
    $config['allowed_types']        = 'gif|jpg|png';
               

    $this->load->library('upload', $config);
                    
    if ( ! $this->upload->do_upload('userfile'))
    {
        $error = array('error' => $this->upload->display_errors());

        $this->load->view('upload_form', $error);
    }
    else
    {
        $pictures = array('upload_data' => $this->upload->data());
    }

