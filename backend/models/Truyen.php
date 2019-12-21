<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "truyen".
 *
 * @property int $id
 * @property string $ten
 * @property string $anh
 * @property string $tieude
 * @property string $noidung
 */
class Truyen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;
    public static function tableName()
    {
        return 'truyen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten', 'tieude', 'noidung'], 'required'],
            [['noidung'], 'string'],
            [['ten', 'anh', 'tieude'], 'string', 'max' => 255],
            [['file'],'file','extensions'=>'jpg,png']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten' => 'Tên truyện',
            'anh' => 'Ảnh',
            'tieude' => 'Giới thiệu',
            'noidung' => 'Nội dung',
        ];
    }
}
