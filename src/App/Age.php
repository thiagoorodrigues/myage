<?php

namespace App;

use DateTime;

class Age
{

    public function __construct(
        private DateTime $dob,
        private DateTime $currentYear
    ) {
    }

    public function calculate()
    {
        return $this->currentYear->diff($this->dob)->format("%y");
    }
}
