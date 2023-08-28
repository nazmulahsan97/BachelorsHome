<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss");
</head>

<body>

    <div class="container-scroller">

        @include("admin.navbar");

        <div>
            <form action="{{url('/uploadhouse')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div>
                    <label>Title</label>
                    <input style="color:black;" type="text" name="title" placeholder="write a title" required>
                </div>

                <div>
                    <label>Price</label>
                    <input style="color:black;" type="num" name="price" placeholder="price" required>
                </div>

                <div>
                    <label>Image</label>
                    <input type="file" name="image" required>
                </div>

                <div>
                    <label>Description</label>
                    <input style="color:black;" type="text" name="description" placeholder="Description" required>
                </div>

                <div>

                    <input style="color: white" type="submit" value="Save">
                </div>




            </form>

            <table>
                <tr>
                    <th>HouseName</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>

                </tr>
                @foreach($data as $data)
                <tr align="center">

                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img src="/foodimage/{{$data->image}}"></td>

                    <td><a href="{{url('/deletemenu', $data->id)}}">Delete</a></td>

                </tr>

                @endforeach

            </table>

        </div>



    </div>

    @include("admin.adminscript");




</body>

</html>