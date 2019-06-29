<?php

namespace yii2bundle\article\domain\enums;

use yii2rails\extension\enum\base\BaseEnum;

class ArticlePermissionEnum extends BaseEnum
{

    // Управление статьями сайта
    const POST_MANAGE = 'oArticlePostManage';

    // Удаление статьи
    const POST_DELETE = 'oArticlePostDelete';

}