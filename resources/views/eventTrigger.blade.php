<form action="" method="POST">
    {{csrf_field()}}
    <input type="text" name="message">
    <input type="submit" value="Submit">
</form>