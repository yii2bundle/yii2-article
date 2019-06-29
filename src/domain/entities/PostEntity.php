<?php

namespace yii2bundle\article\domain\entities;

use yii2rails\domain\BaseEntity;

/**
 * Class PostEntity
 * 
 * @package yii2bundle\article\domain\entities
 * 
 * @property $id
 * @property $title
 * @property $content
 * @property $status
 * @property $updated_at
 * @property $created_at
 *
 * @property CategoryEntity[] $categories
 */
class PostEntity extends BaseEntity {

	protected $id;
	protected $title;
	protected $content;
	protected $status;
	protected $updated_at;
	protected $created_at;

	protected $categories;

}
