<?php

namespace UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PrenotaControllerTest extends WebTestCase
{
    public function testConfpren()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/confpren');
    }

    public function testPrenconf()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/prenconf');
    }

}
