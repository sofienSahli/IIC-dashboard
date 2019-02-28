@component('mail::layout')
    {{-- Header --}}
    @slot('header')

        @component('mail::message')
            # New Sign up
            A new Account has been created. Please navigate to admin dashboard for further details.
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