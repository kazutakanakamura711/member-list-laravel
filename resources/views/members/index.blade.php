<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>membership_management</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <head>
        <h1>MemberList</h1>
    </head>
    <div class="register">
        <a href="{{ url('/members/register') }}">register</a>
    </div>
    <div class="list">
        <table>
            <tr class="tableH">
                <th>
                    id
                </th>
                <th>
                    name
                </th>
                <th>
                    phone
                </th>
                <th>
                    email
                </th>
            </tr>
            @foreach ($members as $member)
            <tr class="tableB">
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->phone }}</td>
                    <td>{{ $member->email }}</td>
                    <td>
                        <div class="updateBtn">
                            <a href="{{ url('/members/update/') }}{{  $member->id }}">update</a>
                        </div>
                    </td>
                @endforeach
            </tr>
        </table>
    </div>
</body>

</html>
