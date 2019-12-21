<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "videomorong".
 *
 * @property int $id
 * @property string $ten
 * @property string $link
 */
class Videomorong extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}

     */
    public $file; 
    
    public static function tableName()
    {
        return 'videomorong';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['ten', 'link'], 'string', 'max' => 255],
             [['file'],'file','extensions'=>'mp4,flv,avi,wmv,mov']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten' => 'Tên video',
            'link' => 'Đường dẫn',
        ];
    }
}
