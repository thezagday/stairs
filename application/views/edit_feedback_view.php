<?php
include_once 'header.php';
?>

<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Редактирование раздела "Обратная связь"</h1>
        <p class="title-bar-description">Тут вы можете отредактировать раздел "Обратная связь"</p>
        <div class="row">
            <div class="col-md-8">
                <div class="demo-form-wrapper">

    <form action="update_feedback" method="post" class="form form-horizontal">
    <p>
        <input type="hidden" name="id" value="<?=$feedback[0]['id']?>" />
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Заголовок</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="title" value="<?=$feedback[0]['title']?>">
            </div>
         </div>
    
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Скидка</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="discount" value="<?=$feedback[0]['discount']?>">
            </div>
         </div>
         
          <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Код</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="phone_code" value="<?=$feedback[0]['phone_code']?>">
            </div>
         </div>
    
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Номер</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="phone_number" value="<?=$feedback[0]['phone_number']?>">
            </div>
         </div>
    
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Текст</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="promo_title" value="<?=$feedback[0]['promo_title']?>">
            </div>
         </div>
         
          <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Промокод</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="promo_code" value="<?=$feedback[0]['promo_code']?>">
            </div>
         </div>
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Контент</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="content" value="<?=$feedback[0]['content']?>">
            </div>
         </div>
    </p>
     <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1"></label>
            <div class="col-sm-9">
                <button type="submit" class="btn-primary" id="input_btn">Сохранить</button>
            </div>
      </div>
    </form>
</div>
     </div>
       </div>
    </div>
</div>
                
                
<?php
include_once 'footer.php';
