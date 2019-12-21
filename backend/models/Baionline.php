<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "baionline".
 *
 * @property int $id
 * @property string $ten
 * @property int $loai
 */
class Baionline extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'baionline';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ten', 'loai'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten' => 'Tên bài kiểm tra',
            'loai' => 'Loại',
        ];
    }
}
