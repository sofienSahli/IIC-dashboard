@extends('main_app')
@section('content')

    <style>

        #scrollable {
            overflow-y: scroll;
            height: 69vh;
        }

        .details li {
            list-style-type: none;
            margin: 8px;
            float: top;
            height: 100%;
        }

        .message-box {
            color: white;
            border-radius: 4px;
            padding: 8px;
        }

        .message-container {
            width: 100%;
            padding: 8px;
        }
    </style>

    <div class="row" style="padding-top: 1%;">
        <div class="col-sm-12  col-md-6 col-lg-3 shadow justify-content-start " style="margin: 2%">
            <ul class="details ">
                <li class="flex-center"><img class="img-thumbnail"
                                             src="{{ asset($other_user->profile_picture) }}"></li>
                <li class="flex-center">

                    <h4 class="text-info"> {{ $other_user->name." ".$other_user->last_name }} </h4>
                </li>
                <li>
                    <div class="divider-new"></div>
                </li>
                <li class="flex-start d-inline-flex">

                    <i class="fas fa-phone fa-2x" style="margin-right: 8px;"></i>
                    <h6 class="text-decoration-none"> {{ $other_user->phone_number }} </h6>
                </li>
                <li class="flex-start d-inline-flex">
                    <i class="fas fa-envelope fa-2x" style="margin-right: 8px;"></i>
                    <h6 class="text-decoration-none"> {{ $other_user->email }} </h6>
                </li>

            </ul>
        </div>
        <div class="col-8 col-sm-12 col-md-8 col-lg-8" style="padding: 0;">
            <div id="scrollable">

            </div>
            <div class="md-form col-auto" style="width: 50vh;">
                <input type="text" id="message_text" placeholder="Message..." name="message" class="form-control">
                <input type="hidden" value="{{ $other_user->id }}" id="other_user">
                <input type="hidden" value="{{ $user->id }}" id="user">
            </div>
            <button id="btn" class="btn btn-green col-auto" type="button" onclick="sendMessage()">
                <i class="far fa-paper-plane"></i> Send
            </button>

        </div>
    </div>


    <script src="{{ asset('js/messagerie_misc.js') }}"></script>
    <script>
        document.onkeyup = function (e) {
            if (e.code == 'Enter') {
                if (document.getElementById('message_text').value != "")
                    document.getElementById('btn').click();
                else {
                    alert("Please avoid sending blank messages");
                }
            }
        }


    </script>
@endsection