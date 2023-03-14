<?php

class Registrationpage extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Rocambolesque',
            'sayHello' => 'Hallo Allemaal'
        ];
        $this->view('registrationpage/index', $data);
    }
}
?> 