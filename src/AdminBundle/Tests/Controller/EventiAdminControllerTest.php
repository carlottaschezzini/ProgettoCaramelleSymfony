<?php

namespace AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EventiAdminControllerTest extends WebTestCase
{
    public function testEventadmin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/eventAdmin');
    }

}
