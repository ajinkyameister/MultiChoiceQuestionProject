@extends('layouts.app')

@section('top')

	@component('components.topnavbar') @endcomponent

@endsection

@section('mainbody')

Good Morning, {{auth()->user()->name}}. your role is {{auth()->user()->role}}
@endsection