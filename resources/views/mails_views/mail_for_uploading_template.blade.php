@component('mail::message')
    @component('mail::layout')

        @slot('header')
            Dear {{ $user->name }} ,
        @endslot

        This is to acknowledge receipt of your application for Incubation at IIC.

        Kindly prepare a presentation as per attached format and submit the same by 01/03/19 01:00 pm.

        Note: You can change the format of the presentation but all the details asked in the presentation should be covered

        @slot('footer')
            Regards,<br>
            Drashti Shah<br>
            +91-9974272901
        @endslot

    @endcomponent
@endcomponent
