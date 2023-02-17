<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
  background-image: linear-gradient(to top, #c7549f, #e0acd0);
}

#user-form {
  background-color: white;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  width: 50%;
  max-width: 500px;
  margin: 100px auto;
  padding: 40px;
}

    #user-form {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 20px;
}

label {
  font-weight: bold;
  margin-bottom: 10px;
}

input,
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid rgb(135, 42, 42);
}

button[type="submit"] {
  padding: 10px 20px;
  background-color: rgb(225, 131, 187);
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

</style>
<body>
   <form id="user-form" action="resume.php" method="post" >
 <div>
          <label for="user-picture">Picture:</label>
          <input type="file" id="user-picture" name="picture" accept="image/*">
        </div>
        <div>
          <label for="user-name">Name:</label>
          <input type="text" id="user-name" name="name" placeholder="enter your full name" required>
        </div>
        <div>
          <label for="user-age">Age:</label>
          <input type="number" id="user-age" name="age"  placeholder="enter your age" required>
        </div>
        <div>
          <label for="user-number">Number:</label>
          <input type="text" id="user-number" name="number" placeholder="enter your phone number" required>
        </div>
        <div>
          <label for="user-education">Education:</label>
          <input type="text" id="user-education" name="education" placeholder="enter your last education level"  required>
        </div>
        <div>
          <label for="user-experience">Experience:</label>
          <textarea id="user-experience" name="experience" placeholder="enter your experience" required></textarea>
        </div>
        <div>
          <label for="user-skills">Skills:</label>
           <textarea id="user-skills" name="skills" placeholder="enter your skills" required></textarea>
        </div>
        
        <button type="submit" name="submit" id="sub">Submit</button>
      </form>
  
</body>

</html>