<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <title>update</title>
</head>

<body>
    <h1>Member update</h1>
    <h2>id number:{{ $data->id }}</h2>
    <form action="update_member" method="post">
        @csrf
        <div class="wrapper">
            <div class="name">
                <input type="text" name="id" id="id" hidden value="{{ $data->id }}">
            </div>
            <div class="name">
                <label for="name">name</label>
                <input type="text" name="name" id="name" value="{{ $data->name }}">
            </div>
            <div class="phone">
                <label for="phone">phone</label>
                <input type="text" name="phone" id="phone" value="{{ $data->phone }}">
            </div>
            <div class="email">
                <label for="email">email</label>
                <input type="text" name="email" id="email" value="{{ $data->email }}">
            </div>
        </div>
        <div class="submit">
            <button type="submit" onclick="send()">update</button>
        </div>
    </form>
    <div class="delete">
        <button onclick="delete_member({{ $data->id }})">delete</button>
    </div>
    <script>
        function delete_member(id) {
            let user_id = id;
            if (confirm('削除してもよろしいですか？')) {
                location.href = '/members/delete_member' + user_id;
            }
        }
    </script>
</body>

</html>
