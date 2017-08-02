<?php
include_once 'header.php';
?>
<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Редактирование телефона</h1>
        <p class="title-bar-description">Тут вы можете отредактировать раздел с телефоном</p>
        <div class="row">
           <div class="col-md-8">
                <div class="demo-form-wrapper">

    <form action="update_phone" method="post" class="form form-horizontal">
    <p>
        <input type="hidden" name="id" value="<?=$phone[0]['id']?>" />
        
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Код</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="code" value="<?=$phone[0]['code']?>">
            </div>
         </div>
    
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Номер</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="number" value="<?=$phone[0]['number']?>">
            </div>
         </div>
         <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Текст</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="text" value="<?=$phone[0]['text']?>" >
            </div>
         </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Код (Velcome)</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="codevel" value="<?=$phone[0]['codevel']?>" >
            </div>
         </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Velcome</label>
            <div class="col-sm-9">
                <input id="form-control-1" class="form-control" type="text" name="numbervel" value="<?=$phone[0]['numbervel']?>" >
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


