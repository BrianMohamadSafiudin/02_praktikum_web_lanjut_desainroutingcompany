<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController
{
    public function __invoke() {
        return redirect('https://www.educastudio.com/about-us');
    }
}
