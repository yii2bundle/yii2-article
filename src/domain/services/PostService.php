<?php

namespace yii2bundle\article\domain\services;

use yii2bundle\article\domain\interfaces\services\PostInterface;
use yii2rails\domain\behaviors\query\QueryFilter;
use yii2rails\domain\services\base\BaseActiveService;
use yii2rails\extension\common\enums\StatusEnum;

/**
 * Class PostService
 * 
 * @package yii2bundle\article\domain\services
 * 
 * @property-read \yii2bundle\article\domain\Domain $domain
 * @property-read \yii2bundle\article\domain\interfaces\repositories\PostInterface $repository
 */
class PostService extends BaseActiveService implements PostInterface {

    public function behaviors()
    {
        return [
            [
                'class' => QueryFilter::class,
                'method' => 'andWhere',
                'params' => ['status' => StatusEnum::ENABLE]
            ],
        ];
    }

}
