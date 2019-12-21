<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cauhoionline".
 *
 * @property int $id
 * @property string $ten
 */
class Cauhoionline extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cauhoionline';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
            'ten' => 'Nội dung',
        ];
    }
}
