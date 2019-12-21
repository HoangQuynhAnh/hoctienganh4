<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cauhoichitiet".
 *
 * @property int $id
 * @property string $idcauhoi
 * @property string $noidung
 * @property string $da_dung
 * @property string $da_nhieu1
 * @property string $da_nhieu2
 * @property string $da_nhieu3
 * @property string $da_nhieu4
 */
class Cauhoichitiet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cauhoichitiet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcauhoi', 'noidung', 'da_dung', 'da_nhieu1', 'da_nhieu2', 'da_nhieu3'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idcauhoi' => 'Idcauhoi',
            'noidung' => 'Nội dung',
            'da_dung' => 'Đáp án đúng',
            'da_nhieu1' => 'Đáp sán sai 1',
            'da_nhieu2' => 'Đáp án sai 2',
            'da_nhieu3' => 'Đáp án sai 3'
        ];
    }
}
