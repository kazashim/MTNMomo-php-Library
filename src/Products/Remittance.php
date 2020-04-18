<?php
/**
 * Created by Cynojine.
 * User: Kazashim Kuzasuwat
 * Date: 18/04/2020
 * Time: 20:07
 */

namespace Cynojine\Mtnmomo\Products;

/**
 * Class Remittance
 * @package Cynojine\Mtnmomo\Products
 */
class Remittance extends Disbursement
{
    protected function getProductBaseUrl() {
        return self::BASE_URL . "/remittance";
    }
}