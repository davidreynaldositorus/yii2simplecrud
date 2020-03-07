<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string|null $datepublished
 * @property int|null $numberofpages
 * @property int $typeofbook

 * @property Bookstype $bookstype
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'author', 'typeofbook'], 'required'],
            [['datepublished'], 'safe'],
            [['numberofpages', 'typeofbook'], 'integer'],
            [['title'], 'string', 'max' => 200],
            [['typeofbook'], 'exist', 'skipOnError' => true, 'targetClass' => Bookstype::className(), 'targetAttribute' => ['typeofbook' => 'idtype']],
            [['author'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'author' => 'Author',
            'datepublished' => 'Date Published',
            'numberofpages' => 'Number of Pages',
            'typeofbook' => 'Type of Book',
        ];
    }

        /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookstype()
    {
        return $this->hasOne(Bookstype::className(), ['idtype' => 'typeofbook']);
    }
}
