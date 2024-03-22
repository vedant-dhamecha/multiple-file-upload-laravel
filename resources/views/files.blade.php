<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file[]" multiple="multiple">
    <br>
    <br>
    <input type="submit">
</form>