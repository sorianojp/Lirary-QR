@extends('layouts.app')
   
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <p><strong>Whoops!</strong> There were some problems with your input.</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow">
                    <div class="card-header border-0 bg-primary text-white">Book Details</div>
                        <div class="card-body">
                            <form action="{{ route('books.update',$book->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                        
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label>Title:</label>
                                            <input type="text" name="title" value="{{ $book->title }}" class="form-control" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label>Author:</label>
                                            <input type="text" name="author" value="{{ $book->author }}" class="form-control" placeholder="Author">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                                    <label>Select Category</label>
                                                    <select class="form-control" name="category_id">
                                                    @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                    </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label>ISBN:</label>
                                            <input type="text" name="isbn" value="{{ $book->isbn }}" class="form-control" placeholder="ISBN">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label>Publisher:</label>
                                            <input type="text" name="publisher" value="{{ $book->publisher }}" class="form-control" placeholder="Publisher">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label>Year:</label>
                                            <input type="number" name="year" value="{{ $book->year }}" class="form-control" placeholder="Year">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label>Quantity:</label>
                                            <input type="number" name="quantity" value="{{ $book->quantity }}" class="form-control" placeholder="Quantity">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label>Accession No.:</label>
                                            <input type="number" name="ac_no" value="{{ $book->ac_no }}" class="form-control" placeholder="Accession No">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection