<?php

namespace App\Http\Controllers\Api;

use App\Thread;

class ThreadsController
{
    /**
     * Get home threads list.
     *
     * @return array
     */
    public function index()
    {
        $threads = Thread::latest()->with('channel', 'user')->paginate();

        return compact('threads');
    }
}