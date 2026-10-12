@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p class="lead fw-bold">{{ $description }}</p>
            </div>
            <div class="row">
                <div class="col text-center">
                    <p class="lead fst-italic">{{ $author }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
