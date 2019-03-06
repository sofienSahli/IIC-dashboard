@component('mail::layout')
    {{-- Header --}}
    @slot('header')

        @component('mail::message')
            # Presentation submitted

            {{ $user->name." ".$user->last_name }} Just submited his initial screening presentation,
            and it is now available in the dashboard
            full name : # {{ $user->name." ".$user->last_name }}
            email : # {{ $user->email }}
            Phone : # {{ $user->phone_number }}
            Role : # {{ $user->role }}
        @endcomponent

        @component('mail::button',['url' => route('dashboard'), 'color' => 'primary'])
            Dashboard
        @endcomponent

    @endslot


    {{-- Footer --}}
    @slot('footer')
    @endslot
@endcomponent