@extends('app')

@section('content')

    <div class="row">

        <form class=" col-12" method="post" action="{{route('newApplication')}}">
            @csrf
            <input type="hidden" name="user" value="{{$user->id}}">
            <input type="hidden" name="email" value="{{$user->email}}">
            <div class=" d-flex justify-content-center">
                <div style="margin-right: 20px; " class="col-6">
                    <div class="form-group">
                        <label class="myfuckinglabel" for="pan_number">Pan number:</label>
                        <input placeholder="Pan number" name="pan_number" type="text" class="form-control"
                               id="pan_number" required>
                    </div>

                    <div class="form-group">
                        <label class="myfuckinglabel" for="compagny_number">Compagny number if exist</label>
                        <input placeholder="Compagny number" name="compagny_number" type="text" class="form-control"
                               id="compagny_number">
                    </div>


                    <div class="form-group">
                        <label class="myfuckinglabel" for="compagny_number" id="inovation">Innovation field</label>
                        <select class="form-control" id="inovation">
                            <option value="product">Product</option>
                            <option value="process">Process</option>
                            <option value="service">Service</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="myfuckinglabel" for="innovation_description">Brief description about the
                            field</label>
                        <input placeholder="Innovation description" name="innovation_description" type="text"
                               class="form-control"
                               id="innovation_description">
                    </div>

                    <div class="form-group">
                        <label class="myfuckinglabel" for="innovation_sector">Field/Sector of innovation
                            project </label>
                        <input placeholder="Innovation sector" name="innovation_sector" type="text"
                               class="form-control"
                               id="innovation_sector">
                    </div>

                    <div class="form-group">
                        <label class="myfuckinglabel" for="startup_description" style="margin-bottom: 15px;">Give brief
                            details/description of start
                            ups/innovation project/state key innovative features </label>
                        <input placeholder="Startup description" name="startup_description" type="text"
                               class="form-control"
                               id="startup_description">
                    </div>
                    <!--        is started   -->
                    <fieldset class="form-check col-auto">
                        <h4 class="col-form-label col-auto">Current status of the project :</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_started" id="is_started_yes"
                                   value="yes">
                            <label class="form-check-label" for="is_started_yes">
                                yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_started" id="is_started_no"
                                   value="no" checked>
                            <label class="form-check-label" for="gridRadios2">
                                no
                            </label>
                        </div>
                    </fieldset>
                    <!-- is started -->
                </div>
                <div style="margin-left: 20px;" class="col-6">
                    <div class="form-group">
                        <label class="myfuckinglabel" for="estimated_cost">Estimated project cost </label>
                        <input placeholder="Estimated project cost" name="estimated_cost" type="text"
                               class="form-control"
                               id="estimated_cost" required>
                    </div>


                    <div class="form-group">
                        <label class="myfuckinglabel" for="invested">Invested fund so far </label>
                        <input placeholder="Invested So far" name="invested" type="text"
                               class="form-control"
                               id="invested">
                    </div>

                    <div class="form-group">
                        <label class="myfuckinglabel" for="exp_product">Expediture for product </label>
                        <input placeholder="Expediture for product" name="exp_product" type="text"
                               class="form-control"
                               id="exp_product">
                    </div>

                    <div class="form-group">
                        <label class="myfuckinglabel" for="exp_sale">Expediture for sales </label>
                        <input placeholder="Expediture for sales" name="exp_sales" type="text"
                               class="form-control"
                               id="exp_sales">
                    </div>
                    <div class="form-group">
                        <label class="myfuckinglabel" for="expectation">What are you expecting from
                            IIC </label>
                        <select class="form-control" id="expectation" name="expectation">
                            <option value="Library">Library</option>
                            <option value="Technical Menthorship">Technical Menthorship</option>
                            <option value="Workspace">Workspace</option>
                            <option value="Laboratory">Laboratory</option>
                            <option value="Internet">Internet</option>
                            <option value="Business managerial mentorship">Business managerial mentorship</option>
                            <option value="Others">Other</option>

                        </select>
                        <div class="form-group">
                            <label class="myfuckinglabel" for="isnpiration">What inspire you </label>
                            <input placeholder="Your inspiration" name="isnpiration" type="text"
                                   class="form-control"
                                   id="isnpiration">
                        </div>
                        <div class="form-group">
                            <label class="myfuckinglabel" for="tech_innov">What technologie innovation your porject has
                                to offer </label>
                            <input placeholder="Innovation technologie" name="tech_innov" type="text"
                                   class="form-control"
                                   id="tech_innov">
                        </div>
                    </div>
                    <input type="submit" value="Apply" class="btn btn-outline-primary col-4">

                </div>

            </div>
        </form>

    </div>
@endsection