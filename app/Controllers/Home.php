<?php

namespace app\Controllers;

use app\Models\Todo;

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
        $todos = Todo::all();
        return $this->view('test', compact('todos'));
    }
}