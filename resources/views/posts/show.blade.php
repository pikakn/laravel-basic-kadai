<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eloquent ORMを使ってデータを取得しよう</title>
</head>
<!--
    public function show($id) {
        $posted = Post::where('id', '=', '{id}')->get();
        return view('show', compact('posted'));
    }
      -->
<body>
    <style>
        table {
            writing-mode : vertical-lr;
        }
        th {
            writing-mode : horizontal-tb;
            width : 10%;
        }
        td {
            writing-mode : horizontal-tb;
            width: 40%;
        }
    </style>
    <table>

        <tr>
            <th>
                id
            </th>
            <th>
                title
            </th>
            <th>
                content
            </th>
            <th>
                created_at
            </th>
            <th>
                updated_at
            </th>
        </tr>
        <tr>
            <td>
                {{ $posted->id }}  
            </td>
            <td>
                {{ $posted->title }} 
            </td>
            <td>
                {{ $posted->content }}
            </td>
            <td>
                {{ $posted->created_at }} 
            </td>
            <td>
                {{ $posted->updated_at }} 
            </td>
        </tr>
    </table>
</body>
</html>