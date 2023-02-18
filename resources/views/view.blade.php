
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
   <div class="container">
    <h1 class="text-center text-danger">Users Lists</h1>
    {{-- <form action=""> --}}
    <div class="table-responsive">
        <table class="table table-primary table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    {{-- <th>Status</th> --}}
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>      
                    @foreach ($users as $user)

                <tr class="">
                    <td scope="row">{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['phone']}}</td>
                    <td>{{$user['address']}}</td>
                    <td>
                        @if ($user['gender']=='m')
                            Male
                        @elseif ($user['gender']=='f')
                            Female
                        @else 
                            Other
                        @endif
                            
                    </td>
                    <td>{{$user['DOB']}}</td>
                    <td>
                        {{-- Through Url method--}}
                        <a href="{{url('/view/delete/')}}/{{$user['id']}}"><button class="btn btn-danger">Delete</button></a>
                    </td>
                    <td>
                        {{--Through Route method--}}
                        <a href="{{route('users_edit',['id'=> $user['id']])}}"><button class="btn btn-primary">Edit</button></a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    {{-- </form> --}}
    </div>
    
   </div>
</body>

</html>