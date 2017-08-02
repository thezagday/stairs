<?php
include_once 'header.php';
?>
<div class="layout-content">
    <div class="layout-content-body">
        <h1 class="title-bar-title">Редактирование отзыва</h1>
        <p class="title-bar-description">Тут вы можете отредактировать отзывы ваших посетителей</p>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <form action="add_reviews" method="post">
                <?php foreach ($reviews as $item):?>
                    <div class="list-group">
                        <a class="list-group-item" href="update_reviews?id=<?=$item['id']?>">
                            <div class="media">
                                <div class="pull-left m-r">
                                    <img class="circle" width="40" height="40" src="<?= base_url()?><?= $item['img_path']?>" alt="">
                                </div>
                                <div class="media-middle">
                                    <div class="media-middle media-right">
                                        <span class="icon icon-pencil"></span>
                                    </div>
                                    <div class="clear">
                                        <h5 class="list-group-item-heading"><?=$item['name']?></h5>
                                        <h5 class="list-group-item-heading"><?=$item['city']?></h5>
                                        <small class="truncate"><?=$item['content']?></small>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item" href="delete_reviews?id=<?=$item['id']?>">
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
                <?php endforeach;?>
                    <button type="submit" class="btn-primary" id="input_btn">Добавить</button>
                </form>
            </div>
       </div>
    </div>
</div>
<?php
include_once 'footer.php';
