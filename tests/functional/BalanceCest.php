<?php

namespace functional;

use app\fixtures\BalanceHistoryFixture;
use FunctionalTester;

class BalanceCest
{
    public function _fixtures()
    {
        return [
            BalanceHistoryFixture::class,
        ];
    }

    public function history(FunctionalTester $I)
    {
        $I->wantToTest('get balance history');
        $I->sendPost(
            '/balance',
            [
                'jsonrpc' => '2.0',
                'id' => 1,
                'method' => 'balance.history',
                'params' => [
                    'limit' => 10,
                ],
            ]
        );

        $I->seeResponseIsJson();
        $data = json_decode($I->grabResponse());
        $I->seeResponseContainsJson(
            [
                'id' => 1,
                'jsonrpc' => '2.0',
                'result' =>
                    [
                        'id' => 1,
                        'value' => '1.00',
                        'balance' => '10.00',
                        'user_id' => 1,
                    ],
            ]
        );
    }

    public function userBalance(FunctionalTester $I)
    {
        $I->wantToTest('get balance history');
        $I->sendPost(
            '/balance',
            [
                'jsonrpc' => '2.0',
                'id' => 1,
                'method' => 'balance.userBalance',
                'params' => [
                    'user_id' => 10,
                ],
            ]
        );

        $I->seeResponseIsJson();
        $data = json_decode($I->grabResponse());
        $I->seeResponseContainsJson(
            [
                'id' => 1,
                'jsonrpc' => '2.0',
                'result' => '20.00',
            ]
        );
    }
}
