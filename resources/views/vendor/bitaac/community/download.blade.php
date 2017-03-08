@extends('bitaac::app')
<?php $full_wrapper = TRUE; ?>
@section('content')
{{-- Page breadcrumbs. --}}
@section('breadcrumbs')
Download
@stop

{{-- Page content. --}}
@include('bitaac::partials.heading', ['title' => 'High Score', 'desc' => ''])
<div id="post_wrapper">

    <div id="body">
    <h1> Download page</h1>

    </div>
    <div class="clear"></div>
</div>
@endsection
