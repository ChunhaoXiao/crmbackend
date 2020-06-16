<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackReplyController extends Controller
{
    public function store(Request $request, Feedback $feedback) {
        $feedback->reply()->updateOrCreate(['feedback_id' => $feedback->id], $request->input());
        return response()->json(['status' => 0]);
    }
}
