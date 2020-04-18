<?php
/**
 * Created by Cynojine.
 * User: Kazashim Kuzasuwat
 * Date: 18/04/2020
 * Time: 18:52
 */

namespace Cynojine\Mtnmomo\Config;
use Cynojine\Mtnmomo\MoResponses\ApiKey;
use Cynojine\Mtnmomo\MoResponses\ApiUser;


/**
 * Trait SandboxUserProvisioning
 * @package Cynojine\Mtnmomo\Config
 */
trait SandboxUser
{
    /**
     * Create an api user
     *
     * @return string
     * @throws \Exception
     */
    public function createApiUser() {
        try {
            $response = $this->newClient()->post(self::BASE_URL . self::API_USER_URI, [
                'headers' => ['X-Reference-Id' => $this->xReferenceId],
                'json' => ['providerCallbackHost' => $this->callbackHost]
            ]);
            return json_encode(['statusCode' => $response->getStatusCode()]);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Validate api user
     *
     * @return ApiUser
     * @throws \Exception
     */
    public function getApiUser() {
        try {
            $response = $this->newClient()->get(self::BASE_URL . self::API_USER_URI . "/" . $this->xReferenceId);
            return ApiUser::create(json_decode($response->getBody()->getContents(), true));
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Create api key
     *
     * @return ApiKey
     * @throws \Exception
     */
    public function createApiKey() {
        try {
            $response = $this->newClient()->post(self::BASE_URL . self::API_USER_URI . "/" . $this->xReferenceId . "/apikey");
            return ApiKey::create(json_decode($response->getBody()->getContents(), true));
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }
}