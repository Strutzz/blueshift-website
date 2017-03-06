@extends('bitaac::app')

{{-- Page breadcrumbs. --}}
@section('breadcrumbs')
Latest News
@stop

{{-- Page content. --}}
@include('bitaac::partials.heading', ['title' => 'Latest News', 'desc' => 'Here you will find the latest news about the server.<br>Come back often to stay informed about important changes in the game.'])

@section('content')
@forelse($news->threads as $post)

<li>
<div class="image"><a href="#"><img alt="alt_example" src="./images/media/full/1.jpg" /></a></div>
	<div class="info">
		<h2><a href="{{ $post->link() }}">{{ $post->title }}</a></h2>
		<div class="date_n_author">{{ date('M d Y') }}, by <a href="{{ $post->player->link() }}">{{ $post->player->name }}</a></div>
		<p>{!! strip_tags($post->content, '<p><h1><h2><strong><em><b><i><ul><ol><li><u><strike><hr><br><a><img>') !!}</p>
		<a href="{{ $post->link() }}" class="read_more2">read more</a>
	</div>
</li>
@empty
<li>
	<div class="image"><a href="./post.html"><img alt="alt_example" src="./images/media/full/1.jpg" /></a></div>
	<div class="info">
		<h2><a href="./post.html">Welcome to Bitaac</a></h2>
		<div class="date_n_author">{{ date('M d Y') }}, by <a href="#">Cornex</a></div>
		<p>Hello & welcome to bitaac!<br>This is just a placeholder news, you can remove it anytime by create a news record</p>
		<a href="./post.html" class="read_more2">read more</a>
	</div>
</li>

@endforelse
@endsection
