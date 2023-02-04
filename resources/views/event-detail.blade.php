@auth
<x-event-detail-auth 
 :event='$event' 
 :reservablePeople='$reservablePeople'
 :isReserved='$isReserved'
/>
@endauth

@guest
<x-event-detail-guest 
 :event='$event' 
 :reservablePeople='$reservablePeople'
 :isReserved='$isReserved'
/>
@endguest
