<?php
$title = 'Index';
require_once 'includes/header.php';
?>

    
<h1 class="text-center">Registration for IT Conference </h1>
<label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  
</form> 
<form action="/action_page.php">
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday">

<div class= "form-group">
  <label for="exampleInputSpeacialty1">Specialty:</label>
  <input type="Speacialty" class="form-control" id="exampleCheck1">
</div>
<!----options---->
<div class= "form-group form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1">
  <label class="for-check-label" for="exampleCheck1">Database Admin</label>
</div>
<div class= "form-group form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1">
  <label class="for-check-label" for="exampleCheck1">Software Developer</label>
</div>
<div class= "form-group form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1">
  <label class="for-check-label" for="exampleCheck1">Web Administrator</label>
</div>
 
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  </form>
<form action="/action_page.php">
  <label for="phone">Enter a phone number:</label><br><br>
  <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
  
</form>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

 

