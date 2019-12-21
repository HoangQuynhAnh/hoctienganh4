<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dethioffline".
 *
 * @property int $id
 * @property string $ten
 * @property string $link
 */
class Dethioffline extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dethioffline';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten' => 'Tên',
            'link' => 'Link',
        ];
    }
}
