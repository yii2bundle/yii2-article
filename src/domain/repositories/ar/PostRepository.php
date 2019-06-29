<?php

namespace yii2bundle\article\domain\repositories\ar;

use yii2bundle\article\domain\interfaces\repositories\PostInterface;
use yii2rails\domain\repositories\BaseRepository;
use yii2rails\extension\activeRecord\repositories\base\BaseActiveArRepository;

/**
 * Class PostRepository
 * 
 * @package yii2bundle\article\domain\repositories\ar
 * 
 * @property-read \yii2bundle\article\domain\Domain $domain
 */
class PostRepository extends BaseActiveArRepository implements PostInterface {

	protected $schemaClass = true;

    public function tableName()
    {
        return 'article_post';
    }

}
