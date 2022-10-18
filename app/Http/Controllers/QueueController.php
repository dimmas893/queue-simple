<?php

namespace App\Http\Controllers;

use App\Models\User;
use Faker\Factory;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    public function index()
    {
        dispatch(new \App\Jobs\Queueuser());
        return view('welcome');
    }
}
