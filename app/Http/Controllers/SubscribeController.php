<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function toggle(Blog $blog)
    {
        if ($blog->isSubscribed()) {
            $blog->subscribedUsers()->detach(auth()->id());
        } else {
            $blog->subscribedUsers()->attach(auth()->id());
        }

        return back()->with('success', 'subscribed successfully');
    }
}
