<?php

namespace yii2module\article\domain\repositories\ar;

use yii2lab\domain\enums\RelationEnum;
use yii2lab\extension\activeRecord\repositories\base\BaseActiveArRepository;

class CategoriesRepository extends BaseActiveArRepository {

	public function relations() {
		return [
			'article' => [
				'type' => RelationEnum::ONE,
				'field' => 'article_id',
				'foreign' => [
					'id' => 'article.article',
					'field' => 'id',
				],
			],
			'category' => [
				'type' => RelationEnum::ONE,
				'field' => 'category_id',
				'foreign' => [
					'id' => 'article.category',
					'field' => 'id',
				],
			],
		];
	}
}
