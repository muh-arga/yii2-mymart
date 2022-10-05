<?php

namespace backend\models;


/**
* This template is edited by Muh. Arga Swara Iskandar.
*/

use Yii;

/**
 * This is the model class for table "statisctic".
 *
 * @property int $id
 * @property string|null $access_time
 * @property string|null $user_ip
 * @property string|null $user_host
 * @property string|null $path_info
 * @property string|null $query_string
 */
class Statisctic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'statisctic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['access_time'], 'safe'],
            [['user_ip'], 'string', 'max' => 20],
            [['user_host', 'path_info', 'query_string'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'access_time' => 'Access Time',
            'user_ip' => 'User Ip',
            'user_host' => 'User Host',
            'path_info' => 'Path Info',
            'query_string' => 'Query String',
        ];
    }
}
