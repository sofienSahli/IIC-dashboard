@extends('main_app')
@section('content')
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
               aria-selected="true">New Admin Account</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
               aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
               aria-selected="false">Contact</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active row" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="col-12">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col"> Work</th>
                        <th scope="col">Applicant phone number</th>
                        <th scope="col"> User's email</th>
                        <th scope="col"> User's status</th>
                        <th scope="col"></th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)

                        <tr>
                            <td><img  src="{{ asset($user->profile_picture) }}" class="img-fluid" width="150px;"></td>

                            <td><a href="/">{{ $user->name . " ". $user->last_name  }} </a></td>
                            <td> {{ $user->degree }}</td>
                            <td> {{ $user->phone_number }} </td>
                            <td>{{$user->email  }}</td>

                            @if($user->isActive)
                                <td><i class="fas fa-check-circle green-text"></i> Started working</td>
                            @else
                                <td><i class="fas fa-exclamation-triangle yellow-text"></i> Not yet working</td>
                            @endif
                            <td>
                                @if($user->isActive)
                                    <form method="post">
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        <input type="submit" class="btn btn-danger" value="Ban account">
                                    </form>

                                @else
                                    <form method="post">
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        <input type="submit" class="btn btn-green" value="Activate">
                                    </form>

                                @endif
                                <form method="post">
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <input type="submit" class="btn btn-primary" value="Full profile">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Food truck fixie locavore,
            accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial
            PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
            letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud
            organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit
            sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut
            DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui
            sapiente accusamus tattooed echo park.
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Etsy mixtape wayfarers,
            ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table
            readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy
            salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.
            Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog.
            Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable
            tofu synth chambray yr.
        </div>
    </div>
@endsection