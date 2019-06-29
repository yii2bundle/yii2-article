<?php

namespace yii2module\article\domain\repositories\ar;

use yii2rails\domain\enums\RelationEnum;
use yii2rails\domain\BaseEntity;
use yii2rails\extension\activeRecord\repositories\base\BaseActiveArRepository;

class ArticleRepository extends BaseActiveArRepository {
	
	public function tableName()
	{
		return 'article_post';
	}
	
	public function uniqueFields() {
		return [
			['name'],
			['title'],
		];
	}
	
	public function relations() {
		return [
			'categories' => [
				'type' => RelationEnum::MANY_TO_MANY,
				'via' => [
					'id' => 'article.categories',
					'this' => 'article',
					'foreign' => 'category',
				],
			],
		];
	}
	
	protected function initQuery() {
		$this->query = $this->model->find()->where(['is_deleted' => '0']);
	}

	public function delete(BaseEntity $entity) {
		$entity->is_deleted = 1;
		$this->update($entity);
	}

}
