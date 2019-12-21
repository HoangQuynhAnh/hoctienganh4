<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "baikiemtra".
 *
 * @property int $id
 * @property string $ten
 * @property int $loai
 */
class Baikiemtra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'baikiemtra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loai','idbaihoc'], 'integer'],
            
            [['ten'], 'string', 'max' => 255],
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
            'loai' => 'Loại',
            'idbaihoc' => 'Tên bài học',

        ];
    }
}
