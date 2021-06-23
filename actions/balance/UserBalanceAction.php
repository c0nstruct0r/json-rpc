<?php

namespace app\actions\balance;

use app\models\BalanceHistory;
use Yii;
use yii\base\Action;

class UserBalanceAction
    extends Action
{
    public function run()
    {
        $params = Yii::$app->request->post();
        $params = $params['params'];
        $userId = $params['user_id'];

        $balance = BalanceHistory::find()
            ->where(
                [
                    'user_id' => $userId,
                ]
            )
            ->sum('balance');

        return $balance;
    }
}