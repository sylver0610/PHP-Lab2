<html>
    <head>
        <title>!DOCTYPE</title>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
            @foreach ($cus as $row)
            <h1>{{$row->name .' '.$row->surname }}</h1>            
            <h2>{{$row->email}}</h1>
            <h2>{{$row->phone}}</h2>
            <h3>{{$row->block ? 'Заблокирован': 'Доступен' }}</h3>
            @endforeach
        </div>
        <div>
            <h1>Address:</h1>
            @foreach($detail as $row)
            <h2>{{$row->city . ', ' . $row->street . ', ' . $row->house}}</h2>
            <h3>{{'Floor: '.$row->floor . ', Flat: '. $row->flat}}</h3>
            <h4>{{'Date: ' .$row->created_at}}</h4>
            @endforeach
        </div>
    </body>
</html>

