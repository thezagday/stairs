<!DOCTYPE html>

<html lang="ru">



<head> 

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <title>Лестницы</title>

    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">

    <!-- Main css -->

    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body>

  <nav class="navbar navbar-default" role="navigation">

      <div class="container-fluid">

          <div class="col-lg-offset-2 col-lg-8">

              <div class="navbar-header">

                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">

                      <span class="sr-only">Toggle navigation</span>

                      <span class="icon-bar"></span>

                      <span class="icon-bar"></span>

                      <span class="icon-bar"></span>

                  </button>

                  <a class="navbar-brand" href="<?= base_url()?>">

                      <img src="<?= base_url()?>assets/images/logo.png" alt="logo">

                  </a>

              </div>

      

              <!-- Collect the nav links, forms, and other content for toggling -->

              <div class="collapse navbar-collapse navbar-ex1-collapse">

                  <ul class="nav navbar-nav navbar-left font-bold">

                      <?php foreach ($menu as $item):?>

                      <li><a href="#<?=$item['link']?>"><?=$item['title']?></a></li>

                      <?php endforeach;?>

                  </ul>
                  <ul class="nav navbar-nav navbar-left font-bold">

                      <li>

                        <?php foreach ($phone as $item):?>  

                        <a href="tel:<?= $item['code']?><?= $item['number']?>" class="font-light phone-number"><span class="fa fa-phone"></span> <?= $item['code']?> <span class="font-bold"><?= $item['number']?></span></a>


                        <a href="" class="font-regular underline" data-toggle="modal" data-target="#callbackModal"><?= $item['text']?></a>

                        <?php endforeach;?>
                       <a href="tel:" class="font-light phone-number"><span class="fa fa-phone"></span> + 375 (33)  <span class="font-bold">605-53-64</span></a>
                       <a href="tel:" class="font-light phone-number"><span class="fa fa-phone"></span> + 375 (29)  <span class="font-bold">724-87-47</span></a>

                      </li>
                      
                  </ul>
                       
              </div><!-- /.navbar-collapse -->

          </div>

      </div>

  </nav>

  <div class="container-fluid">

      <div class="row banner text-center">

        <div class="bg">

            <div class="bg-image" style="background-image:url('<?= base_url()?>assets/images/bg-01.jpg');"></div>

        </div>

        <div class="col-lg-offset-2 col-lg-8">

          <h1 class="font-bold text-uppercase"><?=$top_text[0]['title']?></h1>

          <h2 class="font-light text-uppercase"><?=$top_text[0]['field1']?><span>⚫</span><?=$top_text[0]['field2']?><span>⚫</span><?=$top_text[0]['field3']?></h2>

          <form action="<?= base_url()?>home/mail" method="POST" role="form">

              <legend class="font-regular text-uppercase text-center">Отправьте заявку<br>и получите скидку <?=$top_text[0]['discount']?></legend>

              <div class="form-group font-bold">

                  <span class="fa fa-user input-icon"></span>

                  <input type="text" class="form-control" name="name" required="required"  pattern="^[А-Яа-яЁё\s]+$" placeholder="Ваше имя">

                  <span class="fa fa-phone input-icon"></span>

                  <input type="text" class="form-control" name="phone" required="required" placeholder="Номер телефона">

                  <button type="submit" class="btn btn-primary font-regular">Отправить заявку <span class="fa fa-arrow-circle-right"></span></button>

              </div>

          </form>

          <?php

                session_start();

                if(isset($_SESSION['sended']) && ($_SESSION['sended'])) : ?>

                 <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">

                 <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>

               <script>

                swal({

                    title: 'Успешно отправлено!',

                    timer: 3000,

                    type: 'success',

                    showCancelButton: false,

                    showConfirmButton: false

                   });

            </script>

             <?php $_SESSION['sended'] = null; endif; ?>

        </div>

      </div>

      <div class="row advantages">

          <div class="bg">

            <div class="bg-image" style="background-color:white"></div>

        </div>

          <div class="col-lg-offset-2 col-lg-8 text-center">

             <h2 class="title text-uppercase font-bold">Почему выбирают нас</h2>

             <div class="clearfix"></div>

             <?php foreach ($chooses as $item):?>

             <div class="col-xs-12 col-sm-6 col-md-3">

               <div class="adv-icon">

                 <img src="<?= base_url()?>assets/images/icons/star.png" alt="icon">

               </div>

               <h3 class="text-uppercase font-bold"><?=$item['title']?></h3>

               <p class="font-regular"><?= $item['content']?> </p>

             </div>

             <?php endforeach;?>

          </div>

      </div>

      <div class="row products" id="prodblock01">

          <div class="bg">

            <div class="bg-image" style="background-image:url('<?= base_url()?>assets/images/bg-02.jpg')"></div>

        </div>

          <div class="col-lg-offset-2 col-lg-8 text-center">

             <h2 class="title text-uppercase font-bold">Лестницы из сосны</h2>

             <div class="clearfix"></div>

              <?php foreach($pine_stairs as $item):?>

             <div class="col-xs-12 col-sm-6 col-md-4">

               <div class="product-block">

                   <div class="product-image" style="background-image: url('<?= base_url()?><?=$item['img_path']?>')">

                       <a href="" data-toggle="modal" data-target="#productModal" class="product-image-bg" modal-image="<?= base_url()?><?=$item['img_path']?>">

                      <span class="fa fa-eye"></span>

                    </a>

                    <div class="product-price text-left">

                      <b class="font-bold"><?=$item['price_bel']?></b><small class="font-light"><?=$item['currency_bel']?></small>

                      <b class="font-bold"><?=$item['price_rus']?></b><small class="font-light"><?=$item['currency_rus']?></small>

                    </div>

                 </div>

                 <div class="product-info text-center">

                   <h3 class="text-uppercase font-bold"><?=$item['title']?></h3>

                   <div class="hidden-block font-regular text-left">

                     <p><?=$item['params']?></p>

                   </div>

                   <div class="hidden font-regular">

                     <p><?=$item['description']?></p>

                   </div>                   <a href="#buyModal" data-dismiss="modal" onclick="setTimeout(function(){$('#buyModal').modal();}, 450);" class="btn btn-primary font-light text-uppercase">Заказать</a>

                 </div>

               </div>

             </div>

             <?php endforeach;?>

          </div>

      </div>

      <div class="row products" id="prodblock02">

          <div class="bg">

            <div class="bg-image" style="background-image:url('<?= base_url()?>assets/images/bg-03.jpg')"></div>

          </div>

          <div class="col-lg-offset-2 col-lg-8 text-center">

             <h2 class="title text-uppercase font-bold">Лестницы из лиственницы</h2>

             <div class="clearfix"></div>

             <?php foreach($larch_stairs as $item):?>

             <div class="col-xs-12 col-sm-6 col-md-4">

               <div class="product-block">

                 <div class="product-image" style="background-image: url('<?= base_url()?><?= $item['img_path']?>')">

                    <a href="" data-toggle="modal" data-target="#productModal" class="product-image-bg" modal-image="<?= base_url()?><?= $item['img_path']?>">

                      <span class="fa fa-eye"></span>

                    </a>

                    <div class="product-price text-left">

                      <b class="font-bold"><?=$item['price_bel']?></b><small class="font-light"><?=$item['currency_bel']?></small>

                      <b class="font-bold"><?=$item['price_rus']?></b><small class="font-light"><?=$item['currency_rus']?></small>

                    </div>

                 </div>

                 <div class="product-info text-center">

                   <h3 class="text-uppercase font-bold"><?= $item['title']?></h3>

                   <div class="hidden-block font-regular text-left">

                     <p><?= $item['params']?></p>

                   </div>

                   <div class="hidden font-regular">

                     <p><?= $item['description']?></p>

                   </div>                   <a href="#buyModal" data-dismiss="modal" onclick="setTimeout(function(){$('#buyModal').modal();}, 450);" class="btn btn-primary font-light text-uppercase">Заказать</a>

                 </div>

               </div>

             </div>

             <?php endforeach; ?>

          </div>

      </div>

      

      <div class="row products" id="prodblock03">

          <div class="bg">

            <div class="bg-image" style="background-image:url('<?= base_url()?>assets/images/bg-05.jpg')"></div>

          </div>

          <div class="col-lg-offset-2 col-lg-8 text-center">

             <h2 class="title text-uppercase font-bold">Лестницы из ясеня</h2>

             <div class="clearfix"></div>

              <?php foreach($ash_tree_stairs as $item):?>

              <div class="col-xs-12 col-sm-6 col-md-4">

               <div class="product-block">

                 <div class="product-image" style="background-image: url('<?= base_url()?><?= $item['img_path']?>')">

                    <a href="" data-toggle="modal" data-target="#productModal" class="product-image-bg" modal-image="<?= base_url()?><?= $item['img_path']?>">

                      <span class="fa fa-eye"></span>

                    </a>

                    <div class="product-price text-left">

                       <b class="font-bold"><?=$item['price_bel']?></b><small class="font-light"><?=$item['currency_bel']?></small>

                      <b class="font-bold"><?=$item['price_rus']?></b><small class="font-light"><?=$item['currency_rus']?></small>

                    </div>

                 </div>

                 <div class="product-info text-center">

                   <h3 class="text-uppercase font-bold"><?= $item['title']?></h3>

                   <div class="hidden-block font-regular text-left">

                     <p><?= $item['params']?></p>

                   </div>

                   <div class="hidden font-regular">

                     <p><?= $item['description']?></p>

                   </div>                   <a href="#buyModal" data-dismiss="modal" onclick="setTimeout(function(){$('#buyModal').modal();}, 450);" class="btn btn-primary font-light text-uppercase">Заказать</a>

                 </div>

               </div>

             </div>

              <?php endforeach; ?>

          </div>

      </div>

      <div class="row products" id="prodblock04">

          <div class="bg">

            <div class="bg-image" style="background-image:url('<?= base_url()?>assets/images/bg-04.jpg')"></div>

          </div>

          <div class="col-lg-offset-2 col-lg-8 text-center">

             <h2 class="title text-uppercase font-bold">Лестницы из дуба</h2>

             <div class="clearfix"></div>

             <?php foreach($oak_stairs as $item):?>

             <div class="col-xs-12 col-sm-6 col-md-4">

               <div class="product-block">

                 <div class="product-image" style="background-image: url('<?= base_url()?><?= $item['img_path']?>')">

                    <a href="" data-toggle="modal" data-target="#productModal" class="product-image-bg" modal-image="<?= base_url()?><?= $item['img_path']?>">

                      <span class="fa fa-eye"></span>

                    </a>

                    <div class="product-price text-left">

                      <b class="font-bold"><?=$item['price_bel']?></b><small class="font-light"><?=$item['currency_bel']?></small>

                      <b class="font-bold"><?=$item['price_rus']?></b><small class="font-light"><?=$item['currency_rus']?></small>

                    </div>

                 </div>

                 <div class="product-info text-center">

                   <h3 class="text-uppercase font-bold"><?= $item['title']?></h3>

                   <div class="hidden-block font-regular text-left">

                     <p><?= $item['params']?></p>

                   </div>

                   <div class="hidden font-regular">

                     <p><?= $item['description']?></p>

                   </div>                   <a href="#buyModal" data-dismiss="modal" onclick="setTimeout(function(){$('#buyModal').modal();}, 450);" class="btn btn-primary font-light text-uppercase">Заказать</a>

                 </div>

               </div>

             </div>

             <?php endforeach; ?>

          </div>

      </div>

      <div class="row call">

          <div class="bg">

            <div class="bg-image" style="background-color:#f39c12"></div>

          </div>

          <div class="col-lg-offset-2 col-lg-8 text-center">

             <h3 class="font-regular text-uppercase"><?= $feedback[0]['title']?><span class="font-bold"><?= $feedback[0]['discount']?></span></h3>

             <h3 class="font-regular text-uppercase"><?= $feedback[0]['phone_code']?> <b><?= $feedback[0]['phone_number']?></b></h3>

             <h4 class="font-regular text-uppercase"><?= $feedback[0]['promo_title']?> <b><?= $feedback[0]['promo_code']?></b></h4>

             <p class="font-light"><?= $feedback[0]['content']?></p>

              <form action="<?= base_url()?>home/mail" method="POST" role="form">

              <div class="form-group font-bold">

                <div class="col-xs-12 col-sm-6">

                  <span class="fa fa-user input-icon"></span>

                  <input type="text" class="form-control" name="name" required="required"  pattern="^[А-Яа-яЁё\s]+$" placeholder="Ваше имя">

                </div>

                <div class="col-xs-12 col-sm-6">

                  <span class="fa fa-phone input-icon"></span>

                  <input type="text" class="form-control" name="phone" required="required" placeholder="Номер телефона">

                </div>

                  <button type="submit" class="btn btn-danger font-regular">Отправить заявку <span class="fa fa-arrow-circle-right"></span></button>

              </div>

          </form>

          <?php

                //session_start();

                if(isset($_SESSION['sended']) && ($_SESSION['sended'])) : ?>

                 <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">

                 <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>

               <script>

                swal({

                    title: 'Успешно отправлено!',

                    timer: 3000,

                    type: 'success',

                    showCancelButton: false,

                    showConfirmButton: false

                   });

            </script>

             <?php $_SESSION['sended'] = null; endif; ?>

          </div>

      </div>

      <div class="row products" id="prodblock05">

          <div class="bg">

            <div class="bg-image" style="background-image:url('<?= base_url()?>assets/images/bg-05.jpg')"></div>

          </div>

          <div class="col-lg-offset-2 col-lg-8 text-center">

             <h2 class="title text-uppercase font-bold">Аксессуары</h2>

             <div class="clearfix"></div>

             <?php foreach($accessories as $item):?>

             <div class="col-xs-12 col-sm-6 col-md-4">

               <div class="product-block">

                 <div class="product-image" style="background-image: url('<?= base_url()?><?= $item['img_path']?>')">

                    <a href="" data-toggle="modal" data-target="#productModal" class="product-image-bg" modal-image="<?= base_url()?><?= $item['img_path']?>">

                      <span class="fa fa-eye"></span>

                    </a>

                    <div class="product-price text-left">

                      <b class="font-bold"><?=$item['price_bel']?></b><small class="font-light"><?=$item['currency_bel']?></small>

                      <b class="font-bold"><?=$item['price_rus']?></b><small class="font-light"><?=$item['currency_rus']?></small>

                    </div>

                 </div>

                 <div class="product-info text-center">

                   <h3 class="text-uppercase font-bold"><?= $item['title']?></h3>

                   <div class="hidden-block font-regular text-left">

                     <p><?= $item['params']?></p>

                   </div>

                   <div class="hidden font-regular">

                     <p><?= $item['description']?></p>

                   </div>                   <a href="#buyModal" data-dismiss="modal" onclick="setTimeout(function(){$('#buyModal').modal();}, 450);" class="btn btn-primary font-light text-uppercase">Заказать</a>

                 </div>

               </div>

             </div>

             <?php endforeach; ?>

          </div>

      </div>

      <div class="row how-work">

          <div class="bg">

            <div class="bg-image" style="background-color:white"></div>

          </div>

          <div class="col-lg-offset-2 col-lg-8 text-center">

             <h2 class="title text-uppercase font-bold">Как мы работаем</h2>

             <div class="clearfix"></div>

             <?php foreach ($how_work as $item):?>

             <div class="col-xs-12 col-sm-6 col-md-4 how-block">

               <div class="icon">

                 <img src="<?= base_url()?><?=$item['img_path']?>" alt="icon">

               </div>

               <div class="info text-left">

                 <h4 class="text-uppercase font-bold"><?=$item['title']?></h4>

                 <p class="font-regular"><?=$item['content']?></p>

               </div>

             </div>

             <?php endforeach;?>

          </div>

      </div>

      <div class="row advantages adv-white">

          <div class="bg">

            <div class="bg-image" style="background-image:url('<?= base_url()?>assets/images/bg-06.jpg')"></div>

        </div>

          <div class="col-lg-offset-2 col-lg-8 text-center">

             <h2 class="title text-uppercase font-bold">Нас рекомендуют друзьям</h2>

             <div class="clearfix"></div>

             <?php foreach ($recommendations as $item):?>

             <div class="col-xs-6 col-sm-6 col-md-3">

               <div class="adv-icon">

                 <img src="<?= base_url()?><?=$item['img_path']?>" alt="icon">

               </div>

               <h3 class="text-uppercase font-bold"><?=$item['title']?></h3>

               <p class="font-light"><?=$item['content']?></p>

             </div>

             <?php endforeach;?>

          </div>

      </div>

      <div class="row call calc-block">

          <div class="bg">

            <div class="bg-image" style="background-color:#f39c12"></div>

          </div>

          <div class="col-lg-offset-2 col-lg-8 text-center">

             <h3 class="font-bold text-uppercase">Рассчитать лестницу для дома по собственному проекту</h3>

             <form action="<?= base_url()?>home/mail_calculation" method="POST" role="form" enctype="multipart/form-data">

              <div class="form-group font-bold">

                <div class="col-xs-12 col-sm-6">

                  <p class="text-left font-regular">Контактные данные</p>

                  <span class="fa fa-user input-icon"></span>

                  <input type="text" class="form-control" name="name" required="required"  pattern="^[А-Яа-яЁё\s]+$" placeholder="Ваше имя">

                  <span class="fa fa-phone input-icon"></span>

                  <input type="text" class="form-control" name="phone" required="required" placeholder="Номер телефона">

                </div>

                <div class="col-xs-12 col-sm-6 text-left">

                  <p class="font-regular">Высота от пола 1-го этажа до пола 2-го этажа, м</p>

                  <input type="text" class="form-control" name="calc_height" required="required">

                  <p class="font-regular">Размер проема в потолке, м</p>

                  <div style="width: 45%;float:left;display:inline-block;">

                    <small class="font-regular">Ширина, м</small>

                    <input type="text" class="form-control" name="calc_width" required="required">

                  </div>

                  <div style="width: 45%;float:right;display:inline-block;">

                    <small class="font-regular">Длина, м</small>

                    <input type="text" class="form-control" name="calc_length" required="required">

                  </div>

                  <div class="clearfix"></div>

                  <p class="font-regular" style="margin-bottom: 0">Прикрепить файл</p>

                  <label for="file" class="font-bold text-left file-label">

                      <input type="file" id="file" multiple name="userfile">

                    <span class="fa fa-paperclip"></span>

                    Выбрать файл на компьютере

                  </label>

                </div>

                <div class="clearfix"></div>

                  <button type="submit" class="btn btn-danger font-regular">Отправить заявку <span class="fa fa-arrow-circle-right"></span></button>

              </div>

             </form>

             <?php

                //session_start();

                if(isset($_SESSION['sended']) && ($_SESSION['sended'])) : ?>

                 <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">

                 <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>

               <script>

                swal({

                    title: 'Успешно отправлено!',

                    timer: 3000,

                    type: 'success',

                    showCancelButton: false,

                    showConfirmButton: false

                   });

            </script>

             <?php $_SESSION['sended'] = null; endif; ?>  

          </div>

      </div>

      <div class="row comments">

          <div class="bg">

            <div class="bg-image" style="background-color:white"></div>

        </div>

          <div class="col-lg-offset-2 col-lg-8 text-center">

             <h2 class="title text-uppercase font-bold">Отзывы наших клиентов</h2>

             <div class="clearfix"></div>

             <div class="comment-slider-wrapper">

               <div class="comment-image-dots">

                 <?php for ($i=0;$i<$this->db->count_all('reviews');$i++):?>

                 <?php if ($i==0):?>

                 <div class="image-dot active" style="background-image: url('<?= $reviews[$i]['img_path']?>')"></div>

                 <?php else:?>

                 <div class="image-dot" style="background-image: url('<?= $reviews[$i]['img_path']?>')"></div>

                 <?php endif;?>

                 <?php endfor;?>

               </div>

               <div class="comment-slider">

                   <?php foreach ($reviews as $item):?>

                 <div>

                   <p class="font-regular">"<?=$item['content']?>"</p>

                   <div class="comment-name">

                     <p class="font-regular name"><?=$item['name']?></p>

                     <small class="font-regular"><?=$item['city']?></small>

                   </div>

                 </div>

                   <?php endforeach;?>

               </div>

             </div>

             <div class="clearfix"></div>

             <a href="" class="btn btn-primary font-regular" data-toggle="modal" data-target="#commentModal" >Оставить отзыв <span class="fa fa-comment-o"></span></a>

          </div>

      </div>

      <div class="row questions">

          <div class="bg">

            <div class="bg-image" style="background-image:url('<?= base_url()?>assets/images/bg-07.jpg')"></div>

          </div>

          <div class="col-lg-offset-2 col-lg-8 text-left">

            <div class="col-xs-12 col-sm-6">

              <p class="font-bold text-uppercase">Есть вопросы? Отправьте нам сообщение</p>

              <form action="<?= base_url()?>home/mail_footer" method="POST" role="form">

                  <div class="form-group font-bold">

                      <span class="fa fa-user input-icon"></span>

                      <input type="text" class="form-control" name="name" required="required"  pattern="^[А-Яа-яЁё\s]+$" placeholder="Ваше имя">

                      <span class="fa fa-envelope input-icon"></span>

                      <input type="mail" class="form-control" name="mail" required="required" pattern="\S+@[a-z]+.[a-z]+" placeholder="Email">

                      <span class="fa fa-pencil input-icon"></span>

                      <textarea name="text" id="" required="required" rows="10"  pattern="[А-Яа-яЁё]{3,}" placeholder="Сообщение"></textarea>

                      <button type="submit" class="btn btn-primary font-regular">Отправить</span></button>

                  </div>

              </form>

              <?php

                //session_start();

                if(isset($_SESSION['sended']) && ($_SESSION['sended'])) : ?>

                 <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">

                 <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>

               <script>

                swal({

                    title: 'Успешно отправлено!',

                    timer: 3000,

                    type: 'success',

                    showCancelButton: false,

                    showConfirmButton: false

                   });

            </script>

             <?php $_SESSION['sended'] = null; endif; ?>

            </div>

            <div class="col-xs-12 col-sm-6 contacts font-regular">

              <p class="font-bold text-uppercase"><?=$footer[0]['title']?></p>

              <p><?=$footer[0]['text']?></p>

              <br>

              <p><span class="fa fa-map-marker"></span><?=$footer[0]['address']?></p>

              <p><span class="fa fa-phone"></span><?=$footer[0]['phone']?></p>

              <p><span class="fa fa-envelope"></span><?=$footer[0]['mail']?></p>

            </div>

          </div>

      </div>

      <div class="row map">

          <div class="bg">

            <div  id="map_first" style="height:100%;width:100%;"></div>

          </div>

      </div>

      <div class="row footer">

          <div class="bg">

            <div class="bg-image" style="background-color:white"></div>

          </div>

          <div class="col-lg-offset-2 col-lg-8">

            <div class="col-xs-12 col-sm-6 text-left font-bold">

              <small><?=$footer[0]['copyrighted']?></small><br>

              <small>Разработка сайтов: <a href="http://scroll.by/" target="_blank">Scroll Media</a></small>

            </div>

            <div class="col-xs-12 col-sm-6 text-right font-bold">

              <?php foreach ($social as $item):?>

                <a href="<?=$item['link']?>" target="_blank" class="<?=$item['img']?>"></a>

              <?php endforeach;?>

            </div>

          </div>

      

      </div>

  </div>









  <div class="modal fade" id="buyModal">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header text-center">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">

                        <img src="<?= base_url()?>assets/images/icons/cancel.png" alt="close">

                    </button>

                    <h2 class="title text-uppercase font-bold">Заказать</h2>

                </div>

                <div class="modal-body text-center font-regular">

                    <div class="order">

                        <p>Для заказа достаточно позвонить нам по телефону:</p>

                        <div class="col-xs-12 col-sm-6">

                            <a href="" class="font-regular"><img src="<?= base_url()?>assets/images/icons/mts.png" alt="icon"><small class="font-light"><?=$phone[0]['code']?></small><?=$phone[0]['number']?></a>

                        </div>

                        <div class="col-xs-12 col-sm-6">

                            <a href="" class="font-regular"><img src="<?= base_url()?>assets/images/icons/velcom.png" alt="icon"><small class="font-light"><?=$phone[0]['codevel']?></small> <?=$phone[0]['numbervel']?></a>

                        </div>

                        <div class="clearfix"></div>

                    </div>

                    <p class="font-regular">Либо оставьте ваши контактные данные в форме ниже, <br>

                    и наш менеджер сам перезвонит вам, чтобы уточинть детали заказа.</p>

                    <form action="<?= base_url()?>home/mail" method="POST" role="form">

                        <div class="form-group font-bold">

                            <span class="fa fa-user input-icon"></span>

                            <input type="text" class="form-control" name="name" required="required" pattern="^[А-Яа-яЁё\s]+$" placeholder="Ваше имя">

                            <span class="fa fa-phone input-icon"></span>

                            <input type="text" class="form-control" name="phone" required="required" placeholder="Номер телефона">

                            <button type="submit" class="btn btn-primary text-uppercase font-bold">Заказать</button>

                        </div>

                        <br>

                        <small class="font-regular">* Ваши личные данные в безопасности, и не будут переданы третьим лицам.</small>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <div class="modal fade" id="commentModal">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header text-center">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">

                        <img src="<?= base_url()?>assets/images/icons/cancel.png" alt="close">

                    </button>

                    <h2 class="title text-uppercase font-bold">Оставить отзыв</h2>

                </div>

                <div class="modal-body text-center font-regular">

                    <p class="font-regular">Оставьте ваш отзыв в форме ниже.</p>

                    <form action="<?= base_url()?>home/give_feedback" method="POST" role="form" enctype="multipart/form-data">

                        <div class="form-group font-bold">

                            <span class="fa fa-user input-icon"></span>

                            <input type="text" class="form-control" name="name"  pattern="^[А-Яа-яЁё\s]+$"  required="required" placeholder="Ваше имя">

                            <span class="fa fa-phone input-icon"></span>

                            <input type="text" class="form-control" name="phone" placeholder="Номер телефона">

                            <span class="fa fa-pencil input-icon"></span>

                            <input type="text" class="form-control" name="city" required="required"  pattern="[А-Яа-яЁё]{3,}"  placeholder="Город">

                            <textarea name="text" id="" required="required" rows="10" placeholder="Сообщение"  pattern="[А-Яа-яЁё]{1,}"></textarea>

                            <input type="file" name="userfile">

                            <button type="submit" class="btn btn-primary text-uppercase font-bold">Отправить</button>

                        </div>

                        <br>

                        <small class="font-regular">* Ваши личные данные в безопасности, и не будут переданы третьим лицам.</small>

                    </form>

                    <?php

                //session_start();

                if(isset($_SESSION['sended']) && ($_SESSION['sended'])) : ?>

                 <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">

                 <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>

               <script>

                swal({

                    title: 'Успешно отправлено!',

                    timer: 3000,

                    type: 'success',

                    showCancelButton: false,

                    showConfirmButton: false

                   });

            </script>

             <?php $_SESSION['sended'] = null; endif; ?>

                    <?php

                //session_start();

                if(isset($_SESSION['sended']) && ($_SESSION['sended'])) : ?>

                 <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">

                 <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>

               <script>

                swal({

                    title: 'Успешно отправлено!',

                    timer: 3000,

                    type: 'success',

                    showCancelButton: false,

                    showConfirmButton: false

                   });

            </script>

             <?php $_SESSION['sended'] = null; endif; ?>

                </div>

            </div>

        </div>

    </div>

    <div class="modal fade" id="callbackModal">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header text-center">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">

                        <img src="<?= base_url()?>assets/images/icons/cancel.png" alt="close">

                    </button>

                    <h2 class="title text-uppercase font-bold">Заказать звонок</h2>

                </div>

                <div class="modal-body text-center font-regular">

                    <p class="font-regular">Оставьте ваши контактные данные в форме ниже, <br>

                    и наш менеджер сам перезвонит вам.</p>

                    <form action="<?= base_url()?>home/mail" method="POST" role="form">

                        <div class="form-group font-bold">

                            <span class="fa fa-user input-icon"></span>

                            <input type="text" class="form-control" name="name" required="required"  pattern="^[А-Яа-яЁё\s]+$" placeholder="Ваше имя">

                            <span class="fa fa-phone input-icon"></span>

                            <input type="text" class="form-control" name="phone" placeholder="Номер телефона">

                            <button type="submit" class="btn btn-primary text-uppercase font-bold">Отправить</button>

                        </div>

                        <br>

                        <small class="font-regular">* Ваши личные данные в безопасности, и не будут переданы третьим лицам.</small>

                    </form>

                    <?php

                      //session_start();

                       if(isset($_SESSION['sended']) && ($_SESSION['sended'])) : ?>

                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">

                        <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>

                       <script>

                       swal({

                            title: 'Успешно отправлено!',

                            timer: 3000,

                            type: 'success',

                            showCancelButton: false,

                            showConfirmButton: false

                          });

                     </script>

                    <?php $_SESSION['sended'] = null; endif; ?>

                </div>

            </div>

        </div>

    </div>

    <div class="modal fade" id="productModal">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header text-center">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">

                        <img src="<?= base_url()?>assets/images/icons/cancel.png" alt="close">

                    </button>

                    <h2 class="title text-uppercase font-bold"></h2>

                </div>

                <div class="modal-body text-center font-regular">

                    <div class="col-xs-12 col-md-7">

                      <img src="" alt="" class="modal-image img-responsive">

                    </div>

                    <div class="col-xs-12 col-md-5 text-left character"></div>

                    <div class="clearfix"></div>

                </div>

            </div>

        </div>

    </div>





    <a href="#top" class="back-top-link">

      <p id="back-top">

          <img src="<?= base_url()?>assets/images/icons/arrow-up.png" alt="icon">

      </p>

    </a>





  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>

  <script src="<?= base_url()?>assets/js/script.js"></script> 

  <script type="text/javascript" src="https://api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&lang=ru-RU" type="text/javascript"></script>

         <script type="text/javascript">

            ymaps.ready(init);



            function init () {

                var myMap = new ymaps.Map("map_first", {

                        center: [53.119345786419850, 26.01828249999995],

                        zoom: 16

                    });

                

                myMap.controls.add('smallZoomControl');

                // Добавляем все метки на карту.

                 myMap.geoObjects

              .add(new ymaps.Placemark([53.119345786419850, 26.01828249999995], {

                  balloonContent: 'Адрес'

              }, {

                  preset: 'islands#circleDotIcon',

                  iconColor: '#1faee9'

              }));

            }

         </script>

</body>

</html>