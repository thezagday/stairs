<?php
include_once 'header.php';
?>
<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Редактирование раздела "Лестницы из сосны"</h1>
        <p class="title-bar-description">Тут вы можете отредактировать раздел "Лестиницы из сосны"</p>
        <div class="row">
            <div class="col-md-8">
                <div class="demo-form-wrapper">
                    <form action="add_pine_stair" method="post" class="form form-horizontal">
                    <?php foreach ($pine_stairs as $item):?>
                        <input type="hidden" name="id" value="<?=$item['id']?>" disabled="" />
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-control-1"></label>
                            <div class="col-sm-9">
                                <div class="list-group">
                                    <a class="list-group-item" href="edit_pine_stair?id=<?=$item['id']?>">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h5 class="media-heading"><?= $item['title']?></h5>
                                            </div>
                                            <div class="media-middle media-right">
                                                <span class="icon icon-pencil"></span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="delete_pine_stair?id=<?=$item['id']?>">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h5 class="media-heading"><small>Удалить</small></h5>
                                            </div>
                                            <div class="media-middle media-right">
                                                <span class="icon icon-remove"></span>
                                            </div>
                                        </div>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    <?php endforeach;?>
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



