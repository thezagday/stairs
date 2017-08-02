<?php
include_once 'header.php';
?>
<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Редактирование раздела "Почему выбирают нас?"</h1>
        <p class="title-bar-description">Тут вы можете добавить причину в раздел "Почему выбирают нас?"</p>
        <div class="row">
            <div class="col-md-8">
                <div class="demo-form-wrapper">
    <form action="add_choose" method="post" class="form form-horizontal">
       
    <p>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Заголовок</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="title" value="">
            </div>
        </div>
        
     <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Контент</label>
            <div class="col-sm-9">
                <textarea id="message" class="form-control" rows="5" name ="content" ></textarea>
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



