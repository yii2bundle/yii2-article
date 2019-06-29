<?php

namespace yii2bundle\article\domain\services;

use yii2rails\domain\data\Query;
use yii2rails\domain\services\base\BaseActiveService;
use yii2bundle\article\domain\enums\ArticlePermissionEnum;

class ArticleService extends BaseActiveService {

	public function access() {
		return [
			[
				'roles' => ArticlePermissionEnum::POST_MANAGE,
				'only' => ['create', 'update', 'delete'],
			],
			[
				'roles' => ArticlePermissionEnum::POST_DELETE,
				'only' => 'delete',
			],
		];
	}

	public function oneByName($name, Query $query = null) {
		$query = Query::forge($query);
		$query->where('name', $name);
		$entity = parent::one($query);
		return $entity;
	}

	public function allByNames($names, Query $query = null) {
		$query = Query::forge($query);
		$query->where('name', $names);
		$entity = parent::all($query);
		return $entity;
	}

}
