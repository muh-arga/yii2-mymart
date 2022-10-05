<?php

namespace backend\models;


/**
* This template is edited by Muh. Arga Swara Iskandar.
*/

use Yii;
use \yii\behaviors\TimestampBehavior;
use \yii\behaviors\BlameableBehavior;
use yii\web\UploadedFile;

/**
 * This is the model class for table "item".
 *
 * @property int $id
 * @property string $name
 * @property int $price
 * @property int $category_id
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property string|null $image
 *
 * @property ItemCategory $category
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public static function tableName()
    {
        return 'item';
    }

    public function behaviors()
    {
        return[
            TimestampBehavior::className(),
            BlameableBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'category_id'], 'required'],
            [['price', 'category_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ItemCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['image'], 'file', 'extensions' => 'gif, jpg, jpeg, png'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'category_id' => 'Category ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ItemCategory::className(), ['id' => 'category_id']);
    }
}
