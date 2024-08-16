@extends('layouts.app')
@section('content')
    @include('components.contact.list')
    @include('components.contact.create')

    @include('components.contact.edit')
    @include('components.contact.delete-modal')
@endsection
