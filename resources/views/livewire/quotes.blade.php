<div class="quotes-container bg-light p-4 rounded shadow-sm" wire:poll.60000ms="fetchQuotes">
    <ul class="list-group mb-3">
        @foreach($quotes as $quote)
            <li class="list-group-item">"{{ $quote }}"</li>
        @endforeach
    </ul>

    <button wire:click="fetchQuotes" class="btn btn-success btn-block">Update quotes</button>
</div>
