@component('mail::message')

# Hola



Hola, {{ $giftcard->user->name }} {{ $giftcard->user->surname }} le ha enviado una tarjeta de regalo por medio de giftcardreembolsable.com Giftcard!



Nota: Para obtener su tarjeta debe seguir los siguientes pasos:


* 1. Ingresar a www.giftcardreembolsable.com

* 2. Ingresar o registrarse en el sitio web

* 3. Ingresar a "Añadir GiftCard"

* 4. Ingresar el siguiente código "{{ $giftcard->code }}" en el capo de texto

* 5. Por último da a guardar.

* 6. ¡Listo!

@component('mail::button', ['url' => env('APP_URL') . '/giftcards/referred-giftcard'])

Cangear código

@endcomponent



Gracias,<br>

{{ config('app.name') }}

@endcomponent