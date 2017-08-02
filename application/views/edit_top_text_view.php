<?php
include_once 'header.php';
?>

<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Редактирование слогана</h1>
        <p class="title-bar-description">Тут вы можете отредактировать раздел со слоганом, а также скидку по заявке.</p>
        <div class="row">
            <div class="col-md-8">
                <div class="demo-form-wrapper">

    <form action="update_top_text" method="post" class="form form-horizontal">
    <p>
        <input type="hidden" name="id" value="<?=$top_text[0]['id']?>" />
        
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Заголовок</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="title" value="<?=$top_text[0]['title']?>">
            </div>
         </div>
    
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Поле 1</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="field1" value="<?=$top_text[0]['field1']?>">
            </div>
         </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Поле 2</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="field2" value="<?=$top_text[0]['field2']?>">
            </div>
         </div>
    
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Поле 3</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="field3" value="<?=$top_text[0]['field3']?>">
            </div>
         </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Скидка</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="discount" value="<?=$top_text[0]['discount']?>">
            </div>
         </div>
    </p>
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

