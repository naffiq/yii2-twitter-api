<?php
use PHPUnit\Framework\TestCase;

class TwitterAPITest extends TestCase
{
    public static $dummySettings = [
        'oauthAccessToken' => 'dummy_token',
        'oauthAccessTokenSecret' => 'dummy_secret',
        'consumerKey' => 'dummy_key',
        'consumerSecret' => 'dummy_secret',
    ];

    /**
     * @expectedException Exception
     */
    public function testNoConfigProvided()
    {
        new \naffiq\twitterapi\TwitterAPI([]);
    }

    public function testOriginalObjectCreated()
    {
        $twitter = new \naffiq\twitterapi\TwitterAPI(self::$dummySettings);

        $this->assertEquals($twitter->exchange() instanceof TwitterAPIExchange, true);
    }

    public function testPostfields()
    {
        $postFields = ['foo' => 'bar'];
        $twitter = new \naffiq\twitterapi\TwitterAPI(self::$dummySettings);
        $twitter->setPostfields($postFields);

        $this->assertEquals($twitter->getPostfields(), $postFields);
    }

    public function testGetfield()
    {
        $getField = '?foo=bar';
        $twitter = new \naffiq\twitterapi\TwitterAPI(self::$dummySettings);

        $twitter->setGetfield($getField);
        $this->assertEquals($twitter->getGetfield(), $getField);
    }
}
?>