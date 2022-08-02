<?php

use app\models\Main;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Main */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Mains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

?>
<div class="main-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'prefix',
            'firstname',
            'lastname',
            'title',
            'company',
            'phone',
            'cellphone',
            'phone2',
            'address1:ntext',
            'address2:ntext',
            'po_box',
            'zip_code',
            'country',
            'city',
            'language',
            'owner_id',
            [
                'attribute' => 'category',
                'label' => 'Category_title',
                'value' => function (Main $model) {
                    return $model->getCategory()->all()[0]->title;
                },
            ],
            [
                'label' => 'SubCategory_title',
                'attribute' => 'subcategory',
                'value' => function (Main $model) {
                    return $model->getSubCategory()->all()[0]->title;
                },
            ],
        ],
    ]) ?>

</div>
