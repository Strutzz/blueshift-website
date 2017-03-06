@extends('bitaac::app')

{{-- Page breadcrumbs. --}}
@section('breadcrumbs')
    Latest News
@stop

{{-- Page content. --}}
@include('bitaac::partials.heading', ['title' => 'Latest News', 'desc' => 'Here you will find the latest news about the server.<br>Come back often to stay informed about important changes in the game.'])

@section('content')
    @forelse($news->threads as $post)
		<!--********************************************* Hot news start *********************************************-->
		<div id="hot_news">
			<div class="header">
				<h1><span>BLUESHIFT //</span> NEWS TICKER</h1>
			</div>
	  
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-condensed">
					<tr>
						<td>
							<span>No news tickers exists in the database.
						</td>
					</tr>
				</table>
				<br>
			</div>
			
		</div>
		<!--********************************************* Hot news end *********************************************--> 
		
        <article class="news">
            <header class="news-header">
                <span class="news-date">{{ date('M d Y') }} -</span>
                <h2>{{ $post->title }}</h2>
            </header>

            <div class="news-content">
                {!! strip_tags($post->content, '<p><h1><h2><strong><em><b><i><ul><ol><li><u><strike><hr><br><a><img>') !!}
            </div>
            <footer class="news-footer">
                Published by <a href="{{ $post->player->link() }}">{{ $post->player->name }}</a> in <a href="{{ $post->board->link() }}">{{ $post->board->title }}</a> (<a href="{{ $post->link() }}">{{ $post->replies->count() }}</a>).
            </footer>
        </article>
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
