@extends('errors::layout')

@section('code')
403
@endsection

@section('title')
Access refusé
@endsection

@section('message', __($exception->getMessage() ?: 'Desolé, l'access à cette page vous a été refusé.))