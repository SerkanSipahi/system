<!DOCTYPE html>
<html lang="es-MX">
<head>
<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Sistema informatico Online">
    <link rel="icon" href="https://materializecss.com/images/favicon/favicon-32x32.png" sizes="32x32">
    <meta name="theme-color" content="black">
  <title>Inicio</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="css/style_home.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
</head>

<body>

<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Crear una nueva cuenta en el sistema</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Manual</a></li>
        <li><a href="#">Contactos</a></li>
        <li><a href="#">Sitio de la empresa</a></li>
      </ul>
    </div>
  </nav>


  <form action="php_action/create.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>First Name</th>
                <td><input type="text" name="fname" placeholder="First Name" /></td>
            </tr>     
            <tr>
                <th>Last Name</th>
                <td><input type="text" name="lname" placeholder="Last Name" /></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><input type="text" name="age" placeholder="Age" /></td>
            </tr>
            <tr>
                <th>Contact</th>
                <td><input type="text" name="contact" placeholder="Contact" /></td>
            </tr>
            <tr>
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
      




 <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Sistema online
            <a target="_black" class="grey-text text-lighten-4 right" href="https://gilbertoquinteroa.github.io/MyWork/">Desarrollador por</a>
            </div>
          </div>
        </footer>
            


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script>

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
</body>
</html>

