

@extends('test')
@section('test')
    
{!! Form::open(['action'=>'Transation@store']) !!}
 
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
{!! Form::label('Name:') !!}
{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
<span class="text-danger">{{ $errors->first('name') }}</span>
</div>
 
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
{!! Form::label('Amount:') !!}
{!! Form::number('amount', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Amount']) !!}
<span class="text-danger">{{ $errors->first('amount') }}</span>
</div>
 
<div class="form-group {{ $errors->has('subcategory') ? 'has-error' : '' }}">
{!! Form::label('Category:') !!}
{!! Form::text('category', old('category'), ['class'=>'form-control', 'placeholder'=>'Enter category']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>

<div class="form-group {{ $errors->has('subcategory') ? 'has-error' : '' }}">
  {!! Form::label('Subcategory:') !!}
  {!! Form::text('subcategory', old('subcategory'), ['class'=>'form-control', 'placeholder'=>'Enter subcategory']) !!}
  <span class="text-danger">{{ $errors->first('subcategory') }}</span>

</div>
 
<div class="form-group">
<button class="btn btn-success">Submit</button>
</div>
 
{!! Form::close() !!}
    
@endsection

