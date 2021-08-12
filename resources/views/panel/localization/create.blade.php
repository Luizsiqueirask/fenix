<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Google Autocomplete Address Example</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    </head>

    <body>
        <div class="container mt-5">
            <h2>Google Autocomplete Address in Laravel 8</h2>

            <div class="form-group">
                <label>Location/City/Address</label>
                <input type="text" name="autocomplete" id="autocomplete" class="form-control" placeholder="Choose Location">
            </div>

            <div class="form-group" id="latitudeArea">
                <label>Latitude</label>
                <input type="text" id="latitude" name="latitude" class="form-control">
            </div>

            <div class="form-group" id="longtitudeArea">
                <label>Longitude</label>
                <input type="text" name="longitude" id="longitude" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </body>
</html>
