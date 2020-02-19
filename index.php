<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


   
    <form action="handling.php" method="post" id="nameform">
      <div class="Name">
      <label for="fname">Fullname:</label>
      <input type="text" id="fname" name="fname" placeholder="Firstname"> 
      <input type="text" id="lname" name="lname" placeholder="Lastname"> 
      <input type="text" id="mname" name="mname" placeholder="Middelname">
    </div>
    <br>
    <div class="Address">
        <label for="address">Address:</label>
        <input type="text" id="address" name="Address">

    </div>
    <br>

    <div class="Birth">
      <label for="Birth">Place of Birth:</label>
      <input type="text" id="birth" name="Birth">
      <label for="birthda">Date of Birth:</label>
      <input type="date" id="birthday" name="birthday">
    </div>


    <br>

    <div class="Gender">
      <label for="name">Gender:</label>
      <input type="radio" id="male" name="gender" value="male">
      <label for="male">Male</label>
      <input type="radio" id="female" name="gender" value="female">
      <label for="female">Female</label>
    </div>

    <br>

    <div class="guardian">
      <label for="guardian">Guardian:</label>
      <input type="text" id="guardian" name="guardian">
    </div>

    <br>

    <div class="contact">
      <label for="contact">Contact Number:</label>
      <input type="text" id="contact" name="contact">
    </div>


    <br>

    <div class="status">
      <label for="status">Civil Status:</label>
      <input type="status" id="status" name="status">
    </div>


    <br>

    <div class="school">
      <label for="schyr">School Year:</label>
      <input type="text" id="schyr" name="schyr">
      <label for="schyr">Course:</label>
      <select id="course" name="course">
        <option value="BSIT">BSIT</option>
        <option value="BSDS">BSDS</option>
        <option value="BSTCM">BSTCM</option>
        <option value="BSCPE">BSCPE</option>
      </select>
      <label for="schyr">Year Level:</label>
      <select id="schyr" name="year">
        <option value="1st">First Year</option>
        <option value="2nd">Second Year</option>
        <option value="3rd">Third Year</option>
        <option value="4th">Fourth Year</option>
      </select>
    </div>

    <br>

    <div class="submit">
      <input type="submit" value="Submit" name="butn">
    </div>
    </form>

</body>
</html>