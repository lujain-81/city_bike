@extends('panel.layouts.master')
@section('content')

<div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Reply a message</h4>
                  @php $route = auth('web')->check() ? 'panel' : 'employees'; @endphp
                
                  <form class="forms-sample" action="{{route($route.'.contact-us.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="ContactID" value="{{$item->ContactID}}">
                    <div class="form-group">
                      <label for="exampleInputName1">Subject</label>
                      <div>
                        {{ $item->Subject }}
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Message</label>
                      <div>{{$item->Message}}</div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Reply</label>
                      <textarea name="message" class="form-control" cols="30" rows="10" required></textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-primary mr-2">Reply</button>
                    <a href="{{route($route.'.contact-us.index')}}" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
            </div>
@endsection

@section('js')
<script>
  setTimeout(() => {
    $('.active').removeClass('active');
    $('#sidebar .nav-item').last().addClass('active');
    
  }, 200);
</script>
@endsection