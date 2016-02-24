<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h1>Invite Up to 5 People</h1>

    <form method="POST">
        {!! csrf_field() !!}

        <div class="form-group">
            <label class="control-label" for="email-0">Email:</label>
            <input type="text" id="email-0" name="email[]" class="form-control" value="{{ old('email.0' ) }}">
            @if ($errors->has('email.0'))
                <span class="help-block">{{ $errors->first('email.0') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label class="control-label" for="email-1">Email:</label>
            <input type="text" id="email-1" name="email[]" class="form-control" value="{{ old('email.1' ) }}">
            @if ($errors->has('email.1'))
                <span class="help-block">{{ $errors->first('email.1') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label class="control-label" for="email-2">Email:</label>
            <input type="text" id="email-2" name="email[]" class="form-control" value="{{ old('email.2' ) }}">
            @if ($errors->has('email.2'))
                <span class="help-block">{{ $errors->first('email.2') }}</span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
