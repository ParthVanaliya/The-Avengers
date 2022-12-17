
<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}
body{
  background-image: linear-gradient(to right,blue,white);
}
.headerr{
	margin: 0px;
	width: 100%;
	height: 15%;
	box-shadow: 0px 0px 20px black;
	background-color: #5d96f0;
	display: inline-block;
	justify-content: center;
	flex-direction: column;
	
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #5d96f0;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

 
  
<div class="headerr">
  <h1 class="heading" name="head_1">Edit employee details</h1>
 </div>
 
<div class="container">
  <form action="" method="post">
  <div class="row">
    <div class="col-25">
      <label for="fname">Full Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="fullname" placeholder="Your name.."/>
    </div>
  </div>
  
   <div class="row">
    <div class="col-25">
      <label for="fname">Designation</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="Designation" placeholder="Your name.."/>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="fname">Deprtment ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="Deprtment_ID" placeholder="Your Deprtment ID.."/>
    </div>
  </div>
  
  

  <div class="row">
    <div class="col-25">
      <label for="fname">Phone Number</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="Phone_Number" placeholder="Your Phone Number.." maxlength="10" pattern="[0-9]{10}"/>
    </div>
  </div>
 
  <div class="row">
    <div class="col-25">
      <label for="img">Select image:</label>
    </div>

    <div class="col-75">
  <input type="file" id="img" name="photo" accept="image/*"/>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="img">Select wing's image:</label>
    </div>

    <div class="col-75">
  <input type="file" id="img" name="wing" accept="image/*"/>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="img">Select floor's image:</label>
    </div>

    <div class="col-75">
  <input type="file" id="img" name="floor" accept="image/*"/>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="img">Select room no's image:</label>
    </div>

    <div class="col-75">
  <input type="file" id="img" name="room" accept="image/*" name="image"/>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="audio">Select Audio:</label>
    </div>

    <div class="row">
      <input type="file" accept="audio/*" name="audio"/>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="fname">Add Description:</label>
      </div>
      <div class="col-75">
        <textarea name="l_desc" rows="4" cols="40">
          </textarea>
      </div>
    </div>

  <br>
  <div class="row">
    <input type="submit" value="Submit" name="submit" />
  </div>
  </form>
</div>

</body>
</html>