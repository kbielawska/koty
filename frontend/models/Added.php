<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "added".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $created_at
 * @property string $created_ip
 * @property string $file
 * @property string $type
 * @property integer $accepted
 */
class Added extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'added';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'accepted'], 'integer'],
            [['created_at'], 'safe'],
            [['type'], 'string'],
            [['created_ip'], 'string', 'max' => 20],
            [['file'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'created_ip' => 'Created Ip',
            'file' => 'File',
            'type' => 'Type',
            'accepted' => 'Accepted',
        ];
    }
}
