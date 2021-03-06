<?php

namespace App\Services;

use PHPUnit\Framework\TestCase;

class TicketPriceTest extends TestCase
{

    // Amélioration, inclure le fichier YAML pour modifier les prix des billets automatiquement

    public function testUserPriceBaby()
    {
        $age = new TicketPrice();

        $this->assertSame(0, $age->userPrice('2016-2-9', false));
    }

    public function testUserPriceNormal()
    {
        $age = new TicketPrice();

        $this->assertSame(16, $age->userPrice('1985-10-14', false));
    }

    public function testUserPriceReduice()
    {
        $age = new TicketPrice();

        $this->assertSame(10, $age->userPrice('1985-10-14', true));
    }

}