@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

  @include('entrust-gui::partials.notifications')
  @yield('content')

@endsection
