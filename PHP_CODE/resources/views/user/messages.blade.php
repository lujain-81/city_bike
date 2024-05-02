@if($errors->any())
    {!! implode('', $errors->all('<div style="    background: #eb7c7c;
color: #FFF;
padding: 10px;
text-align: center;
margin-bottom: 13px;
border-radius: 12px;">:message</div>')) !!}
@endif
