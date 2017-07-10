<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div style="padding: 20px; border: 1px solid black;">
            <h2>User edit via Laravel Collective</h2>

            {!! Form::model($user, ['action' => 'HomeController@user']) !!}

            {!! Form::label('email', 'E-mail Address') !!}
            {!! Form::email('email') !!}

            {!! Form::label('active', 'Is Active?') !!}
            {!! Form::checkbox('active', 'Yes') !!}

            {!! Form::label('updatedAt', 'Updated At') !!}
            {!! Form::date('updatedAt') !!}

            {!! Form::label('created_at', '<strong>Created At</strong>', ['class' => 'btn btn-success', 'id' => 'created_at_id'], false) !!}
            {!! Form::datetime('created_at', null, ['class' => 'btn']) !!}

            {!! Form::tekmi() !!}
            {!! Form::bsTekmi('first_name') !!}
            {!! Form::bsTekmi('last_name', 'tekmi', ['class' => 'form-control tekmi-text']) !!}

            {!! Form::submit('Edit') !!}

            {!! Form::close() !!}
        </div>

        <div style="padding: 20px; margin-top: 10px; border: 1px solid darkgreen;">
            <h2>User edit via Laravel</h2>
            <form action="{{ action('HomeController@user') }}" method="post" accept-charset="utf-8">
                {{ csrf_field() }}

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', request('email') ?? $user->email ?? null) }}" />

                <label for="active">Is Active?</label>
                <input type="checkbox" id="active" name="active" value="Yes" @if(old('active', request('active') ?? $user->active ?? null)) checked @endif />

                <label for="updatedAt">Updated At</label>
                <input name="updatedAt" type="date" value="{{ old('updatedAt', request('updatedAt') ?? $user->updated_at ?? null) }}" id="updatedAt">

                <label for="created_at" class="btn btn-success" id="created_at_id"><strong>Created At</strong></label>
                <input class="btn" name="created_at" type="datetime" value="{{ old('createdAt', request('createdAt') ?? $user->created_at ?? null) }}" id="created_at">

                <input type="submit" value="Edit" />
            </form>
        </div>
    </body>
</html>
