<?php

namespace App\Controllers;

class main extends BaseController
{
    public function main()
    {
    $header = view('templates/header');
    $main = view('main/main');

    $data['content'] = $header . $main;

    $fullContent = $header . $main;
    return $fullContent;
    }
}
