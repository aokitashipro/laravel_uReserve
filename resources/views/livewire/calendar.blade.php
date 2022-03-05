<div>
    カレンダー
      <input id="calendar" class="block mt-1 w-full" 
      type="text" name="calendar"
      value="{{ $currentDate }}"
      wire:change="getDate($event.target.value)" />
    
    <div class="flex">
        @for($day = 0 ; $day < 7; $day++)
            {{ $currentWeek[$day] }}
        @endfor
    </div>
    @foreach ($events as $event )
    {{ $event->start_date }}<br>
    @endforeach
</div>
