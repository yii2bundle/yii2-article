<?php

namespace yii2bundle\article\domain\entities;

use yii2rails\domain\BaseEntity;

class CategoriesEntity extends BaseEntity {
	
	protected $article_id;
	protected $category_id;
	
	public function fieldType() {
		return [
			'article_id' => 'integer',
			'category_id' => 'integer',
		];
	}

	public function rules() {
		return [
			[['article_id', 'category_id'], 'trim'],
			[['article_id', 'category_id'], 'required'],
		];
	}

}