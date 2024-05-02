
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
<div class="form-group {{ $errors->has('Address') ? 'has-feedback has-error has-danger' : '' }}">
    <label for="exampleInputPassword5">Address</label>
    {!! Form::text('Address',  isset($item) ? $item->Address : '',
                ['id' => 'Address',
                'placeholder' => 'Address',
                'class' => 'form-control' . ($errors->has('Address') ? ' is-invalid' : ''),
                'required' => true]
                );
    !!}
    @if($errors->has('Address'))
    <div class="invalid-feedback"> {{ $errors->first('Address') }}</div>
    @endif
</div>
<div class="form-group {{ $errors->has('Logo') ? 'has-feedback has-error has-danger' : '' }}">
    <label for="exampleInputPassword5">Logo</label>
    <input type="file" name="Logo" class="form-control" >
    @if(isset($item) && $item->Logo)
    <img src="{{url($item->Logo)}}" style="width: 150px; height: 150px;" alt="">
    @endif
    @if($errors->has('Logo'))
    <div class="invalid-feedback"> {{ $errors->first('Logo') }}</div>
    @endif
</div>
                   
<button type="submit" class="btn btn-primary mr-2">Submit</button>
