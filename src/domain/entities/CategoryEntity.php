<?php

namespace yii2bundle\article\domain\entities;

use yii2rails\domain\BaseEntity;
use yii2rails\domain\behaviors\entity\TimeValueFilter;
use yii2rails\extension\common\enums\StatusEnum;

/**
 * Class CategoryEntity
 * 
 * @package yii2bundle\article\domain\entities
 * 
 * @property $id
 * @property $title
 * @property $status
 * @property $updated_at
 * @property $created_at
 */
class CategoryEntity extends BaseEntity {

	protected $id;
	protected $title;
    protected $status = StatusEnum::ENABLE;
    protected $updated_at;
    protected $created_at;

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
            [['title'], 'trim'],
            ['title', 'required'],
            ['status', 'in', 'range' => StatusEnum::values()],
        ];
    }
}
