<div>
    <h1 class="text-secondary">Your license is currently for <strong>{{ pluralize($teamSize, 'person', 'people') }}</strong>.</h1>

    <input type="range" wire:model="teamSize" class="form-control-range text-secondary" min="1" max="10" value="2">

    <h2 class="mt-5">Amount: {{ money($amount) }}</h2>
</div>
