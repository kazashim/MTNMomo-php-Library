<?php
/**
 * Created by Cynojine.
 * User: Kazashim Kuzasuwat
 * Date: 18/04/2020
 * Time: 13:16
 */

namespace Cynojine\Mtnmomo\MoResponses;


class ApiUser extends Response
{
    /**
     * @var string $providerCallbackHost
     */
    protected $providerCallbackHost;

    /**
     * @var string $targetEnvironment
     */
    protected $targetEnvironment;

    /**
     * @return string
     */
    public function getProviderCallbackHost()
    {
        return $this->providerCallbackHost;
    }

    /**
     * @return string
     */
    public function getTargetEnvironment()
    {
        return $this->targetEnvironment;
    }
}