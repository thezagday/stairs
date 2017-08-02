<?php
include_once 'header.php';
?>
<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Редактирование раздела "Аксессуары"</h1>
        <p class="title-bar-description">Тут вы можете добавить аксессуар в раздел "Аксессуары"</p>
        <div class="row">
            <div class="col-md-8">
                <div class="demo-form-wrapper">
    <form action="add_accessory" method="post" class="form form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Заголовок</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="title" value="" >
            </div>
         </div>
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Параметры</label>
            <div class="col-sm-9">
                <textarea id="message" class="form-control" rows="5" name ="params" ></textarea>
            </div>
         </div>
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Цена(бел)</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="price_bel" value="">
            </div>
         </div>
    
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Валюта(бел.руб)</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="currency_bel" value="">
            </div>
         </div>
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Цена(рос.)</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="price_rus" value="">
            </div>
         </div>
    
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Валюта(рос.руб)</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="currency_rus" value="">
            </div>
         </div>
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Описание</label>
            <div class="col-sm-9">
                <textarea id="message" class="form-control" rows="5" name ="description" ></textarea>
            </div>
         </div>
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Картинка</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="file" name="userfile" value="" >
            </div>
         </div>
   
    <div class="form-group">
        <label class="col-sm-3 control-label" for="form-control-1"></label>
        <div class="col-sm-9">
            <button type="submit" class="btn-primary" id="input_btn">Добавить</button>
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




