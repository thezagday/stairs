<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admin extends CI_Controller {



public function __construct()

        {

                parent::__construct();

                $this->load->helper(array('form', 'url'));

        }	

    public function login()

	{

            if ($_POST == null)

            {

                if ($_GET != null)

                {

                    session_start();

                    unset($_SESSION['admin']);

                    session_destroy();

                }

                

                session_start();

                if (isset($_SESSION['admin']))

                {

                    redirect('admin');

                }

                else

                {

                    $this->load->view('login_view');

                }

            }

            else

            {

                $this->load->model('page_model');

                

                $login = 'admin';

                $data['password'] = $this->page_model->get_password();

                //$password =  '5f4dcc3b5aa765d61d8327deb882cf99'; //password

                $input_login = $this->input->post('login');

                $input_password = $this->input->post('password');

                

                if (($input_login == $login) && ($data['password'][0]['title']) == md5($input_password))

                {

                    session_start();

                    $_SESSION['admin'] = $login;

                    redirect('admin');

                    exit();

                }

                else

                {

                    redirect('admin/login');

                }

            }

	}

        public function change_password()

        {

            if ($_POST == null)

            {

                $this->load->view('change_password');

            }

            else

            {

                $this->load->model('page_model');

                $data['password'] = $this->page_model->get_password();

                $old_password = $this->input->post('old_password');

                $new_password = $this->input->post('new_password');

                $re_password = $this->input->post('re_password');

                if ($data['password'][0]['title'] == md5($old_password) && ($new_password == $re_password))

                {

                    $pass['title'] = md5($new_password);

                    $this->page_model->update_password($pass);

                }

                else

                {

                    redirect('admin/change_password');

                }

            }

        }

        public function admin()
        {
            require "auth.php"; //если авторизован как админ

            $this->load->view('admin_home_view');

        }

        public function edit_menu()

        {

            require "auth.php";

            $this->load->model('page_model');

            $data['menu'] = $this->page_model->get_menu();

            $this->load->view('edit_menu_view',$data);

            

        }

        public function add_item_menu()

        {

            require "auth.php";

            

            if ($_POST == null)

            {

                $this->load->view('add_item_menu_view');

            }

            else

            {

                $data['title'] = $this->input->post('title');

                $data['link'] = $this->input->post('link');

                

                $this->load->model('page_model');

                $this->page_model->add_item_menu($data);

                

                redirect('admin/edit_menu');

            }

            

        }

        public function delete_item_menu()

        {

            require "auth.php";

                $this->load->model('page_model');

                $data['id'] = $this->input->get('id');

                $this->page_model->delete_item_menu($data);

            

                redirect('admin/edit_menu');

            

        }

        public function edit_item_menu()

        {

           require "auth.php";

                $data['id'] = $this->input->get('id');

                $this->load->model('page_model');

                $data['item_menu'] = $this->page_model->get_item_menu($data);

            

                $this->load->view('edit_item_menu_view',$data);

           

        }

        public function update_item_menu()

        {

            

                require "auth.php";

                $id = $this->input->post('id');

                $data['title'] = $this->input->post('title');

                $data['link'] = $this->input->post('linka');

            

                $this->load->model('page_model');

                $this->page_model->update_item_menu($id,$data);

            

                redirect('admin/edit_menu');

           

        }

        public function edit_phone()

        {

            require "auth.php";

                $this->load->model('page_model');

                $data['phone'] = $this->page_model->get_phone();

                $this->load->view('edit_phone_view',$data);

            

        }

        public function update_phone()

        {

            require "auth.php";

                $id = $this->input->post('id');

                $data['code'] = $this->input->post('code');

                $data['number'] = $this->input->post('number');

                $data['text'] = $this->input->post('text');

                $data['codevel'] = $this->input->post('codevel');

                $data['numbervel'] = $this->input->post('numbervel');

            

                $this->load->model('page_model');

                $this->page_model->update_phone($id,$data);

            

                redirect('admin/edit_phone');

            

        }

        public function edit_chooses()

        {

            require "auth.php";

                $this->load->model('page_model');

                $data['chooses'] = $this->page_model->get_chooses();

                $this->load->view('edit_chooses_view',$data);

            

        }

        public function add_choose()

        {

            require "auth.php";

                if ($_POST == null)

                {

                    $this->load->view('add_choose_view');

                }

                else

                {

                    $data['title'] = $this->input->post('title');

                    $data['content'] = $this->input->post('content');

                

                    $this->load->model('page_model');

                    $this->page_model->add_choose($data);

                

                    redirect('admin/edit_chooses');

                }

        }

        public function edit_item_choose()

        {

            require "auth.php";

                $id = $this->input->get('id');

            

                $this->load->model('page_model');

                $data['item_choose'] = $this->page_model->get_item_choose($id);

            

                $this->load->view('edit_item_choose_view',$data);

        }

        public function update_choose()

        {

            require "auth.php";

                $id = $this->input->post('id');

                $data['title'] = $this->input->post('title');

                $data['content'] = $this->input->post('content');

            

                $this->load->model('page_model');

                $this->page_model->update_choose($id,$data);

            

                redirect('admin/edit_chooses');

            

        }

        public function delete_item_choose()

        {

           require "auth.php";

                $this->load->model('page_model');

                $data['id'] = $this->input->get('id');

                $this->page_model->delete_item_choose($data);

            

                redirect('admin/edit_chooses');

            

        }

        public function edit_pine_stairs()

        {

            require "auth.php";

                $this->load->model('page_model');

                $data['pine_stairs'] = $this->page_model->get_pine_stairs();

                $this->load->view('edit_pine_stairs_view',$data);

            

        }

        public function add_pine_stair()

        {

            require "auth.php";

                if ($_POST == null)

                {

                    $this->load->view('add_pine_stair_view');

                }

                else

                {

                    require "upload_img.php";

                    $data['title'] = $this->input->post('title');

                    $data['params'] = $this->input->post('params');

                    $data['price_bel'] = $this->input->post('price_bel');

                    $data['currency_bel'] = $this->input->post('currency_bel');

                    $data['price_rus'] = $this->input->post('price_rus');

                    $data['currency_rus'] = $this->input->post('currency_rus');

                    $data['description'] = $this->input->post('description');

                    if ($pictures['upload_data']['file_name']!=null)

                    {

                    	$data['img_path'] = "assets/my/".$pictures['upload_data']['file_name'];

                    }

                

                    $this->load->model('page_model');

                    $this->page_model->add_pine_stair($data);

                

                    redirect('admin/edit_pine_stairs');

                }

            

        }

        public function delete_pine_stair()

        {

            require "auth.php";

            

                $data['id'] = $this->input->get('id');

                $this->load->model('page_model');

                $this->page_model->delete_pine_stair($data);

            

                redirect('admin/edit_pine_stairs');

            

        }

        public function edit_pine_stair()

        {

            require "auth.php";

                if ($_POST == null)

                {

                    $id = $this->input->get('id');

                    $this->load->model('page_model');

                    $data['pine'] = $this->page_model->get_pine_stair($id);

            

                    $this->load->view('update_pine_stair_view',$data);

                }

                else

                {

                    require "upload_img.php";

                    $id = $this->input->post('id');

                    $data['title'] = $this->input->post('title');

                    $data['params'] = $this->input->post('params');

                    $data['price_bel'] = $this->input->post('price_bel');

                    $data['currency_bel'] = $this->input->post('currency_bel');

                    $data['price_rus'] = $this->input->post('price_rus');

                    $data['currency_rus'] = $this->input->post('currency_rus');

                    $data['description'] = $this->input->post('description');

                    if ($pictures['upload_data']['file_name']!=null)

                    {

                        $data['img_path'] = "assets/my/".$pictures['upload_data']['file_name'];

                    }

                

                    $this->load->model('page_model');

                    $this->page_model->update_pine_stair($id,$data);

                

                    redirect('admin/edit_pine_stairs');

                }

            

        }

        public function edit_larch_stairs()

        {

            require "auth.php";

                $this->load->model('page_model');

                $data['larch_stairs'] = $this->page_model->get_larch_stairs();

                $this->load->view('edit_larch_stairs_view',$data);

            

        }

        public function add_larch_stair()

        {

            require "auth.php";

                if ($_POST == null)

                {

                    $this->load->view('add_larch_stair_view');

                }

                else

                {

                    require "upload_img.php";

                    $data['title'] = $this->input->post('title');

                    $data['params'] = $this->input->post('params');

                    $data['price_bel'] = $this->input->post('price_bel');

                    $data['currency_bel'] = $this->input->post('currency_bel');

                    $data['price_rus'] = $this->input->post('price_rus');

                    $data['currency_rus'] = $this->input->post('currency_rus');

                    $data['description'] = $this->input->post('description');

                    if ($pictures['upload_data']['file_name']!=null)

                    {

                    	$data['img_path'] = "assets/my/".$pictures['upload_data']['file_name'];

                	}

                    $this->load->model('page_model');

                    $this->page_model->add_larch_stair($data);

                

                    redirect('admin/edit_larch_stairs');

                }

            

        }

        public function delete_larch_stair()

        {

            require "auth.php";

                $data['id'] = $this->input->get('id');

                $this->load->model('page_model');

                $this->page_model->delete_larch_stair($data);

            

                redirect('admin/edit_larch_stairs');

            

        }

        public function edit_larch_stair()

        {

           require "auth.php";

                if ($_POST == null)

                {

                    $id = $this->input->get('id');

                    $this->load->model('page_model');

                    $data['larch'] = $this->page_model->get_larch_stair($id);

            

                    $this->load->view('update_larch_stair_view',$data);

                }

                else

                {

                    require "upload_img.php";

                    $id = $this->input->post('id');

                    $data['title'] = $this->input->post('title');

                    $data['params'] = $this->input->post('params');

                    $data['price_bel'] = $this->input->post('price_bel');

                    $data['currency_bel'] = $this->input->post('currency_bel');

                    $data['price_rus'] = $this->input->post('price_rus');

                    $data['currency_rus'] = $this->input->post('currency_rus');

                    $data['description'] = $this->input->post('description');

                    if ($pictures['upload_data']['file_name']!=null)

                    {

                        $data['img_path'] = "assets/my/".$pictures['upload_data']['file_name'];

                    }

                

                    $this->load->model('page_model');

                    $this->page_model->update_larch_stair($id,$data);

                

                    redirect('admin/edit_larch_stairs');

                }

            

        }

        public function edit_ash_tree_stairs()

        {

            require "auth.php";

                $this->load->model('page_model');

                $data['ash_tree_stairs'] = $this->page_model->get_ash_tree_stairs();

                $this->load->view('edit_ash_tree_stairs_view',$data);

            

        }

        public function add_ash_tree_stair()

        {

            require "auth.php";

                if ($_POST == null)

                {

                    $this->load->view('add_ash_tree_stair_view');

                }

                else

                {

                    require "upload_img.php";

                    $data['title'] = $this->input->post('title');

                    $data['params'] = $this->input->post('params');

                    $data['price_bel'] = $this->input->post('price_bel');

                    $data['currency_bel'] = $this->input->post('currency_bel');

                    $data['price_rus'] = $this->input->post('price_rus');

                    $data['currency_rus'] = $this->input->post('currency_rus');

                    $data['description'] = $this->input->post('description');

                    if ($pictures['upload_data']['file_name']!=null)

                    {

                    	$data['img_path'] = "assets/my/".$pictures['upload_data']['file_name'];

                	}

                    $this->load->model('page_model');

                    $this->page_model->add_ash_tree_stair($data);

                

                    redirect('admin/edit_ash_tree_stairs');

                }

            

        }

        public function delete_ash_tree_stair()

        {

            require "auth.php";

                $data['id'] = $this->input->get('id');

                $this->load->model('page_model');

                $this->page_model->delete_ash_tree_stair($data);

            

                redirect('admin/edit_ash_tree_stairs');

            

        }

        public function edit_ash_tree_stair()

        {

           require "auth.php";

                if ($_POST == null)

                {

                    $id = $this->input->get('id');

                    $this->load->model('page_model');

                    $data['ash_tree'] = $this->page_model->get_ash_tree_stair($id);

            

                    $this->load->view('update_ash_tree_stair_view',$data);

                }

                else

                {

                    require "upload_img.php";

                    $id = $this->input->post('id');

                    $data['title'] = $this->input->post('title');

                    $data['params'] = $this->input->post('params');

                    $data['price_bel'] = $this->input->post('price_bel');

                    $data['currency_bel'] = $this->input->post('currency_bel');

                    $data['price_rus'] = $this->input->post('price_rus');

                    $data['currency_rus'] = $this->input->post('currency_rus');

                    $data['description'] = $this->input->post('description');

                    if ($pictures['upload_data']['file_name']!=null)

                    {

                        $data['img_path'] = "assets/my/".$pictures['upload_data']['file_name'];

                    }

                

                    $this->load->model('page_model');

                    $this->page_model->update_ash_tree_stair($id,$data);

                

                    redirect('admin/edit_ash_tree_stairs');

                }

            

        }

        public function edit_oak_stairs()

        {

            require "auth.php";

                $this->load->model('page_model');

                $data['oak_stairs'] = $this->page_model->get_oak_stairs();

                $this->load->view('edit_oak_stairs_view',$data);

            

        }

        public function add_oak_stair()

        {

           require "auth.php";

                if ($_POST == null)

                {

                    $this->load->view('add_oak_stair_view');

                }

                else

                {

                    require "upload_img.php";

                    $data['title'] = $this->input->post('title');

                    $data['params'] = $this->input->post('params');

                    $data['price_bel'] = $this->input->post('price_bel');

                    $data['currency_bel'] = $this->input->post('currency_bel');

                    $data['price_rus'] = $this->input->post('price_rus');

                    $data['currency_rus'] = $this->input->post('currency_rus');

                    $data['description'] = $this->input->post('description');

                    if ($pictures['upload_data']['file_name']!=null)

                    {

                    	$data['img_path'] = "assets/my/".$pictures['upload_data']['file_name'];

                	}

                    $this->load->model('page_model');

                    $this->page_model->add_oak_stair($data);

                

                    redirect('admin/edit_oak_stairs');

                }

            

        }

        public function delete_oak_stair()

        {

            require "auth.php";

                $data['id'] = $this->input->get('id');

                $this->load->model('page_model');

                $this->page_model->delete_oak_stair($data);

            

                redirect('admin/edit_oak_stairs');

            

        }

        public function edit_oak_stair()

        {

            require "auth.php";

                if ($_POST == null)

                {

                    $id = $this->input->get('id');

                    $this->load->model('page_model');

                    $data['oak'] = $this->page_model->get_oak_stair($id);

            

                    $this->load->view('update_oak_stair_view',$data);

                }

                else

                {

                    require "upload_img.php";

                    $id = $this->input->post('id');

                    $data['title'] = $this->input->post('title');

                    $data['params'] = $this->input->post('params');

                    $data['price_bel'] = $this->input->post('price_bel');

                    $data['currency_bel'] = $this->input->post('currency_bel');

                    $data['price_rus'] = $this->input->post('price_rus');

                    $data['currency_rus'] = $this->input->post('currency_rus');

                    $data['description'] = $this->input->post('description');

                    if ($pictures['upload_data']['file_name']!=null)

                    {

                        $data['img_path'] = "assets/my/".$pictures['upload_data']['file_name'];

                    }

                

                    $this->load->model('page_model');

                    $this->page_model->update_oak_stair($id,$data);

                

                    redirect('admin/edit_oak_stairs');

                }

            

        }

        public function edit_accessories()

        {

            require "auth.php";

                $this->load->model('page_model');

                $data['accessories'] = $this->page_model->get_accessories();

                $this->load->view('edit_accessories_view',$data);

            

        }

        public function add_accessory()

        {

           require "auth.php";

                if ($_POST == null)

                {

                    $this->load->view('add_accessory_view');

                }

                else

                {

                    require "upload_img.php";

                    $data['title'] = $this->input->post('title');

                    $data['params'] = $this->input->post('params');

                    $data['price_bel'] = $this->input->post('price_bel');

                    $data['currency_bel'] = $this->input->post('currency_bel');

                    $data['price_rus'] = $this->input->post('price_rus');

                    $data['currency_rus'] = $this->input->post('currency_rus');

                    $data['description'] = $this->input->post('description');

                    if ($pictures['upload_data']['file_name']!=null)

                    {

                    	$data['img_path'] = "assets/my/".$pictures['upload_data']['file_name'];

                	}

                    $this->load->model('page_model');

                    $this->page_model->add_accessory($data);

                

                    redirect('admin/edit_accessories');

                }

            

        }

        public function delete_accessory()

        {

            require "auth.php";

                $data['id'] = $this->input->get('id');

                $this->load->model('page_model');

                $this->page_model->delete_accessory($data);

            

                redirect('admin/edit_accessories');

            

        }

        public function edit_accessory()

        {

           require "auth.php";

                if ($_POST == null)

                {

                    $id = $this->input->get('id');

                    $this->load->model('page_model');

                    $data['accessory'] = $this->page_model->get_accessory($id);

            

                    $this->load->view('update_accessory_view',$data);

                }

                else

                {

                    require "upload_img.php";

                    $id = $this->input->post('id');

                    $data['title'] = $this->input->post('title');

                    $data['params'] = $this->input->post('params');

                    $data['price_bel'] = $this->input->post('price_bel');

                    $data['currency_bel'] = $this->input->post('currency_bel');

                    $data['price_rus'] = $this->input->post('price_rus');

                    $data['currency_rus'] = $this->input->post('currency_rus');

                    $data['description'] = $this->input->post('description');

                    if ($pictures['upload_data']['file_name']!=null)

                    {

                        $data['img_path'] = "assets/my/".$pictures['upload_data']['file_name'];

                    }

                

                    $this->load->model('page_model');

                    $this->page_model->update_accessory($id,$data);

                

                    redirect('admin/edit_accessories');

                }

            

        }

        public function edit_feedback()

        {

           require "auth.php";

                $this->load->model('page_model');

                $data['feedback'] = $this->page_model->get_feedback();

                $this->load->view('edit_feedback_view',$data);

            

        }

        public function update_feedback()

        {

            require "auth.php";

                $id = $this->input->post('id');

                $data['title'] = $this->input->post('title');

                $data['discount'] = $this->input->post('discount');

                $data['phone_code'] = $this->input->post('phone_code');

                $data['phone_number'] = $this->input->post('phone_number');

                $data['promo_title'] = $this->input->post('promo_title');

                $data['promo_code'] = $this->input->post('promo_code');

                $data['content'] = $this->input->post('content');

            

                $this->load->model('page_model');

                $this->page_model->update_feedback($id,$data);

            

                redirect('admin/edit_feedback');

            

        }

        public function edit_how_work()

        {

           require "auth.php";

                $this->load->model('page_model');

                $data['how_work'] = $this->page_model->get_how_work();

                $this->load->view('edit_how_work_view',$data);

            

        }

        public function add_how_work() 

        {

            require "auth.php";

                if ($_POST == null)

                {

                    $this->load->view('add_how_work_view');

                }

                else

                {

                    require "upload_icons.php";

                    $data['title'] = $this->input->post('title');

                    $data['content'] = $this->input->post('content');

                    $data['img_path'] = "assets/images/icons".$pictures['upload_data']['file_name'];



                    $this->load->model('page_model');

                    $this->page_model->add_how_work($data);

                

                    redirect('admin/edit_how_work');

                }

            

        }

        public function delete_how_work()

        {

           require "auth.php";

                $data['id'] = $this->input->get('id');

                $this->load->model('page_model');

                $this->page_model->delete_how_work($data);

            

                redirect('admin/edit_how_work');

            

        }

        public function update_how_work()

        {

           require "auth.php";

                if ($_POST == null)

                {

                    $id = $this->input->get('id');

                    $this->load->model('page_model');

                    $data['item_how_work'] = $this->page_model->get_item_how_work($id);

            

                    $this->load->view('update_how_work_view',$data);

                }

                else

                {

                    require "upload_icons.php";

                    $id = $this->input->post('id');

                    $data['title'] = $this->input->post('title');

                    $data['content'] = $this->input->post('content');

                    if ($pictures['upload_data']['file_name']!=null)

                    {

                        $data['img_path'] = "assets/images/icons/".$pictures['upload_data']['file_name'];

                    }

                

                    $this->load->model('page_model');

                    $this->page_model->update_how_work($id,$data);

                

                    redirect('admin/edit_how_work');

                }

            

        }

        public function edit_recommendations()

        {

            require "auth.php";

                $this->load->model('page_model');

                $data['recommendations'] = $this->page_model->get_recommendations();

                $this->load->view('edit_recommendations_view',$data);

           

        }

        public function add_recommendations()

        {

           require "auth.php";

                if ($_POST == null)

                {

                    $this->load->view('add_recommendations_view');

                }

                else

                {

                    require "upload_img.php";

                    $data['title'] = $this->input->post('title');

                    $data['content'] = $this->input->post('content');

                    $data['img_path'] = "assets/my/".$pictures['upload_data']['file_name'];

                

                    $this->load->model('page_model');

                    $this->page_model->add_recommendations($data);

                

                    redirect('admin/edit_recommendations');

                }

            

        }

        public function delete_recommendations()

        {

           require "auth.php";

                $data['id'] = $this->input->get('id');

                $this->load->model('page_model');

                $this->page_model->delete_recommendations($data);

            

                redirect('admin/edit_recommendations');

            

        }

        public function update_recommendations()

        {

           require "auth.php";

                if ($_POST == null)

                {

                    $id = $this->input->get('id');

                    $this->load->model('page_model');

                    $data['item_recommendations'] = $this->page_model->get_item_recommendations($id);

            

                    $this->load->view('update_recommendations_view',$data);

                }

                else

                {

                    require "upload_img.php";

                    $id = $this->input->post('id');

                    $data['title'] = $this->input->post('title');

                    $data['content'] = $this->input->post('content');

                    if ($pictures['upload_data']['file_name']!=null)

                    {

                        $data['img_path'] = "assets/my/".$pictures['upload_data']['file_name'];

                    }

                

                    $this->load->model('page_model');

                    $this->page_model->update_recommendations($id,$data);

                

                    redirect('admin/edit_recommendations');

                }

            

        }

        public function edit_reviews()

        {

           require "auth.php";

                $this->load->model('page_model');

                $data['reviews'] = $this->page_model->get_reviews();

                $this->load->view('edit_reviews_view',$data);

            

        }

        public function add_reviews() 

        {

           require "auth.php";

                if ($_POST == null)

                {

                    $this->load->view('add_reviews_view');

                }

                else

                {

                    require 'upload_img.php';

                    $data['name'] = $this->input->post('name');

                    $data['city'] = $this->input->post('city');

                    $data['content'] = $this->input->post('content');

                    $data['img_path'] = "assets/my/".$pictures['upload_data']['file_name'];



                    $this->load->model('page_model');

                    $this->page_model->add_reviews($data);

                

                    redirect('admin/edit_reviews');

                }

            

        }

        public function delete_reviews()

        {

            require "auth.php";

                $data['id'] = $this->input->get('id');

                $this->load->model('page_model');

                $this->page_model->delete_reviews($data);

            

                redirect('admin/edit_reviews');

            

        }

        public function update_reviews()

        {

            require "auth.php";

                if ($_POST == null)

                {

                    $id = $this->input->get('id');

                    $this->load->model('page_model');

                    $data['item_reviews'] = $this->page_model->get_item_reviews($id);

            

                    $this->load->view('update_reviews_view',$data);

                }

                else

                {

                    require 'upload_img.php';

                    $id = $this->input->post('id');

                    $data['name'] = $this->input->post('name');

                    $data['city'] = $this->input->post('city');

                    $data['content'] = $this->input->post('content');

                    if ($pictures['upload_data']['file_name']!=null)

                    {

                        $data['img_path'] = "assets/my/".$pictures['upload_data']['file_name'];

                    }

                

                    $this->load->model('page_model');

                    $this->page_model->update_reviews($id,$data);

                

                    redirect('admin/edit_reviews');

                }

            

        }

        public function edit_footer()

        {

            require "auth.php";

                $this->load->model('page_model');

                $data['footer'] = $this->page_model->get_footer();

                $this->load->view('edit_footer_view',$data);

            

        }

        public function update_footer()

        {

            require "auth.php";

                $id = $this->input->post('id');

                $data['title'] = $this->input->post('title');

                $data['text'] = $this->input->post('text');

                $data['address'] = $this->input->post('address');

                $data['phone'] = $this->input->post('phone');

                $data['mail'] = $this->input->post('mail');

                $data['copyrighted'] = $this->input->post('copyrighted');

            

                $this->load->model('page_model');

                $this->page_model->update_footer($id,$data);

            

                redirect('admin/edit_footer');

            

        }

        public function edit_top_text()

        {

          require "auth.php";

                $this->load->model('page_model');

                $data['top_text'] = $this->page_model->get_top_text();

                $this->load->view('edit_top_text_view',$data);

            

        }

        public function update_top_text()

        {

            require "auth.php";

                $id = $this->input->post('id');

                $data['title'] = $this->input->post('title');

                $data['field1'] = $this->input->post('field1');

                $data['field2'] = $this->input->post('field2');

                $data['field3'] = $this->input->post('field3');

                $data['discount'] = $this->input->post('discount');

            

                $this->load->model('page_model');

                $this->page_model->update_top_text($id,$data);

            

                redirect('admin/edit_top_text');

        }

             public function edit_social()

        {

            require "auth.php";

            $this->load->model('page_model');

            $data['social'] = $this->page_model->get_social();

            $this->load->view('edit_social_view',$data);

        }

        public function update_social()

        {

            require "auth.php";

            if ($_POST ==null)

            {

                $this->load->model('page_model');

            

                $id = $this->input->get('id');

            

                $data['one_social'] = $this->page_model->get_one_social($id);

            

                $this->load->view('update_social_view',$data);

            }

            else

            {

                $id = $this->input->post('id');

                $data['title'] = $this->input->post('title');

                $data['link'] = $this->input->post('link');

                



                $this->load->model('page_model');

                $this->page_model->update_social($id,$data);

            

                redirect('admin/edit_social');

            }

        }

        

}

