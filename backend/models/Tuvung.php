<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tuvung".
 *
 * @property int $id
 * @property string $idbaihoc
 * @property string $ten
 * @property string $audio
 * @property string $phienam
 * @property string $nghia
 * @property string $anh
 */
class Tuvung extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public $fileAudio;

    public static function tableName()
    {
        return 'tuvung';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idbaihoc', 'ten', 'audio', 'phienam', 'nghia'], 'required'],
            [['idbaihoc', 'ten', 'audio', 'phienam', 'nghia', 'anh'], 'string', 'max' => 255],
              [['file'],'file','extensions'=>'jpg,png'],
              [['fileAudio'],'file','extensions'=>'mp3'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idbaihoc' => 'Idbaihoc',
            'ten' => 'Tên',
            'audio' => 'Audio',
            'phienam' => 'Phiên âm',
            'nghia' => 'Nghĩa',
            'anh' => 'Ảnh',
        ];
    }
}
