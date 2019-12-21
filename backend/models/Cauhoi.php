<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cauhoi".
 *
 * @property int $id
 * @property string $ten
 * @property string $idbaihoc
 */
class Cauhoi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cauhoi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['ten', 'idbaihoc'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten' => 'Đề bài',
            'idbaihoc' => 'Idbaihoc',
        ];
    }
}
