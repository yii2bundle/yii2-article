<?php

namespace yii2bundle\article\domain;

use yii2rails\domain\enums\Driver;

/**
 * Class Domain
 * 
 * @package yii2bundle\article\domain
 * @property \yii2bundle\article\domain\services\ArticleService $article
 * @property-read \yii2bundle\article\domain\interfaces\services\CategoryInterface $category
 * @property-read \yii2bundle\article\domain\interfaces\repositories\RepositoriesInterface $repositories
 * @property-read \yii2bundle\article\domain\interfaces\services\PostInterface $post
 */
class Domain extends \yii2rails\domain\Domain {
	
	public function config() {
		$driver = Driver::slave() == Driver::FILEDB ? Driver::FILEDB : Driver::ACTIVE_RECORD;
		return [
			'repositories' => [
				'post' => $driver,
				'category' => $driver,
				'categories' => $driver,
			],
			'services' => [
				'post',
                'category',
			],
		];
	}
	
}