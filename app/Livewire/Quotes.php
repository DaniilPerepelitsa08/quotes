<?php

namespace App\Livewire;

use App\Http\Controllers\QuoteController;
use Livewire\Component;

class Quotes extends Component
{
    public $quotes = [];

    public function mount()
    {
        $this->fetchQuotes();
    }

    public function fetchQuotes()
    {
        $controller = new QuoteController();
        $this->quotes = $controller->getQuotes();
    }

    public function render()
    {
        return view('livewire.quotes');
    }
}

