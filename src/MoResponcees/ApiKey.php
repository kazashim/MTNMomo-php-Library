<?php
/**
 * Created by Cynojine.
 * User: Kazashim Kuzasuwat
 * Date: 20/04/2019
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