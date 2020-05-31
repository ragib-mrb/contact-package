<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is our Contact Form</title>
</head>
<body>

<br />
<br />
<div style="margin: 0 auto; width: 900px;">
    <h1>Contact Us</h1>
    <form action="{{route('contact')}}" method="post">

        @csrf
        Name: <input type="text" name="name" value="" />
        <br /><br />
        Email: <input type="text" name="email" value="" />
        <br /><br />
        Message: <textarea name="message"></textarea>
        <br /><br />
        <br /><br />
        <input type="submit" name="" value="Submit" />
    </form>
</div>

</body>
</html>
