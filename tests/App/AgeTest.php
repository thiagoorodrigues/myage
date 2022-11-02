<?php

namespace Tests\App;

use \PHPUnit\Framework\TestCase;

class AgeTest extends TestCase
{
    public function testCalculateAge()
    {
        $today = new \DateTime();
        $dob = new \DateTime();
        $dob->setDate(1989, 2, 14);

        $age = new \App\Age($dob, $today);
        $this->assertEquals($age->calculate(), 33);
    }
}
