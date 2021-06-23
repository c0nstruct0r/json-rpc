<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "balance_history".
 *
 * @property int $id
 * @property float $value
 * @property float $balance
 * @property int $user_id
 * @property int $created_at
 * @property int $updated_at
 */
class BalanceHistory extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'balance_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['value', 'balance', 'user_id', 'created_at', 'updated_at'], 'required'],
            [['value', 'balance'], 'number'],
            [['user_id', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
            'balance' => 'Balance',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
