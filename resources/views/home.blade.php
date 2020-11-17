@extends('layout')

@section('content')
    @if(count($users))
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!-- ./table-responsive-->
        {{ $users->appends(['s' => request()->s])->links() }}
    @else
        <p>Записей не найдено</p>
    @endif

@endsection
