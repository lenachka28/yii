<?php
/**
 * Created by PhpStorm.
 * User: Елена
 * Date: 08.06.2019
 * Time: 12:12
 */

namespace frontend\models;

use yii\db\ActiveRecord;

class Articles extends ActiveRecord
{
    public static function tableName()
    {
        return 'articles';
    }

    public function getShortText($text)
    {
        if(!empty($text)) {
            $text = mb_substr($text, 0, 200);
            $pos = strripos($text, ' ');
            $text = mb_substr($text, 0, $pos);
            return $text . '...';
        }
        return false;
    }

    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'title' => 'Название',
            'text' => 'Текст',
            'date' => 'Дата',
            'likes' => 'likes',
            'hits' => 'hits',
        ];
    }

    public function rules()
    {
        return [
            [['title', 'text'], 'required', 'message' => 'Поле обязательно'],
            ['date', 'date', 'format' => 'php:Y-m-d']
        ];
    }
}