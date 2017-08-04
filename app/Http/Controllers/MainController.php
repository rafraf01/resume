<?php

namespace App\Http\Controllers;

use Theme;
class MainController extends Controller
{

    public function index()
    {
        $theme = Theme::uses('default')->layout('default')->setTitle('rdelacruz');
        return $theme->scope('main.index')->render();
    }
}
