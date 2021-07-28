<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3>Hello </h3>
   <hr />
   <form action="{{url('/create/demo')}}" method="post">
   @csrf
       <input type="text"  placeholder="enter name" name="name" value="">
       <input type="tel" placeholder="enter mobile" name="mobile" value="">
       <input type="email" placeholder="enter email" name="email" value="">
       <input type="submit" name="submit" value="submit">
   </form>

    @foreach($response as $key=>$item)
    <div>{{$key+1}}</div>
    <div>{{$item->name}}</div>
    <div>{{$item->mobile}}</div>
    <div>{{$item->email}}</div>
    <div><a href="{{url('/delete/demo',$item->id)}}">delete</a></div>
    <div><a href="{{url('/delete/demo',$item->id)}}">edit</a></div>
    @endforeach
</body>
</html>