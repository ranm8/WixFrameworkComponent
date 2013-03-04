<?php

namespace Wix\FrameworkComponent\Tests\Instance;

use Wix\FrameworkComponent\InstanceDecoder;

class DecoderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param array $config
     * @return InstanceDecoder
     */
    protected function getDecoder(array $config)
    {
        return new InstanceDecoder($config);
    }

    /**
     * @return string
     */
    protected function getInstance()
    {
        return 'BX83RSyvh3nkKhJRePEAhlO6MNiTo17WVQLa7qNvKNM.eyJpbnN0YW5jZUlkIjoiMTJlNDhjODUtNzEzNC0yYTFlLTBiMjQtN2U5MzQ4NDEzYjkwIiwic2lnbkRhdGUiOiIyMDEzLTAyLTIwVDA3OjM4OjEyLjEzMS0wNjowMCIsInVpZCI6ImRlNmJkZDRjLTYwOTAtNDI3YS1hOWY3LWQxMjIyYjY1OTA4OCIsInBlcm1pc3Npb25zIjoiT1dORVIiLCJpcEFuZFBvcnQiOiIyMTIuMjkuMTkyLjE0LzU3NDA5IiwidmVuZG9yUHJvZHVjdElkIjpudWxsLCJkZW1vTW9kZSI6ZmFsc2V9';
    }

    /**
     * @return string
     */
    protected function getApplicationSecret()
    {
        return 'c20e90e6-0a53-49b2-9705-20b1dfbea22e';
    }

    /**
     * @expectedException \Wix\FrameworkComponent\Exception\InvalidInstanceException
     */
    public function testParseWithWrongApplicationSecret()
    {
        $decoder = $this->getDecoder(array('application_secret' => '123'));
        $decoder->parse($this->getInstance());
    }

    /**
     * @expectedException \Wix\FrameworkComponent\Exception\InvalidInstanceException
     */
    public function testParseWithInvalidInstance()
    {
        $decoder = $this->getDecoder(array('application_secret' => $this->getApplicationSecret()));
        $decoder->parse('123');
    }

    /**
     * @expectedException \Wix\FrameworkComponent\Exception\InvalidInstanceException
     */
    public function testParseWithoutAnInstance()
    {
        $decoder = $this->getDecoder(array('application_secret' => $this->getApplicationSecret()));
        $decoder->parse(null);
    }

    public function testParse()
    {
        $decoder = $this->getDecoder(array('application_secret' => $this->getApplicationSecret()));
        $instance = $decoder->parse($this->getInstance());

        $this->assertEquals(get_class($instance), 'Wix\BaseBundle\Instance\Instance');
    }
}