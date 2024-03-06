<?php

namespace App\Controllers;

class photos extends BaseController
{
    public function photos()
    {
    $header = view('templates/header');
    $photos = view('photos/photos');

    $data['content'] = $header . $photos;

    $fullContent = $header . $photos;
    return $fullContent;
    }
}