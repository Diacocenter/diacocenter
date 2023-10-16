<?php

namespace App\Http\Controllers\Web\v1;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class FAQ extends Controller
{
    public function show()
    {
        return view("faq.faq");
    }
}
