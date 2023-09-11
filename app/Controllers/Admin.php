<?php

namespace app\Controllers;

use src\Controller;
use src\Router\Attributes\Route;

class Admin extends Controller
{
    #[Route('/admin')]
    public function index(): string
    {
        return '/admin';
    }
}