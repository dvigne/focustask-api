<?php

namespace App\Http\Controllers;

use App\AppReview;
use Illuminate\Http\Request;

class AppReviewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function submitReview(Request $request)
    {
      $review = new AppReview;

      $review->apprating = $request->input('apprating');
      $review->productivityrating = $request->input('productivityrating');
      $review->comments = $request->input('comments');

      $review->save();

      return "OK";
    }
}
