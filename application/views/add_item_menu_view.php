<?php
include_once 'header.php';
?>
<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Добавление нового пункта меню</h1>
        <p class="title-bar-description">Добавление нового пункта меню</p>
        <div class="row">
            <div class="col-md-8">
                <div class="demo-form-wrapper">
    <form action="add_item_menu" method="post" class="form form-horizontal">
      
    <p>
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Заголовок</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="title" value="" >
                
                
                
            </div>
         </div>
     <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Ссылка</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="link" value="" >
            </div>
         </div>
      
    </p>
   
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



