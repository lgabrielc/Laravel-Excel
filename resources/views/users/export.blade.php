<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Email</th>
            <th>Celular</th>
            <th>Fecha de Creacion</th>
            <th>Fecha de Edición</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->celular }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
