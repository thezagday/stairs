<?php
include_once 'header.php';
?>
<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Редактирование как мы работаем</h1>
        <p class="title-bar-description">Тут вы можете добавить информацию в раздел "Как мы работаем"</p>
        <div class="row">
            <div class="col-md-8">
                <div class="demo-form-wrapper">
    <form action="add_how_work" method="post" class="form form-horizontal" enctype="multipart/form-data">
        
          <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Заголовок</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="title" value="">
            </div>
         </div>
        
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Контент</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="content" value="">
            </div>
         </div>
         
          <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Картинка</label>
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




