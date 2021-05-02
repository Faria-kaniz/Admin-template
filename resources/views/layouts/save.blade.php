@include('includes.header')

@if(Session::has('add.student'))
    <span>{{Session::get('add.student')}}</span>
@endif

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Section</th>
        <th>Class</th>
    </tr>
    @foreach($list as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->description }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->check }}</td>

        </tr>

    @endforeach

</table>
