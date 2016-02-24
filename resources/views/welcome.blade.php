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
            <label class="control-label" for="email-1">Email:</label>
            <input type="text" id="email-1" name="email[]" class="form-control" value="{{ old('email.1' ) }}">
        </div>

        <div class="form-group">
            <label class="control-label" for="email-2">Email:</label>
            <input type="text" id="email-2" name="email[]" class="form-control" value="{{ old('email.2' ) }}">
        </div>

        <div class="form-group">
            <label class="control-label" for="email-3">Email:</label>
            <input type="text" id="email-3" name="email[]" class="form-control" value="{{ old('email.3' ) }}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
