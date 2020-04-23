<?php
/**
 * Created by Cynojine.
 * User: Kazashim Kuzasuwat
 * Date: 19/04/2019
 * Time: 22:03
 */

namespace Cynojine\Mtnmomo\MoResponses;


class Balance extends Response
{
    /**
     * @var string $availableBalance
     */
    protected $availableBalance;

    /**
     * @var string $currency
     */
    protected $currency;

    /**
     * @return string
     */
    public function getAvailableBalance()
    {
        return $this->availableBalance;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}