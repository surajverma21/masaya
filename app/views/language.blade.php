<html>
<head>
    <meta charset="utf-8" />
    <title>Language Chooser</title>
</head>
<body>
        <form action="{{ URL::route('language-chooser') }}" method="post">
            <select name="locale">
                <option value="en">English</option>
                <option value="de"{{ Lang::locale() === 'de' ? 'selected' : '' }}>German</option>
            </select>
            <input type="submit" value="Choose Language">
            {{ Form::token() }}
        </form>
    <p>
        {{ trans('greet.hello') }}
    </p>
</body>

</html>
