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
        if ($request->isMethod('POST')) {
            $request->rule('required', [
                'title',
            ])->labels([
                'title' => 'Todo',
            ]);
            if ($request->validate()) {
                $status = Todo::insert([
                    'title' => $request->validator->data()['title'],
                    'user_id' => 1,
                    'completed' => 0,
                ]);
                if ($status) {
                    cache()->flush();
                    redirect(site())
                        ->send([
                            'title' => 'Başarılı!',
                            'message' => 'Todo başarılı bir şekilde eklendi',
                        ]);
                } else {
                    redirect(site())
                        ->send([
                            'title' => 'Hata!',
                            'message' => 'Todo eklenirken bir hata oluştu',
                        ]);
                }
            }
        }
        $todos = Cache::use('user_id_1', function () {
            return Todo::where('user_id', '1')->get();
        });
        $todos = array_reverse($todos);
        return $this->view('home', compact('todos'));
  }
}
