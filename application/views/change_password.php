<?php
include_once 'header.php';
?>
<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Смена пароля</h1>
        <!--<p class="title-bar-description">Тут вы можете отредактировать раздел "Лестницы из сосны"</p>-->
        <div class="row">
            <div class="col-md-8">
                <div class="demo-form-wrapper">
                    <form data-toggle="md-validator" method="post" action="change_password">
                        <div class="md-form-group md-label-floating">
                            <input class="md-form-control" type="password" name="old_password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
                            <label class="md-control-label">Старый пароль</label>
                        </div>
                        <div class="md-form-group md-label-floating">
                            <input class="md-form-control" type="password" name="new_password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
                            <label class="md-control-label">Новый пароль</label>
                        </div>
                        <div class="md-form-group md-label-floating">
                            <input class="md-form-control" type="password" name="re_password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
                            <label class="md-control-label">Новый пароль</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" id="input_btn">Изменить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  <?php
include_once 'footer.php';
