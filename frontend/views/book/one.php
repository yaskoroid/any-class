<?php

use yii\helpers\Url;

?>
<div class="site-index">
    <div class="jumbotron">
        <?php if ($error) { ?>
            <h2><?= $error ?></h2>
        <?php } else { ?>
            <h1><?= $book->title ?></h1>
            <p><?= substr($book->content, 0, 2000) ?>...</p>
            <span><?= (new DateTime($book->date))->format('Y') ?> y.</span>
            <p>
                <a class="btn btn-primary" href="<?= Url::to(['book/all']) ?>">All books</a>
                <a class="btn btn-primary" href="<?= Url::to(['author/one', 'id' => $book->author_id]) ?>">To author</a>
            </p>
        <?php } ?>
    </div>
</div>