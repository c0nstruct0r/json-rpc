<?php

namespace app\controllers;

use app\actions\balance\HistoryAction;
use app\actions\balance\UserBalanceAction;
use JsonRpc2\Controller;

class BalanceController
    extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'balance.history' => HistoryAction::class,
            'balance.userBalance' => UserBalanceAction::class,
        ];
    }
}