<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
            $this->load->model('page_model');
            
            $data['menu'] = $this->page_model->get_menu();
            $data['phone'] = $this->page_model->get_phone();
            $data['chooses'] = $this->page_model->get_chooses();
            $data['pine_stairs'] = $this->page_model->get_pine_stairs();
            $data['larch_stairs'] = $this->page_model->get_larch_stairs();
            $data['ash_tree_stairs'] = $this->page_model->get_ash_tree_stairs();
            $data['oak_stairs'] = $this->page_model->get_oak_stairs();
            $data['accessories'] = $this->page_model->get_accessories();
            $data['feedback'] = $this->page_model->get_feedback();
            $data['how_work'] = $this->page_model->get_how_work();
            $data['recommendations'] = $this->page_model->get_recommendations();
            $data['reviews'] = $this->page_model->get_reviews();
            $data['footer'] = $this->page_model->get_footer();
            $data['top_text'] = $this->page_model->get_top_text();
            $data['social'] = $this->page_model->get_social();
            
            $this->load->view('home_view',$data);
	}
        
        public function mail()
        {
            session_start();
            
            $subject = "Новая заявка!";
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            
            $mailsend = mail("v.kapuza@ramdler.ru", "$subject", "Имя: $name\nТелефон: $phone"); 
            
            if($mailsend)
            {
                $_SESSION['sended'] = true;
                redirect();
                exit;
            }
        }
        public function mail_footer()
        {
           session_start();
            
            $subject = "Новое сообщение!";
            $name = $this->input->post('name');
            $mail = $this->input->post('mail');
            $text = $this->input->post('text');
            
            $mailsend = mail("v.kapuza@ramdler.ru", "$subject", "Имя: $name\nПочта: $mail\nСообщение: $text"); 
            
            if($mailsend)
            {
                $_SESSION['sended'] = true;
                redirect();
                exit;
            }
        }
        public function mail_calculation()
        {
            session_start();
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $calc_height = $this->input->post('calc_height');
            $calc_width = $this->input->post('calc_width');
            $calc_length = $this->input->post('calc_length');
            
            
            require "upload_img.php";
			if (isset($pictures))
			{
				$file_name = $pictures['upload_data']['file_name'];  // Прикрепляемый файл
			}
			else
			{
				$file_name = '';
			}
            $to = array('','v.kapuza@ramdler.ru'); // кому отправляем
            $subject = 'Новая заявка!'; // Тема письма
            $from = array($name, ""); // От кого отправляем 
 
            // Формируем заголовок 
            $random_hash = md5(date('r', time()));  
            $mime_boundary = "==Multipart_Boundary_x{$random_hash}x";  
            $headers  = 'MIME-Version: 1.0' . "\r\n"; 
            $headers .= 'Content-Type: multipart/mixed; boundary="'.$mime_boundary.'"' . "\r\n"; 
            //$headers .= 'To: '.$to[0].' <'.$to[1].'>' . "\r\n"; 
            //$headers .= 'From: '.$from[0].' <'.$from[1].'>' . "\r\n"; 
 
            $message = "--{$mime_boundary}\n" . 
                "Content-Type:text/html; charset=\"utf-8\"\n" . 
                "Content-Transfer-Encoding: 7bit\n\n";
                // Тут текст письма. Может содержать html теги 
            $message .= 'Имя:' .$name.'<br>Телефон: '.$phone.'<br>Высота от пола 1-го этажа до пола 2-го этажа, м: '.$calc_height.'<br>Размер проема в потолке, м:'.$calc_width.'<br>Ширина, м:'.$calc_length.PHP_EOL;
 
            $fileatt = './assets/my/'.$file_name; // путь к файлу, который хотим отправить
            $fileatt_type = "application/octet-stream"; 
            $fileatt_name = 'photo.jpg';  // Имя файла, которое увидит получатель 
 
            // Читаем вложенный файл
            $file = fopen($fileatt,'rb'); 
            $data = fread($file,filesize($fileatt)); 
            fclose($file);  
 
            $data = chunk_split(base64_encode($data)); // Кодируем наш файлик 
 
            // Вкладываем файл в письмо 
            $message .= "--{$mime_boundary}\n" . 
                "Content-Type: {$fileatt_type};\n" . 
                " name=\"{$fileatt_name}\"\n" . 
                "Content-Transfer-Encoding: base64\n\n" . 
            $data . "\n\n" . 
            "--{$mime_boundary}\n"; 
            unset($data); 
            unset($file); 
            unset($fileatt); 
            unset($fileatt_type); 
            unset($fileatt_name); 
 
            // отправляем письмо 
			
            $mailsend = mail($to[1], $subject, $message, $headers);
            if($mailsend)
            {
                $_SESSION['sended'] = true;
                redirect();
                exit;
            } 

        }
        public function give_feedback()
        {
            session_start();
            $name = $this->input->post('name');
            $city = $this->input->post('city');
            $text = $this->input->post('text');
            $phone = $this->input->post('phone');
            
            require "upload_img.php";
			if (isset($pictures))
			{
				$file_name = $pictures['upload_data']['file_name'];  // Прикрепляемый файл
			}
			else
			{
				$file_name = '';
			}
            $to = array('','v.kapuza@ramdler.ru'); // кому отправляем
            $subject = 'Новый отзыв!'; // Тема письма
            $from = array("$name", ""); // От кого отправляем 
 
            // Формируем заголовок 
            $random_hash = md5(date('r', time()));  
            $mime_boundary = "==Multipart_Boundary_x{$random_hash}x";  
            $headers  = 'MIME-Version: 1.0' . "\r\n"; 
            $headers .= 'Content-Type: multipart/mixed; boundary="'.$mime_boundary.'"' . "\r\n"; 
            //$headers .= 'To: '.$to[0].' <'.$to[1].'>' . "\r\n"; 
            //$headers .= 'From: '.$from[0].' <'.$from[1].'>' . "\r\n"; 
 
            $message = "--{$mime_boundary}\n" . 
                "Content-Type:text/html; charset=\"utf-8\"\n" . 
                "Content-Transfer-Encoding: 7bit\n\n";
                // Тут текст письма. Может содержать html теги 
            $message .= 'Имя:' .$name.'<br>Телефон: '.$phone.'<br>Город: '.$city.'<br><br>Отзыв:'.$text.PHP_EOL;
 
            $fileatt = './assets/my/'.$file_name; // путь к файлу, который хотим отправить
            $fileatt_type = "application/octet-stream"; 
            $fileatt_name = 'photo.jpg';  // Имя файла, которое увидит получатель 
 
            // Читаем вложенный файл
            $file = fopen($fileatt,'rb'); 
            $data = fread($file,filesize($fileatt)); 
            fclose($file);  
 
            $data = chunk_split(base64_encode($data)); // Кодируем наш файлик 
 
            // Вкладываем файл в письмо 
            $message .= "--{$mime_boundary}\n" . 
                "Content-Type: {$fileatt_type};\n" . 
                " name=\"{$fileatt_name}\"\n" . 
                "Content-Transfer-Encoding: base64\n\n" . 
            $data . "\n\n" . 
            "--{$mime_boundary}\n"; 
            unset($data); 
            unset($file); 
            unset($fileatt); 
            unset($fileatt_type); 
            unset($fileatt_name); 
 
            // отправляем письмо 
            $mailsend = mail($to[1], $subject, $message, $headers); 
            if($mailsend)
            {
                $_SESSION['sended'] = true;
                redirect();
                exit;
            }
        }
}
