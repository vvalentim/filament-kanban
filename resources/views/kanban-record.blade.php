<div
    id="{{ $record->getKey() }}"
    wire:click="handleRecordClick('{{ $record->getKey() }}', {{ @json_encode($record) }})"
    class="record bg-white dark:bg-gray-700 rounded-lg px-4 py-2 cursor-grab font-medium text-gray-600 dark:text-gray-200"
>
    {{ $record->{static::$recordTitleAttribute} }}
</div>
