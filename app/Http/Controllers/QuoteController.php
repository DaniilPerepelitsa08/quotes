<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuoteController extends Controller
{
    public function getQuotes()
    {
        $quotes = [];
        $quotesCount = 5;

        for ($i = 0; $i < $quotesCount; $i++) {
            $response = Http::get('https://api.kanye.rest');
            if ($response->ok()) {
                $quotes[] = $response->json()['quote'];
            }
        }
        return $quotes;
    }
}
