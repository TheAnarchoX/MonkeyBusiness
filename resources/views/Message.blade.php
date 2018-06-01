@extends ('layouts.Master')

@section('ccss')
    <style>
        .well
        {
            box-shadow: 0 0 10px;
            padding: 35px;
            padding-left: 30px;
            margin: 3% auto;
            width: 450px;
        }

        body
        {
            background-color: #5bc0de;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="well">
                    <img src="http://www.cabkc.in/resource/Image/img-mail-contact.jpg" height="100px;" width="100px;" class="center-block img-responsive img-rounded img-circle img-thumbnail">
                    <div class="well-header">
                        <h1 class="text-center"> <strong> Contact Form </strong></h1>
                        <hr />
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </div>
                                    <input type="text" name="cname" placeholder="Enter Your Name" required="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-envelope"></i>
                                    </div>
                                    <input type="email" required="" class="form-control" name="cemail" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-phone"></i>
                                    </div>
                                    <input type="number" placeholder="Enter Mobile Number (Optional)" class="form-control" name="cnumber">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-globe"></i>
                                    </div>
                                    <input type="text" placeholder="Enter Website (Optional)" class="form-control" name="cweb">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-comment"></i>
                                    </div>
                                    <textarea class="form-control" placeholder="Enter Message Here..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <button class="btn btn-block btn-lg btn-info"> Submit </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection