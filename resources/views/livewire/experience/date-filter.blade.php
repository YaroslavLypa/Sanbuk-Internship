<div class="p-6 bg-white text-black space-y-6">
    <div> Start of activity
        <label for="start-date">Start Date:</label>
        <input type="date" class="form-control" id="start-date" wire:model="startDate">
    </div>
    <div> End of activity
        <label for="end-date">End Date:</label>
        <input type="date" class="form-control" id="end-date" wire:model="endDate">
    </div>
    <div wire:click="$emit('filterEvent', 'activity-period', {{ json_encode(compact('startDate', 'endDate')) }})"
         class="bg-blue-500 text-white py-2 px-4 text-center">Apply
    </div>
</div>
