@props(['status'])

@if($status == 1)
    <span>Новое</span>
@elseif($status == 2)
    <span>Подтверждено</span>
@else
    <span>Отклонено</span>
@endif