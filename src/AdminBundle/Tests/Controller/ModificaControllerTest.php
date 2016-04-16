<?php

namespace AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ModificaControllerTest extends WebTestCase
{
    public function testModifica()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/modifica');
    }

}
