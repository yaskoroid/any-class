<?php

use yii\helpers\Url;

?>
<div class="site-index">
    <div class="jumbotron">
        <h1>All authors</h1>
        <?php if ($error) { ?>
            <h2><?= $error ?></h2>
        <?php } else { ?>
            <?php foreach ($authors as $key => $author) { ?>
                <?php if ($key % 3 === 0) echo '<div class="row">' ?>
                    <div class="col-lg-4">
                        <h2><?= $author->name ?> <?= $author->surname ?></h2>
                        <p>Date of birth: <?= $author->date_of_birth ?></p>
                        <p><a class="btn btn-primary" href="<?= Url::to(['author/one', 'id' => $author->id]) ?>">Author
                                info</a></p>
                    </div>
                <?php if (($key + 1) % 3 === 0) echo '</div>' ?>
            <?php } ?>
        <?php } ?>
    </div>
</div>