<?php

namespace yii2bundle\article\domain\fixtures;

use yii\test\ActiveFixture;

class ArticleCategoriesFixture extends ActiveFixture
{
	public $tableName = '{{%article_categories}}';
	public $depends = [
		'yii2bundle\article\domain\fixtures\ArticleCategoryFixture',
		'yii2bundle\article\domain\fixtures\ArticleFixture',
	];
}