<?php

namespace yii2bundle\article\domain\entities;

use yii2rails\domain\BaseEntity;
use yii2rails\domain\behaviors\entity\TimeValueFilter;
use yii2rails\extension\common\enums\StatusEnum;

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
	protected $status = StatusEnum::ENABLE;
	protected $updated_at;
	protected $created_at;

	protected $categories;

    public function behaviors()
    {
        return [
            [
                'class' => TimeValueFilter::class,
            ],
        ];
    }

    public function rules()
    {
        return [
            [['title', 'content'], 'trim'],
            [['title', 'content'], 'required'],
            ['status', 'in', 'range' => StatusEnum::values()],
        ];
    }

}
