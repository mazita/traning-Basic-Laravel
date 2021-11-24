    
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Todos Show') }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" value="{{ $todo->title }}" name="title" class="form-control" placeholder="Please enter todo title" readonly>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" readonly>{{ $todo->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Attachment</label>
                        <input type="text" value="Dokumen Attachment" name="title" class="form-control" placeholder="Please enter todo title" readonly>
                        <td> <a  target="_blank"
                href="{{$todo->attachment_url}}" class="btn btn-link" >Show Image</a></td></div>
                    
                </div>
                
                
                <div><td> <a class="btn btn-primary" href="/todos">Back</a></td></div>

   

            </div>
        </div>
    </div>
</div>
@endsection