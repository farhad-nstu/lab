<?php
namespace FarhadNstu\Spirit\Controllers;

use Illuminate\Http\Request;
use FarhadNstu\Spirit\Spirit;

class SpiritController
{
    public function __invoke(Spirit $spirit) {
        $quote = $spirit->justDoIt();
        return $quote;
    }
}
