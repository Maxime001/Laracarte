@extends('layout.default',['title'=> 'Contact'])

@section('content')
    <div class="container">
        <div class="row" >
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" >
                <h2>Get In Touch</h2>
                <p class="text-mute">If you having trouble with this service, please <a href="mailto:{{config('laracarte.admin_support_email')}}">ask for help</a></p>

                <form action="{{route('contact_path')}}" method="POST" novalidate >

                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" required="required|min:3">
                        {!!  $errors->first('name','<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required="required">
                        {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                        <label for="email" class="control-label">Message</label>
                        <textarea class="form-control" required="required" name="message" id="message" rows="10" cols="10">{{ old('message') }}</textarea>
                        {!! $errors->first('message','<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <button class="btn btn-primary btn-block" type="submit">Submit Enquiry &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
