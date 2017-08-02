<?php 
			session_start();

            if (! isset($_SESSION['admin']))

            {

                redirect('admin/login');

                exit();

            }