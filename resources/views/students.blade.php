<div>
    <h1>Student Lists</h1>
    <table border="1px">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Age</td>
            <td>Address</td>
            <td>Email</td>
            <td>Class</td>
            <td>Rollno</td>
        </tr>
        @foreach ($data as $student )
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->class}}</td>
            <td>{{$student->rollNumber}}</td>
        </tr>
        @endforeach
        
    </table>
</div>
