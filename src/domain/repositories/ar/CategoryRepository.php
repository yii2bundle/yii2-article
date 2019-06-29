<?php

namespace yii2bundle\article\domain\repositories\ar;

use yii2rails\extension\activeRecord\repositories\base\BaseActiveArRepository;

class CategoryRepository extends BaseActiveArRepository {

    public function tableName()
    {
        return 'article_category';
    }

}
