<?php

namespace UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EventiControllerTest extends WebTestCase
{
    public function testEvent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Event');
    }

}
