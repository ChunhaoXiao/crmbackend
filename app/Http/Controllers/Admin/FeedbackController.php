<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index() {
        $datas = Feedback::with('user')->latest()->paginate(20);
        return view('admin.feedback.index', ['datas' => $datas]);
    }
}
