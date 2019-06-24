<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * Articles model
 */
class Articles extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * Cut text
     *
     * @param string $text to make it shorter
     *
     * @return string|bool
     */
    public static function getShortText($text)
    {
        if(!empty($text)) {
            $text = mb_substr($text, 0, 200);
            $pos = strripos($text, ' ');
            $text = mb_substr($text, 0, $pos);
            return $text . '...';
        }
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'title' => 'Название',
            'text' => 'Текст',
            'date' => 'Дата',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text'], 'required', 'message' => 'Поле обязательно'],
            ['date', 'date', 'format' => 'php:Y-m-d']
        ];
    }
}