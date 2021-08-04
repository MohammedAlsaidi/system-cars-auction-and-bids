<?php

namespace App\Http\Controllers\FrontController;

use App\ApplyAuction;
use App\Auction;
use App\Http\Controllers\Controller;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApplyAuctionController extends Controller
{



    public function index()
    {

    }

    public function store(Request $request, Auction $auction)
    {
        if (auth()->check()) {
            $user = auth()->user();
            if (Carbon::parse($auction->end)->toDateTimeString() > now()->toDateTimeString()) {

                ApplyAuction::create([
                    'auction_id' => $auction->id,
                    'user_id' => $user->id,
                    'price' => $request->price,
                ]);
                return back()->with('success','Bid added successfully');
            } else {
                return back()->with('fail', 'The Auctin time is ended');
            }
        } else {
            return back()->with('fail', 'you have to be authorized to attempt');
        }
    }
}
