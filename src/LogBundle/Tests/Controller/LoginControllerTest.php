<?php

namespace LogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');
    }

    public function testPassw()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/passw');
    }

}
