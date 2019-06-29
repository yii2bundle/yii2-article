<?php

namespace yii2module\article\domain\repositories\ar;

use yii2rails\domain\enums\RelationEnum;
use yii2rails\extension\activeRecord\repositories\base\BaseActiveArRepository;

class CategoriesRepository extends BaseActiveArRepository {

    public function tableName()
    {
        return 'article_category_tie';
    }

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
