<?php

use JeffersonGoncalves\Commerce\Store\Models\Store;
use JeffersonGoncalves\FilamentCommerce\Store\Resources\Store\Pages\CreateStore;
use JeffersonGoncalves\FilamentCommerce\Store\Resources\Store\Pages\ListStore;
use Livewire\Livewire;

it('renders the store list page', function () {
    Store::factory()->count(2)->create();

    Livewire::test(ListStore::class)->assertOk();
});

it('creates a store record through the panel', function () {
    Livewire::test(CreateStore::class)
        ->fillForm([
            'name' => 'Acme',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(Store::query()->count())->toBe(1);
});
