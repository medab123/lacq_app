@extends('layouts.master')


@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="card " style=" background-color: rgb(255, 255, 255)">
        <div class="card-header d-inline ">{{ __('Role Management') }}
            @can('role-create')
                <a class="btn btn-success btn-sm float-right d-inline" href="{{ route('roles.create') }}">Create New Role</a>
            @endcan
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-sm ">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center text-nowrap">#</th>
                            <th class="text-center pr-4 text-nowrap">Name</th>
                            <th class="text-right pr-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td class="text-center text-nowrap">{{ $role->id }}</td>
                                <td class="text-center text-nowrap">{{ $role->name }}</td>
                                <td class="text-right text-nowrap">
                                    <a class="btn btn-info btn-sm" href="{{ route('roles.show', $role->id) }}"><i
                                            class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    @can('role-edit')
                                        <a class="btn btn-primary btn-sm" href="{{ route('roles.edit', $role->id) }}"><i
                                                class="fa fa-edit"></i></a>
                                    @endcan
                                    @can('role-delete')
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"
                                                aria-hidden="true"></i></button>
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        {!! $roles->render() !!}
    @endsection
