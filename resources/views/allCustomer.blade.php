<html>
    <head>
        <title>View all customers</title>
        <meta charset ="utf-8">
    </head>
    <body>
         <form action="" method="get">
            <input type="text" name="txtName" placeholder="enter name">
            <input type="text" name="txtPhone" placeholder="enter phone">
            <input type="text" name="txtEmail" placeholder="enter email">
            
            <input type="radio" id="block" name="status" value="true">
            <label for="block">Заблокирован</label>
            <input type="radio" id="noneblock" name="status" value="false">
            <label for="noneblock">Доступен</label>
            <br >
            <br>
            <button type="submit">Filter</button>
        </form>
        <table border="1">
            <thead>
                <tr>
                    <th witdh = 10%>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th witdh = 200px>Status</th>
                    <th witdh = 20%>View</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($view as $row)
                <tr>     
                    <td>{{$row->id}}</td>       
                    <td>{{$row->name}}</td>
                    <td>{{$row->surname}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->phone}}</td>
                    <td>{{$row->block ? 'Заблокирован': 'Доступен' }}</td>
                    <td><a href="/customer/{{$row->id}}">Detail</a></td>
                </tr>                
                @endforeach
            </tbody>
        </table>
    </body>
</html>