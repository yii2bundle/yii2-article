<?php

namespace yii2bundle\article\domain\entities;

use yii2rails\domain\BaseEntity;

/**
 * Class CategoryEntity
 * 
 * @package yii2bundle\article\domain\entities
 * 
 * @property $id
 * @property $title
 */
class CategoryEntity extends BaseEntity {

	protected $id;
	protected $title;

	public function rules()
    {
        return [
            ['title', 'required'],
        ];
    }
}
