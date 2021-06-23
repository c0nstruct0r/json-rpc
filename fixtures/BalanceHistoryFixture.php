<?php

namespace app\fixtures;

use app\models\BalanceHistory;
use yii\test\ActiveFixture;

class BalanceHistoryFixture
    extends ActiveFixture
{
    public $modelClass = BalanceHistory::class;
    public $dataFile = __DIR__ . '/data/balance_history.php';
}