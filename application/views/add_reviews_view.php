<?php
include_once 'header.php';
?>
<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Добавление нового отзыва</h1>
        <p class="title-bar-description">Тут вы можете добавить отзыв</p>
        <div class="row">
            <div class="col-md-8">
                <div class="demo-form-wrapper">
    <form action="add_reviews" method="post" class="form form-horizontal" enctype="multipart/form-data">
        
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Имя</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="name" value="">
            </div>
         </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Город</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="city" value="">
            </div>
         </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Отзыв</label>
            <div class="col-sm-9">
                <textarea id="message" class="form-control" rows="5" name ="content" ></textarea>
            </div>
         </div>
         
          <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Фото</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="file" name="userfile" value="">
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
