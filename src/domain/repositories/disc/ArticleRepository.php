<?php

namespace yii2bundle\article\domain\repositories\disc;

use yii2rails\domain\data\Query;
use yii2rails\domain\BaseEntity;
use yii2rails\extension\arrayTools\repositories\base\BaseActiveDiscRepository;

class ArticleRepository extends BaseActiveDiscRepository {
	
	public $table = 'article';
	
	public function uniqueFields() {
		return [
			['name'],
			['title'],
		];
	}

	public function one(Query $query = null) {
		$query = Query::forge($query);
		$query->where(['is_deleted' => '0']);
		return parent::one($query);
	}
	
	public function all(Query $query = null) {
		$query = Query::forge($query);
		$query->where(['is_deleted' => '0']);
		return parent::all($query);
	}
	
	public function delete(BaseEntity $entity) {
		$entity->is_deleted = 1;
		$this->update($entity);
	}

}
