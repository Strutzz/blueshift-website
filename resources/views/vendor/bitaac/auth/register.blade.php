@extends('bitaac::app')

@section('content')
{{-- Page breadcrumbs. --}}
@section('breadcrumbs')
Account Create
@stop

{{-- Page content. --}}
@include('bitaac::partials.heading', ['title' => 'Sign Up', 'desc' => 'Create your account in order to log in.'])

<div id="post_wrapper">

    <!-- Leave a response Start -->
    <div id="response" class="contact_form">
        <h1> Create Account</h1>
        <p>If you already have an account, you might want to <a href="{{ url('/login') }}">log in</a> instead.</p>

        <form method="POST">
            {!! csrf_field() !!}

            <label>Email: <small><em>(required)</em></small></label>
            <div>
               <input type="text" name="email" value="{{ old('email') }}">

               @if ($errors->has('email'))
               <em class="error">{{ $errors->first('email') }}</em>
               @endif
           </div>
           <div>
            <label>Password: <small><em>(required)</em></small></label>
            <input type="password" name="password">

            @if ($errors->has('password'))
            <em class="error">{{ $errors->first('password') }}</em>
            @endif
        </div>

        <div>
            <label>Repeat Password: <small><em>(required)</em></small></label>
            <input type="password" name="password_confirmation">
        </div>

        <div>

            <input type="checkbox" name="terms" id="terms">
            <label>I agree with the <a href="#">Terms of Service</a> & <a href="#">Server Rules</a>.<small><em>(required)</em></small></label>
        </div>

        <div class="form_submit"><input type="submit" value="Create Account" class="read_more2">
        </div>
    </form>

</div>
<!-- Leave a response end -->  


<div class="clear"></div>
</div>
@stop
