<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}
/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}
/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}
/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
      
   <body>
      <center>
         <h1>Edit and Delete in Database</h1>
         <button class="open-button" onclick="openForm()">Open Form</button>
<div class="form-popup" id="myForm">
         <form action="edit2.php" method="post">
             
 
             
<p>
               <label for="ID1">Update a driver with this ID:</label>
               <input type="text" name="ID1" id="ID1">
            </p>
 <p>
               <label for="newname2">What do you wish to change this driver's name to?:</label>
               <input type="text" name="newname2" id="newname2">
            </p>
             
 
             
<p>
               <label for="team2">What team does this driver drive for?:</label>
               <input type="text" name="team2" id="team2">
            </p>
 <p>
               <label for="lastrace2">What was the last race this driver won?: </label>
               <input type="text" name="lastrace2" id="lastrace2">
            </p>
             
<input type="submit" value="Submit">
                           
         </form>
             </div>
         
      </center>
      <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
   </body>
</html>
