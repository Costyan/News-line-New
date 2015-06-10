<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\News2 */

$this->title = 'Create News2';
$this->params['breadcrumbs'][] = ['label' => 'News2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
