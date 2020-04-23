<?php
/**
 * Created by Cynojine.
 * User: Kazashim Kuzasuwat
 * Date: 18/04/2020
 * Time: 12:34
 */

namespace Cynojine\Mtnmomo\MoResponses;


use Cynojine\Mtnmomo\Config\Config;

abstract class Response
{
    use Config;

    public function __construct($options)
    {
        $this->setOptions($options);
    }
}