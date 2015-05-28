@extends('app')

@section('content')
    @include('_partials.breadcrumbs')

    <!-- Page Heading -->
    <div class="page-heading text-right">
        <div class="container">
            <form class="search-field form-control">
                <button type="submit" class="search-btn"><i class="flaticon-search100"></i></button>
                <input type="text" id="search-input">
                <label for="search-input">Search</label>
            </form>
            <h2>Category Name</h2>
        </div>
    </div>

    <section class="space-top padding-bottom">
        <div class="container">
            <!-- Buttons -->
            <div class="row">
                <div class="col-md-1 col-md-offset-10">
                    <a href="#" class="btn btn-flat btn-success waves-effect waves-primary btn-sm">NEW THREAD</a>
                </div>
            </div>

            <table class="table table-hover table-responsive forum">
                <thead>
                <tr>
                    <th class="col-md-1"></th>
                    <th class="col-md-5">Subject</th>
                    <th class="col-md-3">Author</th>
                    <th class="col-md-1">Replies</th>
                    <th class="col-md-1">Views</th>
                    <th class="col-md-1">Last Post</th>
                </tr>
                </thead>
                <tbody>
                @for ($i = 0; $i < 7; $i++)
                    {
                    <tr>
                        <td></td>
                        <td>Welcome</td>
                        <td><a href="#">OneSecretFantasy</a></td>
                        <td>12</td>
                        <td>156</td>
                        <td>12-4-2015</td>
                    </tr>
                    }
                </tbody>
            </table>

            <!-- Pagination -->

            <ul class="pagination pagination-centered">
                <li class="disabled"><a href="#">Prev</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    </section>
@stop