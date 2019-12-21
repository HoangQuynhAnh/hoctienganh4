<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nguphap".
 *
 * @property int $id
 * @property string $noidung
 * @property int $idbaihoc
 */
class Nguphap extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nguphap';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idbaihoc'], 'integer'],
            [['noidung','mota'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'noidung' => 'Nội dung',
            'idbaihoc' => 'Idbaihoc',
            'mota'=>'Giới thiệu',
        ];
    }
}
