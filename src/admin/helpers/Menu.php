<?php

namespace yii2bundle\article\admin\helpers;

use yii2rails\extension\menu\interfaces\MenuInterface;
use yii2bundle\article\domain\enums\ArticlePermissionEnum;

class Menu implements MenuInterface {
	
	public function toArray() {
		return [
			'label' => ['article/main', 'title'],
			'url' => 'article/manage',
			'icon' => 'file-text-o',
			'module' => 'article',
			'access' => ArticlePermissionEnum::POST_MANAGE,
		];
	}

}
