

@extends('test')
@section('test')
    
{!! Form::model($item, ['method' => 'PATCH','route' => ['Transation.edit', $item->id]]) !!}
 
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
{!! Form::label('Name:') !!}
{!! Form::text('name', old('name'), ['class'=>'form-control']) !!}
<span class="text-danger">{{ $errors->first('name') }}</span>
</div>
 
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
{!! Form::label('Amount:') !!}
{!! Form::number('amount', old('email'), ['class'=>'form-control']) !!}
<span class="text-danger">{{ $errors->first('amount') }}</span>
</div>
 
<div class="form-group {{ $errors->has('subcategory') ? 'has-error' : '' }}">
{!! Form::label('Category:') !!}
{!! Form::text('category', old('category'), ['class'=>'form-control']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>

<div class="form-group {{ $errors->has('subcategory') ? 'has-error' : '' }}">
  {!! Form::label('Subcategory:') !!}
  {!! Form::text('subcategory', old('subcategory'), ['class'=>'form-control']) !!}
  <span class="text-danger">{{ $errors->first('subcategory') }}</span>

</div>
 
<div class="form-group">
<button class="btn btn-success">Update</button>
</div>
 
{!! Form::close() !!}
    
@endsection

