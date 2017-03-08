@extends('bitaac::app')
<?php $full_wrapper = TRUE; ?>
@section('content')
{{-- Page breadcrumbs. --}}
@section('breadcrumbs')
Community // Search Character

@stop


{{-- Page content. --}}
@include('bitaac::partials.heading', ['title' => 'Characters', 'desc' => 'Detailed information about a certain player.'])
<div id="post_wrapper">

    <!-- Leave a response Start -->
    <div id="body">
        <h1> Search Character</h1>

        <form method="POST">
            {!! csrf_field() !!}

            <label>Character: <small><em>(required)</em></small></label>
            <div>
                <input type="text" name="name">

                    @if ($errors->has('name'))
                        <em class="error">{{ $errors->first('name') }}</em>
                    @endif
            </div>
            <br/>
            <div class="form_submit"><input type="submit" value="Submit" class="read_more2">
            </div>
        </form>

    </div>
    <!-- Leave a response end -->  


    <div class="clear"></div>
</div>


@endsection
