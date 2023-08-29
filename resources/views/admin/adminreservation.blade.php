<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss");
</head>

<body>
    <!-- <div class="container-scroller"> -->

    @include("admin.navbar");
    <!-- </div> -->

    @include("admin.adminscript");


<div>
    <table> 
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        @foreach($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
        </tr>
        @endforeach

    </table>
</div>

</body>

</html>