<!DOCTYPE html>
<html>
  <head>
      <title>Login</title>
  </head>
  <body>
    {!! Form::open(array('url' => 'login', 'method' => 'post')) !!}
      {!! Form::label('email', 'E-Mail Address : ') !!}
      {!! Form::text('username') !!}
      {!! Form::submit('Submit') !!}
    {!! Form::close() !!}
  </body>
</html>
