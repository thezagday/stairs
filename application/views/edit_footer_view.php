<?php
include_once 'header.php';
?>
<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Редактирование футера</h1>
        <p class="title-bar-description">Тут вы можете отредактировать футер</p>
        <div class="row">
            <div class="col-md-8">
                <div class="demo-form-wrapper">

                    <form action="update_footer" method="post" class="form form-horizontal">
                    
                    <input type="hidden" name="id" value="<?=$footer[0]['id']?>" />    
                    
                    <div class="form-group">
                       <label class="col-sm-3 control-label" for="form-control-1">Заголовок</label>
                       <div class="col-sm-9">
                        <input id="form-control-1" class="form-control" type="text" name="title" value="<?=$footer[0]['title']?>">
                       </div>
                    </div>
                    
                     <div class="form-group">
                       <label class="col-sm-3 control-label" for="form-control-1">Текст</label>
                       <div class="col-sm-9">
                           <textarea id="message" class="form-control" rows="5" name ="text"><?=$footer[0]['text']?></textarea>
                       </div>
                    </div>
                    
                     <div class="form-group">
                       <label class="col-sm-3 control-label" for="form-control-1">Адрес</label>
                       <div class="col-sm-9">
                        <input id="form-control-1" class="form-control" type="text" name="address" value="<?=$footer[0]['address']?>">
                       </div>
                    </div>
                    
                     <div class="form-group">
                       <label class="col-sm-3 control-label" for="form-control-1">Телефон</label>
                       <div class="col-sm-9">
                        <input id="form-control-1" class="form-control" type="text" name="phone" value="<?=$footer[0]['phone']?>">
                       </div>
                    </div>
                    
                     <div class="form-group">
                       <label class="col-sm-3 control-label" for="form-control-1">Почта</label>
                       <div class="col-sm-9">
                        <input id="form-control-1" class="form-control" type="text" name="mail" value="<?=$footer[0]['mail']?>">
                       </div>
                    </div>
                    
                     <div class="form-group">
                       <label class="col-sm-3 control-label" for="form-control-1">Подвал</label>
                       <div class="col-sm-9">
                        <input id="form-control-1" class="form-control" type="text" name="copyrighted" value="<?=$footer[0]['copyrighted']?>">
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


