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

<style>
  #left{
    position: absolute;
    left: 9%;
  }
</style>
<body>
 <div class="container">
    <h1 class="text-center text-primary">Register now</h1>
    <form action="{{$url}}" class="row" method="POST">
      @csrf
        <div class="mb-3 col-lg-6">
          <label for="" class="form-label">Name <span class="text-danger">*</span></label>
          <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('name')}}"> 
          <span class="text-danger">@error('name') {{$message}}@enderror</span>
        </div>

        <div class="mb-3 col-lg-6">
            <label for="" class="form-label">Email <span class="text-danger">*</span></label>
            <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('email')}}">
            <span class="text-danger">@error('email'){{$message}}@enderror </span>
        </div>

        <div class="mb-3 col-lg-6">
            <label for="" class="form-label">Phone <span class="text-danger">*</span></label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('phone')}}">
            <span class="text-danger">@error('phone'){{$message}}@enderror</span>
        </div>

        <div class="mb-3 col-lg-6">
            <label for="" class="form-label">Password <span class="text-danger">*</span></label>
            <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
            <span class="text-danger">@error('password'){{$message}}@enderror</span>
        </div>

        <div class="mb-3 col-lg-6">
          <label for="" class="form-label">Confirm Password <span class="text-danger">*</span></label>
          <input type="password" name="password_confirmation" id="cpassword" class="form-control" placeholder="" aria-describedby="helpId">
          <span class="text-danger">@error('password_confirmation'){{$message}}@enderror</span>
       </div>
       
       <div class="mb-3 col-lg-6">
         <label for="" class="form-label">Address</label>
         <textarea class="form-control" name="address" id="address" rows="2">{{old('address')}}</textarea>
       </div>

       <div class="gender col-lg-6 d-flex">Gender
              <span class="text-danger mx-1">*</span>
            <div class="form-check">
              <input class="form-check-input mx-3" type="radio" name="gender" id="male" value="m">
              <label class="form-check-label" for="male">
                Male
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input mx-3" type="radio" name="gender" id="female" value="f">
              <label class="form-check-label" for="female">
                Female
              </label>
            </div>
            <div class="form-check">
                <input class="form-check-input mx-3" type="radio" name="gender" id="other" value="o">
                <label class="form-check-label" for="other">
                  Other
                </label>
            <span id="left" class="text-danger d-block">@error('gender'){{$message}}@enderror</span>
            </div>
       </div>

        <div class="mb-3 col-lg-6">
            <label for="" class="form-label">Date of Birth</label>
            <input type="date" name="DOB" id="DOB" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('DOB')}}">
        </div>

        <button class="btn btn-primary col-lg-2">Register</button>
    </form>
 </div>
</body>

</html>