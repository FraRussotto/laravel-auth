@extends('layouts.admin')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Description</th>
                <th scope="col">Link</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->date }}</td>
                    <td>{!! $project->description !!}</td>
                    <td><a href="{{ $project->link }}">{{ $project->link }}</a></td>
                    <td style="width: 200px">
                        <a href="{{ route('admin.projects.show', $project) }}"
                            class="card-link btn btn-success d-inline-block"><i class="fa-regular fa-eye"></i></a>
                        @include('admin.partials.delete')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
