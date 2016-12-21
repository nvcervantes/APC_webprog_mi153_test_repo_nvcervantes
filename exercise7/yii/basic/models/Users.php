<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $name
 * @property string $nickname
 * @property string $email
 * @property string $hadd
 * @property string $gender
 * @property string $cpnum
 * @property string $comment
 * @property string $slug
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nickname', 'email', 'gender', 'cpnum', 'slug'], 'required'],
            [['cpnum'], 'integer'],
            [['comment'], 'string'],
            [['name', 'nickname', 'email', 'hadd', 'gender', 'slug'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'nickname' => 'Nickname',
            'email' => 'Email',
            'hadd' => 'Address',
            'gender' => 'Gender',
            'cpnum' => 'Cpnum',
            'comment' => 'Comment',
            'slug' => 'Slug',
        ];
    }
}
