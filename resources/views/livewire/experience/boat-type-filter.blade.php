<div class="p-6 bg-white text-black space-y-6">
    @foreach($items as $item)
        <label wire:click="setSelected({{ $item->id }})">
            <div>
                <input type="checkbox" @if(in_array($item->id, $selected)) checked @endif />
                <span>{{ $item->name }}</span>
            </div>
        </label>
    @endforeach

    <div wire:click="$emit('filterEvent', 'type', @json($selected))"
         class="btn bg-blue-500 text-white py-2 px-4 text-center">Apply
    </div>
</div>

