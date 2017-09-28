@extends('core')

@section('content')
    <button  type="button" class="btn btn-basic "><a style ="color: #969696; font-size: larger; font-weight: 700" href="{{route('app.posts.create')}}">{{'Write new post'}}</a></button>
    <button  type="button" class="btn btn-basic "><a style ="color: #969696; font-size: larger; font-weight: 700" href="{{route('app.posts.index')}}">{{'All posts'}}</a></button>

    <div class="titleList" style="font-size: 27px; font-weight: 700; text-align: center; margin-bottom: 10px"> Your posts </div>



    @if(sizeof($list)>0)
        <table  id="mytable" class="table table-bordred table-striped" xmlns="http://www.w3.org/1999/html">
            <thead>
            <tr>

                @foreach($list[0] as $key => $value)
                    @if(substr($key, -3) == '_id')
                        <th>{{ucfirst(substr($key, 0, -3))}}</th>

                    @else
                        <th> {{ucfirst($key)}}</th>
                    @endif
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($list as $key => $record)
                <tr id="{{$record['id']}}">
                    @foreach($record as $key => $value)
                        <td>
                            @if($key == 'image')
                                @if(isset ($value['path']))
                                    <img src={{$value['path']}} width="600">
                                @else
                                    -
                                @endif
                            @else
                                {{$value}}
                            @endif
                        </td>
                    @endforeach
                        {{--<td>--}}
                        {{--<a href="{{ route($edit,$record['id']) }}">--}}
                        {{--<button type="button" class="btn btn-primary">Edit</button>--}}
                        {{--</a>--}}
                        {{--</td>--}}
                        {{--<td>--}}
                        {{--<button onclick="deleteItem( '{{ route($delete, $record['id']) }}' )"--}}
                        {{--class="btn btn-danger">Delete--}}
                        {{--</button>--}}
                        {{--</td>--}}


                </tr>
            @endforeach
            </tbody>
        </table>

    @endif

@endsection