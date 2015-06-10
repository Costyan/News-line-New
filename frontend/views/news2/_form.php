<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TitleNews')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DescriptionNews')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ContentsNews')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DateNews')->textInput() ?>

    <?= $form->field($model, 'Author')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
