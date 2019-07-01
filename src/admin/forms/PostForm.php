<?php

namespace yii2bundle\article\admin\forms;

use Yii;
use yii2bundle\article\domain\entities\ArticleEntity;
use yii2bundle\article\domain\entities\PostEntity;
use yii2rails\domain\base\Model;

class PostForm extends Model
{
	
	public $title;
	public $content;

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'title' 		=> Yii::t('main', 'title'),
			'content' 		=> Yii::t('main', 'content'),
		];
	}
	
}
