<tr>

    <td>{{ $id }}</td>
    <td>{{ $name.' '.$surname }}</td>
    <td>{{ $email }}</td>
    <td>
        <form action="{{ route('auth.delete', $id) }}" method="POST">
            @method('DELETE')
            @csrf
            <input type="submit" value="Eliminar usuario"/>
        </form>
    </td>
    <td class="{{ $admin === "1" ? 'is' : 'isNot'}}">
        <form action="{{ route('auth.changeAdmin', $id) }}" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="user_id" value="{{ $id }}">

            @if ($admin === "1")
                <input type="hidden" name="change" value="remove">
                <input type="submit" value="Remover administrador"/>
            @else
                <input type="hidden" name="change" value="assign">
                <input type="submit" value="Asignar administrador"/>
            @endif
        </form>
    </td>
    
    <td class="{{ $seller === "1" ? 'is' : 'isNot'}}">
        <form action="{{ route('auth.changeSeller', $id) }}" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="user_id" value="{{ $id }}">

            @if ($seller === "1")
                <input type="hidden" name="change" value="remove">
                <input type="submit" value="Remover vendedor"/>
            @else
                <input type="hidden" name="change" value="assign">
                <input type="submit" value="Asignar vendedor"/>
            @endif
        </form>    
    </td>
    
</tr>