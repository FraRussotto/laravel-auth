@extends('layouts.admin')

@section('content')
    <div class="container w-50 mt-5 text-center border">
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.tecnologies.store') }}" method="POST" class="d-flex">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control mt-3" placeholder="Inserisci una nuova tecnologia" name="name">
                <button type="submit" class="btn btn-primary mt-3">Invia</button>
            </div>
        </form>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tecnologies as $tecnology)
                    <tr>
                        <td>{{ $tecnology->name }}</td>
                        <td>
                            <a href="{{ route('admin.tecnologies.edit', $tecnology) }}" class="btn btn-warning"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('admin.tecnologies.destroy', $tecnology) }}" method="POST"
                                class="d-inline-block" onsubmit="return confirm('Sicuro di volerlo eliminare?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection