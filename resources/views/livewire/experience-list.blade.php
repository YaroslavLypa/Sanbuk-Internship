<div class="mt-8">
    <div>
        <x-forms.inputs.text-input placeholder="Search.." wire-model="search" class="w-full rounded-md"/>
    </div>

    <div class="mt-8 flex space-x-3">
        <button wire:click="$emit('openModal', 'experience.trip-type-filter')"
                class="bg-gray-200 rounded-md font-medium py-2 px-4">Trip Type
        </button>
        <button wire:click="$emit('openModal', 'experience.boat-type-filter')"
                class="bg-gray-200 rounded-md font-medium py-2 px-4">Boat Type
        </button>
        <button wire:click="$emit('openModal', 'experience.date-filter')"
                class="bg-gray-200 rounded-md font-medium py-2 px-4">Dates
        </button>
    </div>

    <div class="mt-8 space-y-2">
        @foreach($experiences as $experience)
            <div class="bg-gray-100 rounded-md p-6">
                <div>{{ $experience->name }}</div>
                <div>from {{ $experience->getMinimalPackagePrice() }}</div>
                <div class="text-sm text-gray-500">{{ $experience->updated_at->format('Y-m-d') }}</div>
            </div>
        @endforeach
    </div>
</div>
