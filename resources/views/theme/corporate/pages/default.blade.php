@extends('theme.corporate.layouts.apps')
@section('content')
    <main>
        {!! html_entity_decode(@$page->content,ENT_QUOTES, 'UTF-8') !!}

    </main>

    @endsection
