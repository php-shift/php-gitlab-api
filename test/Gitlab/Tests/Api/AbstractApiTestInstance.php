<?php namespace Gitlab\Tests\Api;

use Gitlab\Api\AbstractApi;
use Gitlab\Client;
use Gitlab\HttpClient\Message\Response;
class AbstractApiTestInstance extends AbstractApi
{
    /**
     * {@inheritDoc}
     */
    public function get($path, array $parameters = array(), $requestHeaders = array())
    {
        return parent::get($path, $parameters, $requestHeaders);
    }

    /**
     * {@inheritDoc}
     */
    public function post($path, array $parameters = array(), $requestHeaders = array())
    {
        return parent::post($path, $parameters, $requestHeaders);
    }

    /**
     * {@inheritDoc}
     */
    public function patch($path, array $parameters = array(), $requestHeaders = array())
    {
        return parent::patch($path, $parameters, $requestHeaders);
    }

    /**
     * {@inheritDoc}
     */
    public function put($path, array $parameters = array(), $requestHeaders = array())
    {
        return parent::put($path, $parameters, $requestHeaders);
    }

    /**
     * {@inheritDoc}
     */
    public function delete($path, array $parameters = array(), $requestHeaders = array())
    {
        return parent::delete($path, $parameters, $requestHeaders);
    }
}