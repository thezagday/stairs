<?php
include_once 'header.php';
?>
<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Редактирование раздела "Аксессуары"</h1>
        <p class="title-bar-description">Тут вы можете отредактировать раздел "Аксессуары"</p>
        <div class="row">
            <div class="col-md-8">
                <div class="demo-form-wrapper">
    <form action="edit_accessory" method="post" class="form form-horizontal" enctype="multipart/form-data">
    
        <p><input type="hidden" name="id" value="<?=$accessory[0]['id']?>" /></p>
        
        
          <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Заголовок</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="title" value="<?=$accessory[0]['title']?>" >
            </div>
         </div>
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Параметры</label>
            <div class="col-sm-9">
                <textarea id="message" class="form-control" rows="5" name ="params" ><?=$accessory[0]['params']?></textarea>
            </div>
         </div>
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Цена(бел.)</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="price_bel" value="<?=$accessory[0]['price_bel']?>" />
            </div>
         </div>
    
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Валюта(бел.)</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="currency_bel" value="<?=$accessory[0]['currency_bel']?>" />
            </div>
         </div>
    
      <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Цена(рос.)</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="price_rus" value="<?=$accessory[0]['price_rus']?>" />
            </div>
         </div>
    
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Валюта(рос.)</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="currency_rus" value="<?=$accessory[0]['currency_rus']?>" />
            </div>
         </div>
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Описание</label>
            <div class="col-sm-9">
                <textarea id="message" class="form-control" rows="5" name ="description" ><?=$accessory[0]['description']?></textarea>
            </div>
         </div>
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Картинка</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="img_path" value="<?=$accessory[0]['img_path']?>" >
                <input type="file" id="form-control-1" class="form-control"  name="userfile" value="">
            </div>
         </div>
              
        
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


