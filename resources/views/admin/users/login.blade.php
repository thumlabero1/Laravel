<!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
    <style>
      .form {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 50px;
      }
      input[type="text"],
      input[type="password"] {
        width: 300px;
        height: 50px;
        margin-bottom: 20px;
        padding-left: 10px;
        font-size: 18px;
      }
      input[type="submit"] {
        width: 320px;
        height: 50px;
        background-color: blue;
        color: white;
        font-size: 20px;
        border: none;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="form">
      <h2>Login Form</h2>
      <form action="">
        <input type="text" placeholder="Username" required />
        <input type="password" placeholder="Password" required />
        <input type="submit" value="Submit" />
      </form>
    </div>
  </body>
</html>
