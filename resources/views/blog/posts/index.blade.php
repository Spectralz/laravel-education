<table>
    @foreach( $items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->slug }}</td>
        </tr>
    @endforeach
</table>
