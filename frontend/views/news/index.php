<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<center><h1>News</h1></center>
<?php foreach ($news as $myNews):
$myUrl = Url::to(['news/view-news', 'idNews' => $myNews->IdNews],true);
?>
<center><h3><?= Html::a( $myNews->TitleNews , $myUrl) ?></h3></center>
<br>
<?= Html::encode("{$myNews->DescriptionNews}") ?>
<?php endforeach; ?>


