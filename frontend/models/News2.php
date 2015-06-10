<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $IdNews
 * @property string $TitleNews
 * @property string $DescriptionNews
 * @property string $ContentsNews
 * @property string $DateNews
 * @property string $Author
 */
class News2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TitleNews', 'DescriptionNews', 'ContentsNews', 'DateNews', 'Author'], 'required'],
            [['DateNews'], 'safe'],
            [['TitleNews'], 'string', 'max' => 200],
            [['DescriptionNews'], 'string', 'max' => 500],
            [['ContentsNews'], 'string', 'max' => 4000],
            [['Author'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdNews' => 'Id News',
            'TitleNews' => 'Title News',
            'DescriptionNews' => 'Description News',
            'ContentsNews' => 'Contents News',
            'DateNews' => 'Date News',
            'Author' => 'Author',
        ];
    }
}
