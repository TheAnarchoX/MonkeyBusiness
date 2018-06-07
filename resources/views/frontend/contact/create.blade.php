@extends ('layouts.app')

@section('ccss')
    <style>
        .well {
            box-shadow: 0 0 10px;
            padding: 35px;
            padding-left: 30px;
            margin: 3% auto;
            width: 450px;
        }
    </style>
@endsection

@section('content')
    <form action="/" method="POST">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="well">
                        <div class="well-header">
                            <h1 class="text-center"><strong> Contact Form </strong></h1>
                            <hr/>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="glyphicon glyphicon-user"></i>
                                        </div>
                                        <input type="text" name="cname" placeholder="Enter Your Name" required=""
                                               class="form-control">
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
                                        <input type="email" required="" class="form-control" name="cemail"
                                               placeholder="Enter Email">
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
                                        <input type="tel" placeholder="Enter Mobile Number (Optional)"
                                               class="form-control" name="cnumber">
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
                                        <input type="text" placeholder="Subject" class="form-control"
                                               name="csubject">
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
                                <button class="btn btn-block btn-lg btn-info">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection