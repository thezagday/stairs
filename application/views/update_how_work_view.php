<?php
include_once 'header.php';
?>
<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Редактирование раздела "Как мы работаем"</h1>
        <p class="title-bar-description">Тут вы можете отредактировать раздел "Как мы работаем"</p>
        <div class="row">
            <div class="col-md-8">
                <div class="demo-form-wrapper">
    <form action="update_how_work" method="post" class="form form-horizontal" enctype="multipart/form-data">
    
        <p><input type="hidden" name="id" value="<?=$item_how_work[0]['id']?>" /></p>
        
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Заголовок</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="title" value="<?=$item_how_work[0]['title']?>">
            </div>
         </div>
        
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Контент</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="content" value="<?=$item_how_work[0]['content']?>">
            </div>
         </div>
         
          <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Картинка</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="img_path" value="<?=$item_how_work[0]['img_path']?>">
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





