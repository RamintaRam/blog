@extends('core')


@section('content')

    {!! Form::open(['url' => $route,  'files' => true]) !!}
    @if(isset($record['id']))
        <div><h1>{{$record['title']}}</h1></div>
        <div class="form-group">
            {{Form::label('title')}}
            {{Form::text('title', $record['title'])}}
            {{Form::label('text')}}
            {{Form::textarea('text', $record['text'])}}
            {!! Form::label('upload Image') !!}
            {!! Form::file('file', $record['resource_id']) !!}

        </div>
        <a class="btn btn-info" href="{{$back}}">Back to list</a>
        {{Form::submit(('Save'), ['class' => 'btn btn-success']) }}
    @else
        <div>{{$form}}</div>
        <div class="form-group">
            {{Form::label('title')}}
            {{Form::text('title')}}
            {{Form::label('text')}}
            {{Form::textarea('text')}}
            {!! Form::label('Upload Image') !!}
            {!! Form::file('file') !!}
        </div>
        {{--<a class="btn btn-info" href="{{$back}}">Back to list</a>--}}
        <button type="button" class="btn btn-basic "><a style="color: #969696; font-size: larger; font-weight: 700"
                                                        href="{{route('app.posts.index')}}">{{'Back to All Posts'}}</a>
        </button>
        {{Form::submit(('Save'), ['class' => 'btn btn-basic' ])}}
    @endif

@endsection
