<?php

namespace app\Controllers;

use src\Controller;
use src\Http\Request;
use src\Router\Attributes\Route;

class Home extends Controller
{
    #[Route('/')]
    public function index(Request $request): string
    {
        if ($request->isMethod('POST')) {
            $request->rule('required', [
                'name',
                'surname',
            ])->labels([
                'name' => 'İsim',
                'surname' => 'Soyisim'
            ]);
            if ($request->validate()) {
                echo "tamam geçtin";
            }
        }

        return $this->view('home');
    }

    #[Route('/about')]
    public function about(): string
    {
        return 'hakkimizda';
    }
}