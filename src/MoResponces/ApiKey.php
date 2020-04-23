<?php
/**
 * Created by Cynojine.
 * User: Kazashim Kuzasuwat
 * Date: 18/04/2020
 * Time: 13:08
 */

namespace Cynojine\Mtnmomo\MoResponses;


class ApiKey extends Response
{
    /**
     * @var string $apiKey
     */
    protected $apiKey;

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }
}