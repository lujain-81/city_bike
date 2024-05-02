
<div class="form-group {{ $errors->has('Location') ? 'has-feedback has-error has-danger' : '' }}">
    <label for="exampleInputName1">Location</label>
    {!! Form::text('Location',  isset($item) ? $item->Location : '',
                ['id' => 'Location',
                'placeholder' => 'Location',
                'class' => 'form-control' . ($errors->has('Location') ? ' is-invalid' : ''),
                'required' => true]
                );
    !!}
    @if($errors->has('Location'))
    <div class="invalid-feedback"> {{ $errors->first('Location') }}</div>
    @endif
</div>

<button type="submit" class="btn btn-primary mr-2">Submit</button>
<a href="{{route('panel.spots.index')}}" class="btn btn-light">Cancel</a>