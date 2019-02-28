@component('mail::message')
    @component('mail::layout')

        @slot('header')
            Dear {{ $user->name }} ,
        @endslot

        This is to acknowledge receipt of your application/registration for Incubation at IIC.

        Kindly, follow this link for login to your respective dashboard for further undertaking.

        {{ route('login') }}

        @slot('footer')
            Regards,<br>
            Drashti Shah<br>
            +91-9974272901
        @endslot

    @endcomponent
@endcomponent
