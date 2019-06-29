<?php

namespace yii2bundle\article\domain\interfaces\services;

use yii2rails\domain\interfaces\services\CrudInterface;

/**
 * Interface PostInterface
 * 
 * @package yii2bundle\article\domain\interfaces\services
 * 
 * @property-read \yii2bundle\article\domain\Domain $domain
 * @property-read \yii2bundle\article\domain\interfaces\repositories\PostInterface $repository
 */
interface PostInterface extends CrudInterface {

}
