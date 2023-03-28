<?php
class Registraties extends Controller 
{
    private int $delay = 2;
    private string $infoMessage = '';

    private readonly mixed $reservatieModel;

    public function __construct()
    {
        $this->reservatieModel = $this->model('Reservatie');

    }

    public function index()
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $rocambolesque = $this->reservatieModel->getRegistratiesUseSpMySql();
            $data = ['rocambolesque' => $rocambolesque];
            $this->view('reservatieoverzicht/index', $data);
        }
    }
}