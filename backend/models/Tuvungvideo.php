<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tuvungvideo".
 *
 * @property int $id
 * @property string $ten
 * @property string $loaitu
 * @property string $phienam
 * @property string $nghia
 * @property string $audio
 * @property int $idvideo
 */
class Tuvungvideo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
     public $file;
    public static function tableName()
    {
        return 'tuvungvideo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ten', 'loaitu', 'phienam', 'nghia', 'audio', 'idvideo'], 'required'],
            [['id', 'idvideo'], 'integer'],
            [['ten', 'loaitu', 'phienam', 'nghia', 'audio'], 'string', 'max' => 255],
            [['id'], 'unique'],
            [['file'],'file','extensions'=>'mp3, wav, aiff, aac,wma']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten' => 'Tên',
            'loaitu' => 'Loại từ',
            'phienam' => 'Phiên âm',
            'nghia' => 'Nghĩa',
            'audio' => 'Audio',
            'idvideo' => 'Video',
        ];
    }
}
