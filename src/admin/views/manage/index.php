<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\helpers\Html;
use yii2rails\extension\web\grid\ActionColumn;
use yii2rails\extension\web\grid\TitleColumn;
use yii2rails\extension\web\helpers\ControllerHelper;

$this->title = Yii::t('article/main', 'list');

$baseUrl = ControllerHelper::getUrl();

$columns = [
	[
		'class' => TitleColumn::class,
		'baseUrl' => $baseUrl,
	],
	/*[
		'attribute' => 'name',
		'label' => Yii::t('main', 'name'),
	],*/
	[
		'class' => ActionColumn::class,
	],
];

?>

<?= GridView::widget([
	'dataProvider' => $dataProvider,
	'layout' => '{summary}{items}',
	'columns' => $columns,
]); ?>

<?= Html::a(Yii::t('action', 'create'), $baseUrl . 'create', ['class' => 'btn btn-success']) ?>