<?php

namespace app\Controllers;

use app\Models\Todo;
use src\Controller;
use src\Database\Cache;
use src\Http\Request;
use src\Router\Attributes\Any;
use src\Router\Attributes\Get;
use src\Router\Attributes\Post;
use src\Router\Attributes\Route;

class Home extends Controller
{
    #[Any('/')]
    public function get(Request $request): string
    {
        if ($request->isMethod('POST')) {
            $request->rule('required', [
                'name',
                'surname',
                'email'
            ])->rule('email', [
                'email'
            ])->labels([
                'name' => 'Ad',
                'email' => 'E-posta',
                'surname' => 'Soyad'
            ]);
            if ($data = $request->validate()) {

                print_r($data);

            }
        }
        return $request->view('home');
    }
}
