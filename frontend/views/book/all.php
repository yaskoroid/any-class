<?php

use yii\helpers\Url;

?>
<div class="site-index">
    <div class="jumbotron">
        <h1>All books</h1>
        <?php if ($error) { ?>
            <h2><?= $error ?></h2>
        <?php } else { ?>
            <?php foreach ($books as $key => $book) { ?>
                <?php if ($key % 3 === 0) echo '<div class="row">' ?>
                    <div class="col-lg-4">
                        <h2><?= $book->title ?></h2>
                        <p><?= substr($book->content, 0, 150) ?>...</p>
                        <span class="text-dark"><?= (new DateTime($book->date))->format('Y') ?> y.</span>
                        <p><a class="btn btn-primary" href="<?= Url::to(['book/one', 'id' => $book->id]) ?>">Read</a>
                        </p>
                    </div>
                <?php if (($key + 1) % 3 === 0) echo '</div>' ?>
            <?php } ?>
        <?php } ?>
    </div>
</div>