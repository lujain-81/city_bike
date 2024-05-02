
<div class="form-group {{ $errors->has('Name') ? 'has-feedback has-error has-danger' : '' }}">
    <label for="exampleInputName1">Name</label>
    {!! Form::text('Name',  isset($item) ? $item->Name : '',
                ['id' => 'Name',
                'placeholder' => 'Name',
                'class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''),
                'required' => true]
                );
    !!}
    @if($errors->has('Name'))
    <div class="invalid-feedback"> {{ $errors->first('Name') }}</div>
    @endif
</div>
<div class="form-group {{ $errors->has('Email') ? 'has-feedback has-error has-danger' : '' }}">
    <label for="exampleInputEmail3">Email address</label>
    {!! Form::email('Email',  isset($item) ? $item->Email : '',
                ['id' => 'Email',
                'placeholder' => 'Email',
                'class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''),
                'required' => true]
                );
    !!}
    @if($errors->has('Email'))
    <div class="invalid-feedback"> {{ $errors->first('Email') }}</div>
    @endif
</div>
<div class="form-group {{ $errors->has('Password') ? 'has-feedback has-error has-danger' : '' }}">
    <label for="exampleInputPassword4">Password</label>
    {!! Form::password('Password', ['id' => 'Password', 'placeholder' => 'Password', 'class' => 'form-control' . ($errors->has('Password') ? ' is-invalid' : ''), 'required' => !isset($item) ]  ); !!}
   
@if($errors->has('Password'))
    <div class="invalid-feedback"> {{ $errors->first('Password') }}</div>
@endif
</div>
<div class="form-group {{ $errors->has('Phone') ? 'has-feedback has-error has-danger' : '' }}">
    <label for="exampleInputPassword5">Phone</label>
    {!! Form::text('Phone',  isset($item) ? $item->Phone : '',
                ['id' => 'Phone',
                'placeholder' => 'Phone',
                'class' => 'form-control' . ($errors->has('Phone') ? ' is-invalid' : ''),
                'required' => true]
                );
    !!}
    @if($errors->has('Phone'))
    <div class="invalid-feedback"> {{ $errors->first('Phone') }}</div>
    @endif
</div>

<div class="form-group {{ $errors->has('NationalID') ? 'has-feedback has-error has-danger' : '' }}">
    <label for="exampleInputPassword5">National ID</label>
    {!! Form::text('NationalID',  isset($item) ? $item->NationalID : '',
                ['id' => 'NationalID',
                'placeholder' => 'National ID',
                'class' => 'form-control' . ($errors->has('NationalID') ? ' is-invalid' : ''),
                'required' => true]
                );
    !!}
    @if($errors->has('NationalID'))
    <div class="invalid-feedback"> {{ $errors->first('NationalID') }}</div>
    @endif
</div>
                   
<button type="submit" class="btn btn-primary mr-2">Submit</button>
<a href="{{route('panel.customers.index')}}" class="btn btn-light">Cancel</a>