<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cauhoichitietonline".
 *
 * @property int $id
 * @property int $idcauhoi
 * @property string $noidung
 * @property string $da_dung
 * @property string $da_nhieu1
 * @property string $da_nhieu2
 * @property string $da_nhieu3
 *
 * @property Cauhoi $cauhoi
 */
class Cauhoichitietonline extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cauhoichitietonline';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcauhoi'], 'integer'],
            [['noidung', 'da_dung', 'da_nhieu1', 'da_nhieu2', 'da_nhieu3'], 'string', 'max' => 255],
            [['idcauhoi'], 'exist', 'skipOnError' => true, 'targetClass' => Cauhoi::className(), 'targetAttribute' => ['idcauhoi' => 'id']],
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
            'da_nhieu1' => 'Đáp án nhiễu 1',
            'da_nhieu2' => 'Đáp án nhiễu 2',
            'da_nhieu3' => 'Đáp án nhiễu 3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCauhoi()
    {
        return $this->hasOne(Cauhoi::className(), ['id' => 'idcauhoi']);
    }
}
