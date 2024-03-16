@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>

    <div class="table-responsive">
        <a href="/dashboard/posts/create" class="btn btn-outline-primary">Create New Post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"> <span
                                    data-feather="eye"></span>
                            </a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"> <span
                                    data-feather="edit"></span>
                            </a>
                            <form id="delete" action="/dashboard/posts/{{ $post->slug }}" method="POST"
                                class="d-inline">
                                @method('delete')
                                @csrf
                                <button id="delete-posts" class="badge bg-danger border-0"><span
                                        data-feather="x-circle"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        @if (session('success'))
            Swal.fire({
                title: "Success!",
                text: "Create Post Successfull!",
                icon: "success"
            });
        @endif
    </script>
    <script>
        @if (session('update'))
            Swal.fire({
                title: "Success!",
                text: "Update Post Successfull!",
                icon: "success"
            });
        @endif
    </script>
    <script>
        @if (session('delete'))
            Swal.fire({
                title: "Success!",
                text: "Delete Post Successfull!",
                icon: "success"
            });
        @endif
    </script>

    {{-- <script>
        $('#delete-posts').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure ?',
                text: "You won't be able to revert this !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#delete').submit();
                }
            })
        });
    </script> --}}
@endsection
