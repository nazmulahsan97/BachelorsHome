<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


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
                <table>
                    
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>




                    @foreach($data as $data)

                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>


                        @if($data->usertype=="0")
                        <td><a href="{{url('/deleteuser', $data->id)}}">Delete</a></td>
                        @else
                        <td> </td>


                        @endif


                    </tr>


                    @endforeach




                </table>
            </div>



        </div>


        @include("admin.adminscript");




    </body>

    </html>

</body>

</html>