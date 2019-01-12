<?php
/**
 * @var $this yii\web\View
 */

use yii2lab\extension\markdown\widgets\Markdown;

$this->title = $article->title;

?>

<h1>
	<?= $article->title ?>
</h1>

<?= Markdown::widget(['content' => $article->content]) ?>
