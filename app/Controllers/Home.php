<?php

namespace app\Controllers;

use src\Controller;
use src\Http\Request;
use src\Router\Attributes\Route;

class Home extends Controller
{

    /**
     * @param \src\Http\Request $request
     *
     * @return string
     */
    #[Route('/')]
    public function index(Request $request): string
    {
        if ($request->isMethod('POST')) {
            $request->rule('required', [
                'name',
                'surname',
            ])->labels([
                'name' => 'İsim',
                'surname' => 'Soyisim',
            ]);
            if ($request->validate()) {
                echo "tamam geçtin";
            } else {
                redirect()->send([
                    'title' => 'Geçemedin hocam',
                    'message' => 'bişeyleri eksik ya da yanlış yazdıysan geçirmem KB',
                ]);
            }
        }

        return $this->view('home');
    }

    /**
     * @return string
     */
    #[Route('/about')]
    public function about(): string
    {
        return 'hakkimizda';
    }
}