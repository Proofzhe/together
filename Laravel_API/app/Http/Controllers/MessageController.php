<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    protected $message;

    public function __construct()
    {
        $this->message = new Message;
    }

    public function store(Request $request)
    {
        $this->message->store($request);
        

        // 返回回應或其他操作
        return ($request);
    }

    public function index(Request $request)
    {
        $allnews = DB::table('comments')->get();
        $json = $allnews->toJson();
        return $json;
    }

    
}