<?php
include_once 'header.php';
?>
<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Редактирование рекомендаций</h1>
        <p class="title-bar-description">Тут вы можете отредактировать рекомендации</p>
        <div class="row">
            <div class="col-md-8">
                <div class="demo-form-wrapper">
    <form action="update_recommendations" method="post" class="form form-horizontal" enctype="multipart/form-data">
    
        <p><input type="hidden" name="id" value="<?=$item_recommendations[0]['id']?>" /></p>
        
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Заголовок</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="title" value="<?=$item_recommendations[0]['title']?>">
            </div>
         </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Контент</label>
            <div class="col-sm-9">
            <textarea id="message" class="form-control" rows="5" name ="content" ><?=$item_recommendations[0]['content']?></textarea>
            </div>
         </div>
         
          <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Картинка</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="img_path" value="<?=$item_recommendations[0]['img_path']?>">
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

