@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            {{ isset($event) ? 'Edit Event' : 'Create Event' }}
        </div>
        <div class="card-body">
            <form action="{{isset($event) ? route('events.update', $event->id) : route('events.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (isset($event))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ isset($event) ? $event->title : ''}}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input id="content" type="hidden" name="content" value="{{ isset($event) ? $event->content : ' '}}">
                <trix-editor input="content"></trix-editor>
            </div>
            <div class="form-group">
                <label for="held_on">Held On</label>
                <input type="text" class="form-control" name="held_on" id="held_on" value="{{ isset($event) ? $event->held_on : ''}}">
            </div>    
            <div class="form-group">
                <button type="submit" class="btn btn-success">{{ isset($event) ? 'Update Event' : 'Create Event'}}</button>
            </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr('#held_on', {
            enableTime: true,
            enableSeconds: true
        })

        $(document).ready(function() {
        $('.tags-selector').select2();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection