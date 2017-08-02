<?php
include_once 'header.php';
?>
<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Редактирование раздела "Социальные сети"</h1>
        <p class="title-bar-description">Тут вы можете отредактировать раздел "Социальные сети"</p>
        <div class="row">
            <div class="col-md-8">
                <div class="demo-form-wrapper">
    <form action="update_social" method="post" class="form form-horizontal" >
    
        <p><input type="hidden" name="id" value="<?=$one_social[0]['id']?>" /></p>
        
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Заголовок</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="title" value="<?=$one_social[0]['title']?>">
            </div>
         </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Ссылка</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="link" value="<?=$one_social[0]['link']?>">
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

