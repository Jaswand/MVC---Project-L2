<?php

class Landingpages extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Rocambolesque',
            'sayHello' => 'Hallo Allemaal'
        ];
        $this->view('landingpages/index', $data);
    }
}
?> 