<?php

namespace yii2bundle\article\domain\services;

use yii2bundle\article\domain\interfaces\services\CategoryInterface;
use yii2rails\domain\services\base\BaseActiveService;

/**
 * Class CategoryService
 * 
 * @package yii2bundle\article\domain\services
 * 
 * @property-read \yii2bundle\article\domain\Domain $domain
 * @property-read \yii2bundle\article\domain\interfaces\repositories\CategoryInterface $repository
 */
class CategoryService extends BaseActiveService implements CategoryInterface {

}
