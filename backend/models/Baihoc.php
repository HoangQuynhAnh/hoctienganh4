<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "baihoc".
 *
 * @property int $id
 * @property string $type
 * @property string $name
 */
class Baihoc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'baihoc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'name','tentuvung'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Chủ đề',
            'name' => 'Tên',
            'tentuvung'=>'Chủ đề từ vựng'
        ];
    }
}
