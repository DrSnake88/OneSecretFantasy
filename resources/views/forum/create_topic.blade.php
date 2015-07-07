@extends('app')

@section('page-title')
    Create Topic - One Secret Fantasy
@stop

@section('content')
    <!-- Page Heading -->
    <div class="page-heading text-right">
        <div class="container">
            @include('_partials.searchForm')
            <h2>Create topic</h2>
        </div>
    </div>
    <!-- Single Post -->
    <section class="space-top padding-bottom-2x">
        <div class="container">

            <div class="row">


                <div class="col-md-12">

                    <div class="box-float comments space-top">
                        <h3 class="text-gray text-right text-light">Create a topic</h3>
                        {!! Form::open(['route' => 'topic.store', 'id' => 'comment-form', 'class' => 'space-top space-bottom']) !!}
                        {!! Form::hidden('category_id', $category->id) !!}

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-control">
                                    <input type="text" name="title" id="cf_name" required>
                                    <label for="title">Title</label>
                                    <span class="error-label"></span>
                                    <span class="valid-label"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-control topic">
                            <textarea name="message" rows="5" id="cf_comment" required></textarea>
                            <label for="message">Message</label>
                            <span class="error-label"></span>
                            <span class="valid-label"></span>
                        </div>
                        <div class="row space-top">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-6 col-md-8 col-md-offset-4 col-sm-12">
                                        <button type="submit" class="btn btn-block btn-success btn-float waves-effect waves-light">Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form><!-- Comment Form End -->

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection