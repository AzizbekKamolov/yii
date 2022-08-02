<?php

use app\models\Main;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MainSerach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mains';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Main', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'id',
//            'prefix',
            'firstname',
            'lastname',
//            'title',
            'company',
            'phone',
//            'cellphone',
//            'phone2',
//            'address1:ntext',
//            'address2:ntext',
//            'po_box',
//            'zip_code',
            'country',
            'city'=>[
                'attribute' => 'city',
                'value' => function ($model) {
                    if($model->owner_id==Yii::$app->user->id){
                        return $model->city;
                    }
                    else{
                        return '***';
                    }

                },
            ],
//            'language',
//            'owner_id',
            [
                    'label' => 'Category_title',
                'attribute' => 'category',
                'filter' => [1=>'a',2=>'b'],
                'content' => function (Main $model) {
                    return $model->getCategory()->all()[0]->title;
                },
            ],
            [
                'attribute' => 'subcategory',
                'label' => 'SubCategory_title',
                'content' => function (Main $model) {
                    return $model->getSubCategory()->all()[0]->title;
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Main $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]);
    ?>

</div>
