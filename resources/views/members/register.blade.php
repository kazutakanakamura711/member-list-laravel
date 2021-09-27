<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <h1>Member registration</h1>
    <form action="add_register" method="post">
        @csrf
        <div class="wrapper">
            <div class="name">
                <div>
                    @if (!empty($errors->first('name')))
                        <p class="error">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                <label for="name" class="one">name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="phone">
                <div>
                    @if (!empty($errors->first('phone')))
                        <p class="error">{{ $errors->first('phone') }}</p>
                    @endif
                </div>
                <label for="phone">phone</label>
                <input type="text" name="phone" id="phone">
            </div>
            <div class="email">
                <div>
                    @if (!empty($errors->first('email')))
                        <p class="error">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <label for="email">email</label>
                <input type="text" name="email" id="email">
            </div>
        </div>
        <div class="submit">
            <button type="submit" onclick="send()">send</button>
        </div>
    </form>
</body>

</html>
<script>
    function send() {
        if (confirm('登録しますか？')) {}
    }
</script>
