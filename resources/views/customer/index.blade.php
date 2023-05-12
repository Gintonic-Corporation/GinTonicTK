<a href="/customer/create">NEW</a>
<table>
    <tr>
        <th>ID</th>
        <th>Név</th>
        <th>Lakcím</th>
        <th>Elérhetőség</th>
        <th>Rang</th>
        <th>Options</th>
    </tr>

    @foreach($customers as $customer)
    <tr>
        <td>{{$customer->id}}</td>
        <td><a href="/customer/{{$customer->id}}">{{$customer->name}}</a></td>
        <td>{{$customer->address}}</td>
        <td>{{$customer->contact}}</td>
        <td>{{$customer->rank}}</td>
        <td> <a href="/customer/{{$customer->id}}/edit">Edit</a></td>
    </tr>
    @endforeach
</table>
