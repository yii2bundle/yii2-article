<?php

namespace yii2bundle\article\domain\repositories\schema;

use yii2rails\domain\enums\RelationEnum;
use yii2rails\domain\repositories\relations\BaseSchema;

/**
 * Class PostSchema
 * 
 * @package yii2bundle\article\domain\repositories\schema
 * 
 */
class PostSchema extends BaseSchema {

    public function relations() {
        return [
            'categories' => [
                'type' => RelationEnum::MANY_TO_MANY,
                'via' => [
                    'id' => 'article.categories',
                    'this' => 'article',
                    'foreign' => 'category',
                ],
            ],
        ];
    }

}
