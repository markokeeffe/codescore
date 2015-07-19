{!! Form::open(array('route' => 'signup_store', 'class' => 'form', 'id' => 'signup-form')) !!}

<div class="error-container alert alert-danger hidden">

</div>

<div class="input-group">
    {!! Form::text('email', null, array('required',
      'class'=>'form-control input-lg email-input',
      'placeholder'=>'Your e-mail address')
    ) !!}
    <span class="input-group-btn">
        {!! Form::submit('Submit', array('class'=>'btn btn-lg btn-primary')) !!}
    </span>
</div>
{!! Form::close() !!}
