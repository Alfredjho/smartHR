@extends('authtemplate')

@section('Title', 'Forum')
@section('Style')
    <link rel="stylesheet" href="{{asset ('')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@endsection

@section('Content')

<h1>Forum</h1>

<div class="bar" style = "width: 50%; height:1px; background: #BDCFDC;"></div>

<div class="p-3">
            <div class="d-flex p-2">
                <div class="d-flex flex-column gap-3 w-100">
                    @foreach ($posts as $post)
                        <div class="container-fluid p-3 border ">
                            <div class="d-flex gap-3">
                                <img src="{{$post->user->image}}" alt="..." class="rounded-circle" style ="width: 12vh; height:12vh;">
                                <div class="d-flex flex-column">
                                    <p>{{ $post->user->name }}</p>
                                    <p>{{ $post->created_at }}</p>
                                </div>
                                @if ($post->user_id == Auth::user()->id)
                                    <div class="ms-auto d-flex gap-3">
                                        <form action="/delete-post/{{ $post->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <div>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#updateModal" data-bs-postid="{{ $post->id }}">
                                                Edit
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <p class="mt-2">{{ $post->content }}</p>
                            <div class="d-flex flex-start align-items-center justify-center gap-2"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path
                                        d="M205 34.8c11.5 5.1 19 16.6 19 29.2v64H336c97.2 0 176 78.8 176 176c0 113.3-81.5 163.9-100.2 174.1c-2.5 1.4-5.3 1.9-8.1 1.9c-10.9 0-19.7-8.9-19.7-19.7c0-7.5 4.3-14.4 9.8-19.5c9.4-8.8 22.2-26.4 22.2-56.7c0-53-43-96-96-96H224v64c0 12.6-7.4 24.1-19 29.2s-25 3-34.4-5.4l-160-144C3.9 225.7 0 217.1 0 208s3.9-17.7 10.6-23.8l160-144c9.4-8.5 22.9-10.6 34.4-5.4z" />
                                </svg> Reply</div>
                        </div>
                    @endforeach


                </div>

                <div class="d-flex flex-column gap-3 p-3 mx-auto">
                    <input class="form-control border rounded-pill" type="search" placeholder="Search"
                        id="search-input">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary d-inline-flex align-items-center"
                        data-bs-toggle="modal" data-bs-target="#addNewModal">
                        + New
                    </button>
                </div>

            </div>



            <!-- Modal -->
            <form method="POST" action="/add-post">
                {{ csrf_field() }}
                <div class="modal fade" id="addNewModal" tabindex="-1" aria-labelledby="addNewModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="addNewModalLabel">New Post</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Content:</label>
                                    <textarea class="form-control" id="content" name="content"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="updateModalLabel">Update Post</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Content:</label>
                                <textarea class="form-control" id="contentUpdate" name="content"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="updateSubmit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>




    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script async src="{{ asset('js/forum.js') }}"></script>

@endsection
