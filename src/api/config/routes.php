<?php

$version = API_VERSION_STRING;

return [

    ["class" => "yii2lab\\rest\\domain\\rules\\UrlRule", "controller" => ["{$version}/article-post" => "article/post"]],
    ["class" => "yii2lab\\rest\\domain\\rules\\UrlRule", "controller" => ["{$version}/article-category" => "article/category"]],

];
