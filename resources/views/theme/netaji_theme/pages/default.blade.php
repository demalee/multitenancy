@extends('theme.netaji_theme.layouts.apps')
@section('content')
    <main>
        {!! html_entity_decode(@$page->content) !!}
    </main>

    @endsection
