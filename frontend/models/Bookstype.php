<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bookstype".
 *
 * @property int $idtype
 * @property string $booktype
 */
class Bookstype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookstype';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['booktype'], 'required'],
            [['booktype'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idtype' => 'Idtype',
            'booktype' => 'Booktype',
        ];
    }
}
