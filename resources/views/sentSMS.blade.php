<form action="" method="post">
    @csrf
    <input type="number" name="number" placeholder="Enter Mobile Number">
    <br><br>
    <textarea name="message" id="" cols="30" rows="10" placeholder="Enter SMS ..."></textarea>
    <br><br>
    <input type="submit" value="Send SMS">
</form>