@extends('layouts.main')
@section('content')
    <div class="links">
        <a class="#" href="#">Home</a> /
        <span><a class="#" href="#">About</a></span>
    </div>
    <div class="main-content-3" style="background-color: whitesmoke;  margin: 0 auto">
        <div class="row"  style="margin-top: 10px; padding: 5px 5px 5px 20px">
            <div class="col-sm-8 slide-show" style="background-color: white; margin: 0 auto">
                <form method="post" action="#">
                    <div class="form-group">
                        <label for="message"></label>
                        <div class="input-group">
                            <textarea class="form-control" id="message"  placeholder="Enter your text here"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="float: right; font-size: small">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

