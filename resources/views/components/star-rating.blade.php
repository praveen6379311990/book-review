@if ($rating)
@for($i = 1; $i <= 5; $i++)
{{ $i <= $rating? '★':'☆' }}
@endfor
@else
No reviews here
@endif
