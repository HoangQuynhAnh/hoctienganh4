<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "videobaihoc".
 *
 * @property int $id
 * @property string $ten
 * @property string $link
 * @property int $type
 */
class Videobaihoc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
     public $file;
    public static function tableName()
    {
        return 'videobaihoc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten', 'link', 'type'], 'required'],
            [['type'], 'integer'],
            [['ten', 'link'], 'string', 'max' => 255],
             [['file'],'file','extensions'=>'mp4'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten' => 'Tên',
            'link' => 'Video',
            'type' => 'Bài học',
        ];
    }
}
