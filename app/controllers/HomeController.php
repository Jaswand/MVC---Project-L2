<?php

    class HomeController extends Controller 
    {
        public function index()
        {
            $data = [
                'title' => 'Rocambolesque',
                'sayHello' => 'Hallo Allemaal'
            ];
            $this->view('home/navigationbar', $data);
        }
    }

?>