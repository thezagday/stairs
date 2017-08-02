<?php
include_once 'header.php';
?>
<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Редактирование отзыва</h1>
        <p class="title-bar-description">Тут вы можете отредактировать отзыв</p>
        <div class="row">
            <div class="col-md-8">
                <div class="demo-form-wrapper">
    <form action="update_reviews" method="post" class="form form-horizontal" enctype="multipart/form-data">
  
        <p><input type="hidden" name="id" value="<?=$item_reviews[0]['id']?>" /></p>
        
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Имя</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="name" value="<?=$item_reviews[0]['name']?>">
            </div>
         </div>
        
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Город</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="city" value="<?=$item_reviews[0]['city']?>">
            </div>
         </div>
         
          <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Контент</label>
            <div class="col-sm-9">
                <textarea id="message" class="form-control" rows="5" name ="content" ><?=$item_reviews[0]['content']?></textarea>
            </div>
         </div>
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Картинка</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="img_path" value="<?=$item_reviews[0]['img_path']?>">
                <input id="form-control-1" class="form-control" type="file" name="userfile" value="">
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


