@extends('startuper_interns_app_body')
@section('content')

    <style>

        #scrollable {
            overflow-y: scroll;
            height: 70vh;
        }

        .messenger-area {
            overflow-y: scroll;
            height: 240px;
            margin: 0;
            padding: 0;
        }

        .messanger-row {
            height: 100px;
            width: 100%;
            padding: 16px;
            border-radius: 8px;
            margin-top: 2px;
        }

        .messanger-button {
            border: transparent;
            background: transparent;
            width: 100%;
            height: 100%;
        }

        .messanger-button:hover {
            background: #bdc3c7;
            box-shadow: #0f6674;
            cursor: pointer;
        }

        .details li {
            list-style-type: none;
            margin: 8px;
            float: top;
            padding: 0;
            height: 100%;
        }

        .details {
            margin: 0;
            padding: 0;
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
                @if(!empty($other_users))

                    <input type="hidden" value="{{ $other_users[0]->id }}" id="other_user">

                    <li class="flex-center">
                        <img class="img-thumbnail"
                             src="{{ asset($other_users[0]->profile_picture) }}" id="other_picture"></li>
                    <li class="flex-center">

                        <h4 class="text-info"
                            id="other_name"> {{ $other_users[0]->name." ".$other_users[0]->last_name }} </h4>
                    </li>

                    <li class="flex-start d-inline-flex">

                        <i class="fas fa-phone fa-2x" style="margin-right: 8px;"></i>
                        <h6 class="text-decoration-none" id="other_phone"> {{ $other_users[0]->phone_number }} </h6>
                    </li>
                    <li class="flex-start d-inline-flex">
                        <i class="fas fa-envelope fa-2x" style="margin-right: 8px;"></i>
                        <h6 class="text-decoration-none" id="ohter_email"> {{ $other_users[0]->email }} </h6>
                    </li>

                    <li>
                        <div class="divider-new"></div>
                    </li>
                    <div class="messenger-area">
                        @foreach($other_users as $u )
                            <div class=" messanger-row shadow-sm shadow-lg shadow">
                                <button onclick="switch_discussion({{ $u }})"
                                        class=" messanger-button justify-content-start">
                                    <img src="{{ asset($u->profile_picture) }}" width="50px"
                                         height="50px">
                                    {{ $u->name." ".$u->last_name }}
                                </button>

                            </div>

                        @endforeach
                        @endif
                    </div>

            </ul>
        </div>
        <div class="col-8 col-sm-12 col-md-8 col-lg-8" style="padding: 0;">
            <div id="scrollable">

            </div>
            <div class="md-form col-auto" style="width: 50vh;">
                <input type="text" id="message_text" placeholder="Message..." name="message" class="form-control">
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