<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
    use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model frontend\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?//= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?//= $form->field($model, 'auth_key') ?>

    <?//= $form->field($model, 'password_hash') ?>

    <?//= $form->field($model, 'password_reset_token') ?>

    <?php  echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?//=  echo $form->field($model, 'B_created') ?>
    <?= $form->field($model,'B_created')->widget(DatePicker::className());$model->B_created =date('Y-m-d', strtotime('-7 Hours'));?>

    <?//=  echo $form->field($model, 'E_created') ?>
    <?= $form->field($model,'E_created')->widget(DatePicker::className()) ;$model->B_created =date('Y-m-d', strtotime('-7 Hours'));?>

    

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
