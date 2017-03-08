@extends('bitaac::app')

@section('content')
{{-- Page breadcrumbs. --}}
@section('breadcrumbs')
Account // Log In
@stop

{{-- Page content. --}}
@include('bitaac::partials.heading', ['title' => 'Account', 'desc' => 'View and edit your account.'])
<div id="post_wrapper">

    <!-- Leave a response Start -->
    <div id="response" class="contact_form">
        <h1> Account Log In</h1>
        <p>Please enter your account credentials below. If you do not have an account yet, simply <a href="{{ url('/register') }}">sign up</a> to get one.</p>

        <form method="POST">
            {!! csrf_field() !!}

            <label>Account: <small><em>(required)</em></small></label>
            <div>
                <input type="password" name="account">

                @if ($errors->has('account'))
                <em class="error">{{ $errors->first('account') }}</em>
                @endif
            </div>
            <div>
                <label>Password: <small><em>(required)</em></small></label>
                <input type="password" name="password">

                @if ($errors->has('password'))
                <em class="error">{{ $errors->first('password') }}</em>
                @endif
            </div>

            {{-- Two-Factor authentication field. --}}
            @if (config('account.two-factor'))
            <div>
                <label>2FA Code: <small><em>(required)</em></small></label>
                <input type="text" name="2fa">
            </div>
            @endif

            <div class="form_submit"><input type="submit" value="Log In" class="read_more2">
            </div>
        </form>

    </div>
    <!-- Leave a response end -->  


    <div class="clear"></div>
</div>
@stop