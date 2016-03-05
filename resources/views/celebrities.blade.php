<!-- resources/views/tasks.blade.php -->

@extends('layouts.app')

@section('content')


@if (count($celebrities) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                红人列表
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                    <th>id</th>
                        <th>昵称</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($celebrities as $celebrity)
                            <tr>

                                <td>
                                    <div>{{ $celebrity->id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $celebrity->nickname }}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {!! $celebrities->links() !!}
    @endif

    <!-- TODO: Current Tasks -->
@endsection
