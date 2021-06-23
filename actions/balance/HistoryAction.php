<?php

namespace app\actions\balance;

use app\models\BalanceHistory;
use yii\base\Action;

class HistoryAction
    extends Action
{
    public function run()
    {
        $history = BalanceHistory::find()->all();

        return $history;
    }
}