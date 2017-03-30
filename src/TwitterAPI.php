<?php
namespace naffiq\twitterapi;

use yii\base\Component;

/**
 * Class TwitterAPI
 *
 * Initializes [[\TwitterAPIExchange]] object and provides layer to it's methods
 *
 * @package naffiq\twitterapi
 */
class TwitterAPI extends Component
{
    public $oauthAccessToken;
    public $oauthAccessTokenSecret;

    public $consumerKey;
    public $consumerSecret;

    /**
     * @var \TwitterAPIExchange
     */
    private $twitterApiExchange;

    /**
     * @inheritdoc
     *
     * Initializes TwitterAPIExchange object for further usage
     */
    public function init()
    {
        parent::init();

        $settings = [
            'oauth_access_token' => $this->oauthAccessToken,
            'oauth_access_token_secret' => $this->oauthAccessTokenSecret,
            'consumer_key' => $this->consumerKey,
            'consumer_secret' => $this->consumerSecret
        ];

        $this->twitterApiExchange = new \TwitterAPIExchange($settings);
    }

    /**
     * Returns TwitterAPIExchange object
     *
     * @return \TwitterAPIExchange
     */
    public function exchange()
    {
        return $this->twitterApiExchange;
    }

    /**
     * Direct access to [[\TwitterAPIExchange::setPostfields()]] method
     * @see \TwitterAPIExchange::setPostfields()
     *
     * @param array $array
     * @return \TwitterAPIExchange
     */
    public function setPostfields(array $array)
    {
        return $this->twitterApiExchange->setPostfields($array);
    }

    /**
     * Direct access to [[\TwitterAPIExchange::setGetfield()]] method
     * @see \TwitterAPIExchange::setGetfield()
     *
     * @param string $string
     * @return \TwitterAPIExchange
     */
    public function setGetfield($string)
    {
        return $this->twitterApiExchange->setGetfield($string);
    }

    /**
     * Direct access to [[\TwitterAPIExchange::getGetField()]] method
     * @see \TwitterAPIExchange::getGetfield()
     *
     * @return string
     */
    public function getGetfield()
    {
        return $this->twitterApiExchange->getGetfield();
    }

    /**
     * Direct access to [[\TwitterAPIExchange::getPostfields()]] method
     * @see \TwitterAPIExchange::getPostfields()
     *
     * @return array
     */
    public function getPostfields()
    {
        return $this->twitterApiExchange->getPostfields();
    }

    /**
     * Direct access to [[\TwitterAPIExchange::buildOauth()]] method
     * @see \TwitterAPIExchange::buildOauth()
     *
     * @param string $url
     * @param string $requestMethod
     * @return \TwitterAPIExchange
     */
    public function buildOauth($url, $requestMethod)
    {
        return $this->twitterApiExchange->buildOauth($url, $requestMethod);
    }

    /**
     * Direct access to [[\TwitterAPIExchange::performRequest()]] method
     * @see \TwitterAPIExchange::performRequest()
     *
     * @param bool $return
     * @param array $curlOptions
     * @return string
     */
    public function performRequest($return = true, $curlOptions = [])
    {
        return $this->twitterApiExchange->performRequest($return, $curlOptions);
    }

    /**
     * Direct access to [[\TwitterAPIExchange::request()]] method
     * @see \TwitterAPIExchange::request()
     *
     * @param string $url
     * @param string $method
     * @param null $data
     * @param array $curlOptions
     * @return string
     */
    public function request($url, $method = 'get', $data = null, $curlOptions = [])
    {
        return $this->twitterApiExchange->request($url, $method, $data, $curlOptions);
    }
}