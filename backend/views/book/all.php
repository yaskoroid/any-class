<?php

use yii\helpers\Url;

?>
<div class="site-index">
    <div class="jumbotron">
        <h1>All books</h1>
        <p><a class="btn btn-primary" href="<?= Url::to(['book/']) ?>">CRUD Books</a></p>
        <?php if ($error) { ?>
            <h2><?= $error ?></h2>
        <?php } else { ?>
            <?php foreach ($model as $book) { ?>
                <div class="col-lg-4">
                    <h2><?= $book->title ?> (<?= $book->author->name ?> <?= $book->author->surname ?>)</h2>
                    <p><?= substr($book->content, 0, 150) ?>...</p>
                    <span class="text-dark"><?= (new DateTime($book->date))->format('Y') ?> y.</span>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>