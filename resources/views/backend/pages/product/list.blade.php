@foreach($products as $key=>$row )
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$row->id}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->stock_status}}</td>
        <td>{{$row->regular_price}}</td>
        <td>{{$row->sale_price}}</td>
    </tr> <br><br>
@endforeach
