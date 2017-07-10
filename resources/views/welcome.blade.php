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
        {{-- Default Form: Laravel Collective --}}
        {!! Form::open(['url' => '/']) !!}
        {!! Form::close() !!}

        {{-- Default Form: Laravel --}}
        <form method="post" action="{{ url('/') }}" accept-charset="utf-8">
            {{ csrf_field() }}
        </form>

        {{-- Sophisticated Form: Laravel Collective --}}
        {!! Form::open(['route' => 'home', 'method' => 'put', 'files' => 'yes']) !!}

        {!! Form::close() !!}

        {{-- Sophisticated Form: Laravel --}}
        <form method="post" action="{{ route('home') }}" accept-charset="utf-8" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
        </form>

        <h2>Html Builder conveniences</h2>

        {!! Html::script('app.js', ['type' => 'text/javascript'], true) !!}
        {!! Html::style('app.css', ['media' => 'screen'], true) !!}
        {!! Html::image('images/image.jpg', 'Image Alt', ['class' => 'image'], true) !!}
        {!! Html::favicon('favicon.ico', ['type' => 'image/x-icon'], true) !!}

        {!! Html::link('users/1/edit', '<i>Title</i>', ['class' => 'link'], true, false) !!}
        {!! Html::linkAsset('img/image.jpg', 'Image', ['class' => 'img'], true) !!}
        {!! Html::linkRoute('home', 'Home', ['param' => 'value'], ['class' => 'btn']) !!}
        {!! Html::linkAction('HomeController@index', 'Home', ['param' => 'value'], ['class' => 'btn']) !!}

        {!! Html::nbsp(5) !!}

        {!! Html::mailto('ala@ala.nl', '<i>Mail me</i>', ['class' => 'mail'], false) !!}

        {!! Html::ol(['a', 'b', 'c' => ['d', 'e']], ['class' => 'ol-list']) !!}
        {!! Html::ul(['a', 'b', 'c' => ['d', 'e']], ['class' => 'ul-list']) !!}
        {!! Html::dl(['a' => 'a character', 'b', 'c multiple' => ['d' => 'd is here', 'e' => 'e is there']], ['class' => 'dl-list']) !!}

        {!! Html::meta('viewport', 'width=device-width, initial-scale=1') !!}
        {!! Html::meta(null, null, ['charset' => 'utf-8']) !!}
        {!! Html::meta(null, 'IE=edge', ['http-equiv' => 'X-UA-Compatible']) !!}

        {!! Html::tag('input', '', ['type' => 'week', 'value' => '2017-W05']) !!}

        <hr>

        <h2>Form Builder conveniences</h2>

        {!! Form::textarea('description', 'Text', ['size' => '20x5', 'id' => 'description', 'name' => 'description', 'class' => 'text text-long']) !!}
        {!! Form::hidden('hidden', 'Hidden', ['id' => 'hidden', 'name' => 'hidden', 'class' => 'text text-hidden']) !!}
        {{ Form::token() }}
        {!! Form::password('password', ['id' => 'password', 'name' => 'password', 'class' => 'text text-center']) !!}
        {!! Form::search('search', 'Search', ['id' => 'search', 'name' => 'search', 'class' => 'text text-left']) !!}
        {!! Form::tel('tel', '031647555333', ['id' => 'tel', 'name' => 'tel', 'class' => 'text text-left']) !!}
        {!! Form::number('number', '0.05', ['min' => 0, 'step' => 0.01, 'id' => 'number', 'name' => 'number', 'class' => 'text text-left']) !!}
        {!! Form::datetimeLocal('localDateTime', '2017-10-10T21:10:10', ['id' => 'localDateTime', 'name' => 'localDateTime', 'class' => 'text text-left']) !!}
        {!! Form::time('time', '10:30:55', ['id' => 'time', 'name' => 'time', 'class' => 'text text-left']) !!}
        {!! Form::url('url', 'http://tekmi.nl', ['id' => 'url', 'name' => 'url', 'class' => 'text text-left']) !!}
        {!! Form::file('file', ['id' => 'file', 'name' => 'file', 'class' => 'file']) !!}
        {!! Form::select( 'size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...', 'id' => 'size', 'class' => 'select select-big'], ['L' => ['class' => 'option option-red']] ) !!}

        {!! Form::select('animal',['Cats' => ['leopard' => 'Leopard'], 'Dogs' => ['spaniel' => 'Spaniel']], 'spaniel', ['class' => 'select-with-optgroup']) !!}

        {!! Form::selectRange('range', 10, 30, 20, ['id' => 'range', 'class' => 'range range-20']) !!}

        {!! Form::selectMonth('month', 5, ['id' => 'month', 'class' => 'month month-1'], '%h') !!}
        {!! Form::selectYear('birthdayDay', 2020, 2000, 2001, ['id' => 'year']) !!}

        {!! Form::radio('radio', 'Switch On', null, ['id' => 'radio-1', 'name' => 'radio', 'class' => 'radio tune-in']) !!}
        {!! Form::radio('radio', 'Switch Off', true, ['id' => 'radio-2', 'name' => 'radio', 'class' => 'radio tune-in']) !!}

        {!! Form::reset('resetButton', ['name' => 'reset', 'class' => 'reset-now']) !!}
        {!! Form::image('images/image.jpg', 'Image Button', ['class' => 'reset-now']) !!}
        {!! Form::color('color', '#ff0000', ['id' => 'color', 'class' => 'text-color']) !!}
        {!! Form::button('button', ['id' => 'button', 'class' => 'btn btn-success']) !!}

        <hr>

        <h2>URL Generator</h2>

        <table cellpadding="5" border="1">
            <tr>
                <th>Laravel Collective</th>
                <th>Laravel</th>
            </tr>
            <tr>
                <th colspan="2">
                    <h4>link_to() vs url()</h4>
                </th>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>
                            {{ link_to('/') }}
                        </li>
                        <li>
                            {{ link_to('/', 'Title') }}
                        </li>
                        <li>
                            {{ link_to('/', 'Title', ['class' => 'btn']) }}
                        </li>
                        <li>
                            {{ link_to('/', 'Title', ['class' => 'btn'], true) }}
                        </li>
                        <li>
                            {{ link_to('/', '<strong>Title</strong>', ['class' => 'btn'], true, false) }}
                        </li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>
                            <a href="{{ url('/') }}">{{ url('/') }}</a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}">Title</a>
                        </li>
                        <li>
                            <a class="btn" href="{{ url('/') }}">Title</a>
                        </li>
                        <li>
                            <a class="btn" href="{{ url('/', [], true) }}">Title</a>
                        </li>
                        <li>
                            <a class="btn" href="{{ url('/', [], true) }}"><strong>Title</strong></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th colspan="2">
                    <h4>link_to_asset() vs asset()</h4>
                </th>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>
                            {{ link_to_asset('img/image.jpg') }}
                        </li>
                        <li>
                            {{ link_to_asset('img/image.jpg', 'Image') }}
                        </li>
                        <li>
                            {{ link_to_asset('img/image.jpg', 'Image', ['class' => 'img']) }}
                        </li>
                        <li>
                            {{ link_to_asset('img/image.jpg', 'Image', ['class' => 'img'], true) }}
                        </li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>
                            <a href="{{ asset('img/image.jpg') }}">{{ asset('img/image.jpg') }}</a>
                        </li>
                        <li>
                            <a href="{{ asset('img/image.jpg') }}">Image</a>
                        </li>
                        <li>
                            <a class="img" href="{{ asset('img/image.jpg') }}">Image</a>
                        </li>
                        <li>
                            <a class="img" href="{{ asset('img/image.jpg', true) }}">Image</a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th colspan="2">
                    <h4>link_to_route() vs route()</h4>
                </th>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>
                            {{ link_to_route('home') }}
                        </li>
                        <li>
                            {{ link_to_route('home', 'Home') }}
                        </li>
                        <li>
                            {{ link_to_route('home', 'Home', ['param' => 'value']) }}
                        </li>
                        <li>
                            {{ link_to_route('home', 'Home', ['param' => 'value'], ['class' => 'btn']) }}
                        </li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">{{ route('home') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('home', ['param' => 'value']) }}">Home</a>
                        </li>
                        <li>
                            <a class="btn" href="{{ route('home', ['param' => 'value']) }}">Home</a>
                        </li>

                        <li>
                            <a class="btn" href="{{ route('home', ['param' => 'value'], false) }}">Home</a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th colspan="2">
                    <h4>link_to_action() vs action()</h4>
                </th>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>
                            {{ link_to_action('HomeController@index') }}
                        </li>
                        <li>
                            {{ link_to_action('HomeController@index', 'Home') }}
                        </li>
                        <li>
                            {{ link_to_action('HomeController@index', 'Home', ['param' => 'value']) }}
                        </li>
                        <li>
                            {{ link_to_action('HomeController@index', 'Home', ['param' => 'value'], ['class' => 'btn']) }}
                        </li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>
                            <a href="{{ action('HomeController@index') }}">{{ action('HomeController@index') }}</a>
                        </li>
                        <li>
                            <a href="{{ action('HomeController@index') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ action('HomeController@index', ['param' => 'value']) }}">Home</a>
                        </li>
                        <li>
                            <a class="btn" href="{{ action('HomeController@index', ['param' => 'value']) }}">Home</a>
                        </li>

                        <li>
                            <a class="btn" href="{{ action('HomeController@index', ['param' => 'value'], false) }}">Home</a>
                        </li>
                    </ul>
                </td>
            </tr>
        </table>
    </body>
</html>
