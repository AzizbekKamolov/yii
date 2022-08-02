<?php

/** @var yii\web\View $this */
/** @var yii\widgets\ActiveForm $form */

/** @var app\models\User $model */

use yii\widgets\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username')->textInput(); ?>
    <?= $form->field($model, 'email')->textInput(); ?>
    <?= $form->field($model, 'password')->passwordInput(); ?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?=
            Html::submitButton('Register', ['class' => 'btn btn-success'])
            ?>
        </div>
    </div>
    <?php ActiveForm::end();?>

    <p>Please fill out the following fields to Register:</p>

</div>
</div>
