<?php

namespace AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReportControllerTest extends WebTestCase
{
    public function testReport()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/report');
    }

}
