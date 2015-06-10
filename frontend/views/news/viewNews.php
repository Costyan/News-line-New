<?php
use yii\helpers\Html;

$this->title = $viewNews->TitleNews;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

echo Html::encode("{$viewNews->ContentsNews}");
?>


