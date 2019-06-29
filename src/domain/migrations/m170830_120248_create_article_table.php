<?php

use yii2lab\db\domain\db\MigrationCreateTable as Migration;

/**
* Handles the creation of table `article`.
*/
class m170830_120248_create_article_table extends Migration
{
	public $table = 'article_post';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'id' => $this->primaryKey(),
			'title' => $this->string()->notNull(),
			'content' => $this->text()->notNull(),
			'status' => $this->integer(1)->defaultValue(1),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'created_at' => $this->timestamp()->defaultValue(null),
		];
	}

	public function afterCreate()
	{
		$this->myCreateIndexUnique(['title']);
	}

}
