@extends('bitaac::app')
<?php $full_wrapper = TRUE; ?>
@section('content')
{{-- Page breadcrumbs. --}}
@section('breadcrumbs')
Community // Latest Deaths
@stop

{{-- Page content. --}}
@include('bitaac::partials.heading', ['title' => 'Latest Deaths', 'desc' => ''])

<div id="post_wrapper">

    <div id="body" style="
    width: 100%;
">
        <h1> Latest Deaths</h1>
        <table>

            {{-- Characters. --}}
            @forelse ($deaths as $death)
            <tr>
                <td width="40%">{{ date('M d Y, H:i:s T', (int) $death->time) }}</td>

                <td>
                    {!!
                        str_e(':player died on level :level by :killed_by and :mostdamage_by.', [
                            'player'        => '<a href="'. e($death->player->link()) .'">'. e($death->player->name) .'</a>',
                            'level'         => $death->level,
                            'killed_by'     => e($death->killed_by),
                            'mostdamage_by' => e($death->mostdamage_by)
                            ], false)
                            !!}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">There are no deaths to show.</td>
                    </tr>
                    @endif
                </table>

                @if (config('bitaac.community.deaths-pagination'))
                <table>
                    <tr class="transparent noborderpadding">
                        <td>
                            @if ($previous = $deaths->previousPageUrl())
                            <a href="{{ url($previous) }}">Previous</a>
                            @endif
                        </td>
                        <td align="right">
                            @if ($next = $deaths->nextPageUrl())
                            <a href="{{ url($next) }}">Next</a>
                            @endif
                        </td>
                    </tr>
                </table>
                @endif
            </div>
            <!-- Leave a response end -->  


            <div class="clear"></div>
        </div>
        @endsection
