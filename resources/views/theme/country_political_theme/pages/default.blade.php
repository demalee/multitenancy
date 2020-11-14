@extends('theme.country_political_theme.layouts.app')
@section('content')
    <main>
        {!! html_entity_decode(@$page->content) !!}
    </main>

    @endsection
