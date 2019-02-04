@extends('app')
@section('content')
    <div class="container-fluid row">
        <div class="col-6 d-flex justify-content-center align-items-center">
            <img src="{{asset('images/logo.png')}}" class="img-fluid" width="75px;" style="padding: 1%; margin: 1%;">
            <p>
                <strong> Farhad Hachad :</strong>
                last sumbmited post will go here and that's will be displayed for future use
            </p>
        </div>


        <div class="col-lg-6 col-12" style="margin-top: 3%;">
            <form action="{{ route('uppresentation') }}" enctype="multipart/form-data" method="post">

                <div class="card ">
                    @if($user->application->isPresentationSubmited == false)
                        @csrf
                        <input name="id" type="hidden" value="{{ $user->application->id }}">
                        <div class="card-body">
                            <label> You are now free to upload your presentation </label>

                            <div class="input-group">

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                           aria-describedby="inputGroupFileAddon01" name="file">
                                    <label class="custom-file-label" for="inputGroupFile01">Select your .pptx
                                        presentation </label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-inline-flex justify-content-end">
                            <input type="submit" value="Upload" class="btn btn-primary">
                        </div>
                    @endif
                </div>
            </form>

        </div>
    </div>

@endsection