<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property string $title
 * @property resource $cover
 * @property resource $images
 * @property string $brief
 * @property string $text
 * @property string $category
 * @property string $link
 * @property string $status
 * @property string $date
 *
 * @property Category $category0
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           // [['title', 'brief', 'text', 'category', 'link', 'status', 'date'], 'required'],
            [['images', 'brief', 'text', 'link'], 'string'],
            [['date'], 'safe'],
            [['title'], 'string', 'max' => 50],
            [['category'], 'string', 'max' => 32],
            [['status'], 'string', 'max' => 11],
            [['cover'], 'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'cover' => Yii::t('app', 'Cover'),
            'images' => Yii::t('app', 'Images'),
            'brief' => Yii::t('app', 'Brief'),
            'text' => Yii::t('app', 'Text'),
            'category' => Yii::t('app', 'Category'),
            'link' => Yii::t('app', 'Link'),
            'status' => Yii::t('app', 'Status'),
            'date' => Yii::t('app', 'Date'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['name' => 'category']);
    }
}
