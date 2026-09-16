<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class TodoController extends Controller
{
    /**
     * Display a simple static todo list page.
     */
    public function index(): View
    {
        $todos = [
            ['title' => 'Belajar Git branching', 'done' => true],
            ['title' => 'Membuat Pull Request', 'done' => true],
            ['title' => 'Menyiapkan GitHub Actions CI', 'done' => false],
            ['title' => 'Mengumpulkan laporan tugas', 'done' => false],
        ];

        return view('todos.index', compact('todos'));
    }
}
