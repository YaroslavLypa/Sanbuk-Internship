<div>
    <button
        class="p-16px font-medium rounded-xl @if($disabled) bg-gray-300 @else bg-blue-500 text-white font-medium @endif btn {{ $class }}"
        @if($type) type="{{ $type }}" @endif
        @if($disabled) disabled @endif
    >
        {{ $title }}
    </button>
</div>
