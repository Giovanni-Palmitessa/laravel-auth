@extends('admin.layouts.base')

@section('contents')

    <h1>Portfolios</h1>

    @if (session('delete_success'))
        @php $portfolio = session('delete_success') @endphp
        <div class="alert alert-danger">
            Il portfolio "{{ $portfolio->name }}" è stato eliminato per sempre :(
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome Progetto</th>
                <th scope="col">Nome del Cliente</th>
                <th scope="col">Data Inizio Progetto</th>
                <th scope="col">Data Fine Progetto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portfolios as $portfolio)
                <tr>
                    <th scope="row">{{ $portfolio->id }}</th>
                    <td>{{ $portfolio->name }}</td>
                    <td>{{ $portfolio->client_name }}</td>
                    <td>{{ $portfolio->pickup_date}}</td>
                    <td>{{ $portfolio->deploy_date }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.portfolios.show', ['portfolio' => $portfolio->id]) }}">View</a>
                        <a class="btn btn-warning" href="{{ route('admin.portfolios.edit', ['portfolio' => $portfolio->id]) }}">Edit</a>
                        {{-- <form
                            action="{{ route('admin.portfolios.destroy', ['portfolio' => $portfolio->id]) }}"
                            method="post"
                            class="d-inline-block"
                        >
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form> --}}
                        <button type="button" class="btn btn-danger js-delete" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $portfolio->id }}">
                            Delete
                        </button>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $portfolios->links() }}

@endsection