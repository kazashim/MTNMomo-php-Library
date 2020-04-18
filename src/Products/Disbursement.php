<?php
/**
 * Created by Cynojine.
 * User: Kazashim Kuzasuwat
 * Date: 18/04/2020
 * Time: 20:06
 */

namespace Cynojine\Mtnmomo\Products;
use Cynojine\Mtnmomo\MoResponses\TransactionStatus;

/**
 * Class Disbursement
 * @package Cynojine\Mtnmomo\Products
 */
class Disbursement extends Product
{
    const TRANSFER_URI = "/transfer";

    protected function getProductBaseUrl() {
        return self::BASE_URL . "/disbursement";
    }

    protected function transactionUrl() {
        return $this->getProductBaseUrl() . self::TRANSFER_URI;
    }

    /**
     * Start transfer transaction
     *
     * @param $externalId
     * @param $partyId
     * @param $amount
     * @param $currency
     * @param string $payerMessage
     * @param string $payeeNote
     * @return array
     * @throws \Exception
     */
    public function transfer($externalId, $partyId, $amount, $currency, $payerMessage = '', $payeeNote = '') {
        return $this->transact($externalId, $partyId, $amount, $currency, $payerMessage, $payeeNote);
    }

    /**
     * Get transfer transaction status
     *
     * @param $financialTransactionId
     * @return TransactionStatus
     * @throws \Exception
     */
    public function transferStatus($financialTransactionId) {
        return $this->getTransactionStatus($financialTransactionId);
    }
}