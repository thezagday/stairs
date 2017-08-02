<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Scroll Media</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url()?>assets/favicon-32x32.png" sizes="32x32">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/vendor.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/elephant.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/application.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  </head>
  <body class="layout layout-header-fixed layout-sidebar-fixed">
    <div class="layout-header">
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand navbar-brand-center" href="<?= base_url()?>">
            <img class="navbar-brand-logo" src="<?= base_url()?>assets/images/logo-inverse.svg" alt="Scroll-logo">
          </a>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
            <span class="sr-only">Toggle navigation</span>
            <span class="bars">
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
            </span>
            <span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
          </button>
        </div>
        <div class="navbar-toggleable">
          <nav id="navbar" class="navbar-collapse collapse">
            <button class="sidenav-toggler hidden-xs" title="Свернуть меню" aria-expanded="true" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
                <span class="bar-line bar-line-4 in"></span>
                <span class="bar-line bar-line-5 in"></span>
                <span class="bar-line bar-line-6 in"></span>
              </span>
            </button>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <p class="navbar-text text-center"> <a href="../" target="_blank">Просмотреть сайт</a> <b>|</b> <a href="login?do=logout">Выйти</a></p>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="layout-main">
      <div class="layout-sidebar">
        <div class="layout-sidebar-backdrop"></div>
        <div class="layout-sidebar-body">
          <div class="custom-scrollbar">
            <nav id="sidenav" class="sidenav-collapse collapse">
              <ul class="sidenav">
                <li class="visible-xs-block text-center"><br><p>Вы вошли как: <b>admin</b>. <a href="../">Выйти</a></p></li>
                <li class="sidenav-heading">Scroll Media</li><!-- или если не указана, то вставляем ФИО -->
                <li class="sidenav-item">
                  <a href="edit_menu">
               
                    <span class="sidenav-icon icon icon-bars"></span>
                    <span class="sidenav-label">Меню</span>
                  </a>
                </li>
                 <li class="sidenav-item">
                  <a href="edit_phone">
                    <span class="sidenav-icon icon  icon-mobile"></span>
                    <span class="sidenav-label">Телефон</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="edit_top_text" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-file-text"></span>
                    <span class="sidenav-label">Шапка</span>
                  </a>
                </li>
                 <li class="sidenav-item">
                  <a href="edit_chooses">
                    <span class="sidenav-icon icon  icon-group"></span>
                    <span class="sidenav-label">Почему выбирают нас?</span>
                  </a>
                </li>
                 <li class="sidenav-item">
                  <a href="edit_pine_stairs">
                    <span class="badge badge-success"><?=$this->db->count_all('pine_stairs');?></span>
                    <span class="sidenav-icon icon  icon-tree"></span>
                    <span class="sidenav-label">Лестницы из сосны</span>
                  </a>
                </li>
                  <li class="sidenav-item">
                  <a href="edit_larch_stairs">
                    <span class="badge badge-success"><?=$this->db->count_all('larch_stairs');?></span>
                    <span class="sidenav-icon icon  icon-tree"></span>
                    <span class="sidenav-label">Лестницы из лиственницы</span>
                  </a>
                </li>
                 <li class="sidenav-item">
                  <a href="edit_ash_tree_stairs">
                    <span class="badge badge-success"><?=$this->db->count_all('ash_tree_stairs');?></span>
                    <span class="sidenav-icon icon  icon-tree"></span>
                    <span class="sidenav-label">Лестницы из ясеня</span>
                  </a>
                </li>
                 <li class="sidenav-item">
                  <a href="edit_oak_stairs">
                    <span class="badge badge-success"><?=$this->db->count_all('oak_stairs');?></span>
                    <span class="sidenav-icon icon  icon-tree"></span>
                    <span class="sidenav-label">Лестницы из дуба</span>
                  </a>
                </li>
                 <li class="sidenav-item">
                  <a href="edit_feedback">
                    <span class="sidenav-icon icon  icon-volume-control-phone"></span>
                    <span class="sidenav-label">Обратная связь</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="edit_accessories">
                    <span class="badge badge-primary"><?=$this->db->count_all('accessories');?></span>
                    <span class="sidenav-icon icon  icon-stethoscope"></span>
                    <span class="sidenav-label">Аксессуары</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="edit_how_work">
                    <span class="sidenav-icon icon  icon-industry"></span>
                    <span class="sidenav-label">Как мы работаем</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="edit_recommendations">
                    <span class="sidenav-icon icon  icon-check-square-o"></span>
                    <span class="sidenav-label">Нас рекомендуют друзьям</span>
                  </a>
                </li>
                 <li class="sidenav-item">
                  <a href="edit_reviews">
                    <span class="badge badge-warning"><?=$this->db->count_all('reviews');?></span>  
                    <span class="sidenav-icon icon  icon-commenting"></span>
                    <span class="sidenav-label">Отзывы наших клиентов</span>
                  </a>
                </li>
                  <li class="sidenav-item">
                  <a href="edit_footer">
                    <span class="sidenav-icon icon  icon-thumb-tack"></span>
                    <span class="sidenav-label">Footer</span>
                  </a>
                </li>
                  <li class="sidenav-item">
                  <a href="edit_social">
                    <span class="sidenav-icon icon  icon-thumbs-o-up"></span>
                    <span class="sidenav-label">Социальные сети</span>
                  </a>
                </li>
                  <li class="sidenav-item">
                  <a href="change_password">
                    <span class="sidenav-icon icon  icon-cog"></span>
                    <span class="sidenav-label">Смена пароля</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      