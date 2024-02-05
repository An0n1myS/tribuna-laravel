<x-mail::message>
# Привіт, {{$bookingEvent->user_name}}

Оплата замовлення № {{$bookingEvent->id}} на захід {{$event->name}} пройшла успішно.

Ваш квиток:

    № {{$bookingEvent->id}}
    Дата: {{ \Carbon\Carbon::parse($event->date_time)->format('d.m.Y') }}
    Час: {{ \Carbon\Carbon::parse($event->date_time)->format('H:i') }}
    Ціна: {{$event->price}} грн.


    “TRIBUNA” - м. Суми, вул. комбрига Євгена Коростельова, 11
</x-mail::message>
