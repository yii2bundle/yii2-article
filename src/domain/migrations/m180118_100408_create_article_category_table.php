<?php

use yii2lab\db\domain\db\MigrationCreateTable as Migration;

/**
* Handles the creation of table `article_category`.
*/
class m180118_100408_create_article_category_table extends Migration
{
	public $table = 'article_category';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'id' => $this->primaryKey(),
			'title' => $this->string(128)->notNull(),
            'status' => $this->integer(1)->defaultValue(1),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'created_at' => $this->timestamp()->defaultValue(null),
		];

	}

	public function afterCreate()
	{
		
	}

}
