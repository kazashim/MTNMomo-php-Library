<?php
/**
 * Created by Cynojine.
 * User: Kazashim Kuzasuwat
 * Date: 19/04/2020
 * Time: 21:28
 */

namespace Cynojine\Mtnmomo\MoResponses;


class Token extends Response
{
    /**
     * @var string $access_token
     */
    protected $access_token;

    /**
     * @var string $token_type
     */
    protected $token_type;

    /**
     * @var string $expires_in
     */
    protected $expires_in;

    /**
     * Access token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * Token type
     *
     * @return string
     */
    public function getTokenType()
    {
        return $this->token_type;
    }

    /**
     * Expiry in seconds
     *
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->expires_in;
    }
}
