<?php

namespace yii2bundle\article\admin;

use yii\base\Module as YiiModule;
use yii2rails\extension\web\helpers\Behavior;
use yii2bundle\article\domain\enums\ArticlePermissionEnum;


/**
 * welcome module definition class
 */
class Module extends YiiModule
{

	public static $langDir = '@yii2module/article/domain/messages';

    public function behaviors()
    {
        return [
            'access' => Behavior::access(ArticlePermissionEnum::POST_MANAGE),
        ];
    }
}
