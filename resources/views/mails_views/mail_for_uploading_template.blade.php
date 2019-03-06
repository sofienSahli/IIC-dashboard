@component('mail::message')
    @component('mail::layout')

        @slot('header')
            Dear {{ $user->name }} ,
        @endslot

        This is to acknowledge receipt of your application/registration for Incubation at IIC.



        Kindly, follow this link for login to your respective dashboard for further undertaking.
        A template of the requested presentation
        will be available to download on your Startupers' Area.
        {{ route('login') }}

        Also please note that for further, undertaking you have to submit your application's presentation before
        the given deadline {{ $deadline->deadline_date }}.

        @slot('footer')
            Regards,<br>
            Drashti Shah<br>
            +91-9974272901
        @endslot

    @endcomponent
@endcomponent
