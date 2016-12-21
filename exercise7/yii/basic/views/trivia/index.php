<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Trivia</h1>
<ul>
<?php foreach ($trivia as $trivias): ?>
    <li>
        <?= Html::encode("{$trivias->trivia} ({$trivias->answer})") ?>:
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>

