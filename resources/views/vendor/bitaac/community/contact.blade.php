@extends('bitaac::app')
<?php $full_wrapper = TRUE; ?>
@section('content')
{{-- Page breadcrumbs. --}}
@section('breadcrumbs')
Contact
@stop

{{-- Page content. --}}
@include('bitaac::partials.heading', ['title' => 'High Score', 'desc' => ''])
<div id="post_wrapper">

    <!-- Leave a response Start -->
    <div id="body">
        <h1> Drop us a message! </h1>
        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque sit amet lacus justo. Mauris suscipit dolor id lacus commodo ultricies elementum ante tempor. Sed lacus arcu, iaculis id auctor commodo, facilisis eget felis. </p>

        <form id="form" action="submit">
            <div class="form_left">

                <label>Name <small><em>(required)</em></small></label>
                <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] text-input" id="name">

                <label>Email <small><em>(required)</em></small></label>
                <input name="email" type="text" class="validate[required,custom[email]] text-input" id="email">

                <label>Website</label>
                <input type="text" name="web" id="web">

            </div>
            <div class="form_right">
                <p class="text">
                    <label>Your Message <small><em>(required)</em></small></label>
                    <textarea name="text" class="validate[required,length[6,300]] text-input" id="comment" cols="10" rows="10"></textarea>
                </p>
            </div>

            <div class="form_submit"><input type="submit" value="post" class="read_more2">
            </div>
        </form>

    </div>
    <!-- Leave a response end -->  


    <div class="clear"></div>
</div>
@stop