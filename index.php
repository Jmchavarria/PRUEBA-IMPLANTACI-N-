<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu desplegable</title>

    <link rel="stylesheet" href="css/estilos.css">
   

    <script src="https://kit.fontawesome.com/51aee0fcba.js" crossorigin="anonymous"></script>

    <script src="clientes.js"></script>
    <script src="usuarios.js"></script>
    <script src="validarMecanicos.js"></script>
    <script src="validarServicios.js"></script>


</head>

<body id="body">

    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    
            <!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
           -->
    </header>

    <div class="menu__side" id="menu_side">
        <div class="name__page"> <!-- nombre de la pagina -->
            <i><img src="img/logo.jpeg" alt=""></i>
            <h4>Motorbike</h4>
        </div>

        <div class="options__menu"><!--Opciones del menu-->
            <a href="#" onclick="navigateTo('Dashboard')" class="selected">
                <div class="option">
                    <i class="fa-solid fa-chart-simple" title="Dashboard"></i>
                    <h4>Dashboard</h4>
                </div>
            </a>

            <a href="#" onclick="navigateTo('Usuarios')">
                <div class="option">
                    <i class="fa-solid fa-users" title="Usuarios"></i>
                    <h4>Usuarios</h4>
                </div>
            </a>

            <a href="#" onclick="navigateTo('Roles')">
                <div class="option">
                    <i class="fa-solid fa-users-gear" title="Roles"></i>
                    <h4>Roles</h4>
                </div>
            </a>

            <a href="#" onclick="navigateTo('Clientes')">
                <div class="option">
                    <i class="fa-solid fa-handshake" title="Clientes"></i>
                    <h4>Clientes</h4>
                </div>
            </a>

            <a href="#" onclick="navigateTo('Repuestos')">
                <div class="option">
                    <i class="fa-solid fa-gears" title="Repuestos"></i>
                    <h4>Repuestos</h4>
                </div>
            </a>

            <a href="#" onclick="navigateTo('Servicios')">
                <div class="option">
                    <i class="fa-solid fa-swatchbook" title="Servicios"></i>
                    <h4>Servicios</h4>
                </div>
            </a>

            <a href="#" onclick="navigateTo('Mecanicos')">
                <div class="option">
                    <i class="fa-solid fa-screwdriver-wrench" title="Mecánicos"></i>
                    <h4>Mecánicos</h4>
                </div>
            </a>

            <a href="#" onclick="navigateTo('Compras')">
                <div class="option">
                    <i class="fa-solid fa-bag-shopping" title="Compras"></i>
                    <h4>Compras</h4>
                </div>
            </a>
            <a href="#" onclick="navigateTo('Ventas')">
                <div class="option">
                    <i class="fa-solid fa-cart-shopping" title="Ventas"></i>
                    <h4>Ventas</h4>
                </div>
            </a>
        </div>
    </div>

    <div class="content">
        <iframe id="content-frame" src="Dashboard.html"></iframe>
    </div>



    <!-- <main>
        <h1>Dashboar</h1><br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate dolores rem non ullam. Voluptates, molestiae. Non quos, impedit cupiditate obcaecati optio adipisci fugiat atque repellat porro eligendi nisi explicabo quibusdam!</p> <br>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam veniam animi autem quia eum? In at quo ad beatae error consectetur, quibusdam consequuntur dolorum doloremque eius qui suscipit, odit ipsum?</p>
    </main> -->

    <script src="js/script.js"></script>
</body>

</html>