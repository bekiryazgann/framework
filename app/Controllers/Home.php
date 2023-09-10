<?php

namespace app\Controllers;

use app\Models\Todo;
use src\Controller;
use src\Database\Cache;
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
        $todos = Cache::use('user_id_1', function () {
            return Todo::where('user_id', 1)->get();
        });

        return $this->view('home', compact('todos'));
    }
}