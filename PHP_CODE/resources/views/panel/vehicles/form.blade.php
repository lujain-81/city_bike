
<div class="form-group {{ $errors->has('SpotID') ? 'has-feedback has-error has-danger' : '' }}">
    <label for="exampleInputName1">Spot Location</label>
    {!! Form::select('SpotID', $spots, isset($item) ? $item->SpotID : '',
                ['id' => 'SpotID',
                'placeholder' => 'Spot Location',
                'class' => 'form-control' . ($errors->has('SpotID') ? ' is-invalid' : ''),
                'required' => true]
                );
    !!}
    @if($errors->has('SpotID'))
    <div class="invalid-feedback"> {{ $errors->first('SpotID') }}</div>
    @endif
</div>

<div class="form-group {{ $errors->has('CodNumber') ? 'has-feedback has-error has-danger' : '' }}">
    <label for="exampleInputName1">Code Number</label>
    {!! Form::text('CodNumber',  isset($item) ? $item->CodNumber : '',
                ['id' => 'CodNumber',
                'placeholder' => 'CodNumber',
                'class' => 'form-control' . ($errors->has('CodNumber') ? ' is-invalid' : ''),
                'required' => true]
                );
    !!}
    @if($errors->has('CodNumber'))
    <div class="invalid-feedback"> {{ $errors->first('CodNumber') }}</div>
    @endif
</div>

<div class="form-group {{ $errors->has('Model') ? 'has-feedback has-error has-danger' : '' }}">
    <label for="exampleInputName1">Model</label>
    {!! Form::text('Model',  isset($item) ? $item->Model : '',
                ['id' => 'Model',
                'placeholder' => 'Model',
                'class' => 'form-control' . ($errors->has('Model') ? ' is-invalid' : ''),
                'required' => true]
                );
    !!}
    @if($errors->has('Model'))
    <div class="invalid-feedback"> {{ $errors->first('Model') }}</div>
    @endif
</div>


<div class="form-group {{ $errors->has('Type') ? 'has-feedback has-error has-danger' : '' }}">
    <label for="exampleInputName1">Type</label>
    {!! Form::text('Type',  isset($item) ? $item->Type : '',
                ['id' => 'Type',
                'placeholder' => 'Type',
                'class' => 'form-control' . ($errors->has('Type') ? ' is-invalid' : ''),
                'required' => true]
                );
    !!}
    @if($errors->has('Type'))
    <div class="invalid-feedback"> {{ $errors->first('Type') }}</div>
    @endif
</div>

<div class="form-group {{ $errors->has('Manufacturer') ? 'has-feedback has-error has-danger' : '' }}">
    <label for="exampleInputName1">Manufacturer</label>
    {!! Form::text('Manufacturer',  isset($item) ? $item->Manufacturer : '',
                ['id' => 'Manufacturer',
                'placeholder' => 'Manufacturer',
                'class' => 'form-control' . ($errors->has('Manufacturer') ? ' is-invalid' : ''),
                'required' => true]
                );
    !!}
    @if($errors->has('Manufacturer'))
    <div class="invalid-feedback"> {{ $errors->first('Manufacturer') }}</div>
    @endif
</div>

<div class="form-group {{ $errors->has('Price') ? 'has-feedback has-error has-danger' : '' }}">
    <label for="exampleInputName1">Price (SAR)</label>
    {!! Form::text('Price',  isset($item) ? $item->Price : '',
                ['id' => 'Price',
                'placeholder' => 'Price',
                'class' => 'form-control' . ($errors->has('Price') ? ' is-invalid' : ''),
                'required' => true]
                );
    !!}
    @if($errors->has('Price'))
    <div class="invalid-feedback"> {{ $errors->first('Price') }}</div>
    @endif
</div>

<div class="form-group {{ $errors->has('QRCode') ? 'has-feedback has-error has-danger' : '' }}">
    <label for="exampleInputName1">QR Code</label>
    {!! Form::text('QRCode',  isset($item) ? $item->Price : '',
                ['id' => 'QRCode',
                'placeholder' => 'QRCode',
                'class' => 'form-control' . ($errors->has('QRCode') ? ' is-invalid' : ''),
                'required' => true]
                );
    !!}
    @if($errors->has('QRCode'))
    <div class="invalid-feedback"> {{ $errors->first('QRCode') }}</div>
    @endif
</div>

<div class="form-group {{ $errors->has('Image') ? 'has-feedback has-error has-danger' : '' }}">
    <label for="exampleInputName1">Image</label>
   <input type="file" name="Image" class="form-control">
   @if(isset($item) && $item->Image)
    <img src="{{url($item->Image)}}" style="width: 150px; height: 150px;" alt="">
    @endif
    @if($errors->has('Image'))
    <div class="invalid-feedback"> {{ $errors->first('Image') }}</div>
    @endif
</div>

<button type="submit" class="btn btn-primary mr-2">Submit</button>
@if(auth('web')->check())
<a href="{{route('panel.vehicles.index')}}" class="btn btn-light">Cancel</a>
@else
<a href="{{route('employees.vehicles.index')}}" class="btn btn-light">Cancel</a>

@endif