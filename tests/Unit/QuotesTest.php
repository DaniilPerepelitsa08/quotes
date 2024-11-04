<?php

namespace Tests\Unit;

use App\Livewire\Quotes;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use Tests\TestCase;

class QuotesTest extends TestCase
{
    /** @test */
    public function fetch_five_quotes()
    {
        Http::fake([
            'api.kanye.rest' => Http::response(['quote' => 'quote 1'], 200)
        ]);

        Livewire::test(Quotes::class)
            ->call('fetchQuotes')
            ->assertCount('quotes', 5);
    }
}
