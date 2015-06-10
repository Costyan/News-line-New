<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\News2 */

$this->title = 'Update News2: ' . ' ' . $model->IdNews;
$this->params['breadcrumbs'][] = ['label' => 'News2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdNews, 'url' => ['view', 'id' => $model->IdNews]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="news2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
