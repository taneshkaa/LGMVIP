<!Doctype html>  
<html lang="en">  
<head>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <title>Student Registration Form </title>  
  <style>  
    input[type=radio] { width:20px; }  
    input[type=checkbox]{ width:20px; }  
    * {  
    padding: 0;  
    margin: 0;  
    box-sizing: border-box;  
    }  
    body {  
    margin: 50px auto;  
    text-align: center;  
    width: 800px;
    background-color: black;  
    }  
    input[type=reset] {  
    border: 3px solid;    
    border-radius: 2px;    
    color: ;    
    display: block;    
    font-size: 1em;    
    font-weight: bold;    
    margin: 1em auto;    
    padding: 1em 4em;    
    position: relative;    
    text-transform: uppercase;    
    }    
    input[type=reset]::before   
    {    
    background: #fff;    
    content: '';    
    position: absolute;    
    z-index: -1;    
    }    
    input[type=reset]]:hover {    
    color: #1A33FF;    
    }    
    input {  
    border: 2px solid #ccc;  
    font-size: 1rem;  
    font-weight: 100;  
    font-family: 'Lato';  
    padding: 10px;  
    }  
    form {  
    margin: 20px auto;  
    padding: 20px;  
    border: 5px solid #ccc;  
    background: grey;  
    }  
    h1 {  
    font-family: sans-serif;  
    display: block;  
    font-size: 2rem;  
    font-weight: bold;  
    text-align: center;  
    letter-spacing: 3px;  
    color: white;  
    text-transform: uppercase;  
    }  
    input[type=submit] {    
    border: 3px solid;    
    border-radius: 2px;    
    color: ;    
    display: block;    
    font-size: 1em;    
    font-weight: bold;    
    margin: 1em auto;    
    padding: 1em 4em;    
    position: relative;    
    text-transform: uppercase;    
    }    
    input[type=submit]::before   
    {    
    background: #fff;    
    content: '';    
    position: absolute;    
    z-index: -1;    
    }    
    input[type=submit]:hover {    
    color: #1A33FF;    
    }    
</style>  
</head>  
<body>  
<h1> Student Registration Form </h1>  
<form method="post">  
<table>  
 <tr>  
    <td colspan="2"> <?php echo @$msg; ?> </td>  
 </tr>  
  <tr>  
    <td width="159"> <b> Enter your Name </b> </td>  
    <td width="218">  
    <input type="text" placeholder="Enter name" name = "n"  pattern="[a-z A-Z]*" required /> </td>  
  </tr>  
  <tr>  
    <td> <b> Enter your Email </b> </td>  
    <td> <input type="email" name="e"/ placeholder= "Enter Email" > </td>  
  </tr>  
  <tr>  
    <td> <b> Enter your Password </b> </td>  
    <td> <input type="password" name="p"/ placeholder=" Enter Password" > </td>  
  </tr> 
  <tr>  
    <td> <b> Enter your Address </b> </td>  
    <td><input type="text" name="add" placeholder="Enter Address" required ></td> 
  </tr> 
  <br> 
  <tr>  
    <td> <b> Enter your Mobile Number </b> </td>  
    <td> <input type="text" pattern="[0-9]*" name="m" / placeholder=" Enter number" > </td>  
  </tr>  
  <tr>  
    <td height="23"> <b> Select your Gender </b> </td>  
    <td>  
    Male <input type="radio" name="g" value="male"/>  
    Female <input type="radio" name="g" value="female"/>
    Others <input type="radio" name="g" value="other"/>  
    </td>  
  </tr> 
  <tr>  
    <td> <b> Choose your Hobbies (if any) </b> </td>  
    <td>  
        Cricket <input type="checkbox" value="cricket" name="hobb"/>  
        Leisure <input type="checkbox" value="leisure" name="hobb"/>  
        Painting <input type="checkbox" value="painting" name="hobb"/>  
    </td>  
  </tr>
  <tr>  
    <td> <b> Upload Profile Photo </b> </td>  
    <td> <input type="file" name="pic"/> </td>  
  </tr> 
  <tr>
    <td> <b> Educational Qualification </b> </td>
      <td>
        <select name="eq">
          <option value="qualification"> --select from the following-- </option>
          <option value="10th pass"> 10th pass </option>
          <option value="12th pass"> 12th pass </option>
          <option value="Graduated"> Graduated </option>
          <option value="Post Graduated"> PostGraduated </option>
        </select> 
      </td>
  </tr>
  <tr>  
    <td> <b> Upload Marksheet (latest) </b> </td>  
    <td> <input type="file" name="ms"/> </td>  
  </tr>
  <tr>  
    <td> <b> Select your Date of Birth </b> </td>  
    <td>  
        <select name="mm">  
            <option value=""> Month </option>  
            <?php   
            for($i=1;$i<=12;$i++)  
            {  
            echo "<option value ='$i'>".$i."</option>";  
            }  
            ?>  
        </select>  
        <select name="dd">  
            <option value=""> Date </option>  
            <?php   
            for($i=1;$i<=31;$i++)  
            {  
            echo "<option value ='$i'>".$i."</option>";  
            }  
            ?>  
        </select>  
        <select name="yy">  
            <option value=""> Year </option>  
            <?php   
            for($i=1900;$i<=2015;$i++)  
            {  
            echo "<option value ='$i'>".$i."</option>";  
            }  
            ?>  
        </select>  
    </td>  
  </tr>  
  <tr>  
    <td> <b> Skills </b> </td>  
    <td>  
        JavaScript <input type="checkbox" value="javascript" name="skill"/>  
        HTML-CSS <input type="checkbox" value="html-css" name="skill"/>  
        PHP <input type="checkbox" value="php" name="skill"/> 
        MySQL <input type="checkbox" value="mysql" name="skill"/> 
        MongoDB <input type="checkbox" value="mongodb" name="skill"/> 
        MS-Office <input type="checkbox" value="msoffice" name="skill"/> 
        Git & GitHub <input type="checkbox" value="git & github" name="skill"/>  
    </td>  
  </tr>
  <tr>
    <td> <b> Course Enrolment </b> </td>
      <td>
        <select name="course">
          <option value="course"> --select from the following-- </option>
          <option value="Foreign Languages"> Foreign Languages </option>
          <option value="Full Stack Development"> Full Stack Development </option>
          <option value="Blockchain Development"> Blockchain Development </option>
          <option value="Entreprenurial Development"> Entrepreneurial Development </option>
          <option value="Artificial Intelligence & Machine Learning"> Artificial Intelligence & Machine Learning </option>
          <option value="Critical Thinking"> Critical Thinking </option>
          <option value="Business Intelligence & Data Sciences"> Business Intelligence & Data Sciences </option>
        </select> 
      </td>
  </tr>  
  <tr>  
    <td colspan="2" align="center">  
    <input type ="submit" name="save" value="Register"/>  
    <input type="reset" value="Reset"/>  
    </td>  
  </tr>  
</table>  
</form> 
<hr>
<h2 style="color: white; size: 50px;" > Enrolled Students... </h2>
  <br>
  <b style="color: grey;"> Student Name: <?php echo "Riya" ?> </b> <br>
  <b style="color: grey;"> Email: <?php echo "riyaa@gmail.com" ?> </b> <br>
  <b style="color: grey;"> Mobile Number: <?php echo "9873452134" ?> </b> <br>
  <b style="color: grey;"> Address: <?php echo "Banglore, India" ?> </b> <br>
  <b style="color: grey;"> Gender: <?php echo "female" ?> </b> <br>
  <b style="color: grey;"> Skills: <?php echo "PHP" ?> </b> <br>
  <b style="color: grey;"> Course Enrolled: <?php echo "Full Stack Development" ?> </b> <br>
  <br>
  <hr>
  <hr>
  <br>
  <b style="color: grey;"> Student Name: <?php echo $_POST['n']; ?> </b> <br>
  <b style="color: grey;"> Email: <?php echo $_POST['e']; ?> </b> <br>
  <b style="color: grey;"> Mobile Number: <?php echo $_POST['m']; ?> </b> <br>
  <b style="color: grey;"> Address: <?php echo $_POST['add']; ?> </b> <br>
  <b style="color: grey;"> Gender: <?php echo $_POST['g']; ?> </b> <br>
  <b style="color: grey;"> Skills: <?php echo $_POST['skill']; ?> </b> <br>
  <b style="color: grey;"> Course Enrolled: <?php echo $_POST['course']; ?> </b> <br>
  <br>
  <hr>
</body>  
</html>  
<hr> 

