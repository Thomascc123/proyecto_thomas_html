<?php require_once('head.php'); ?>

<div Class="text_center p_30">

   <div Class="border_top"></div>

    <h1 class="text_roman text_mayus titulo">Bienvenido</h1>
    <p>Master of Puppets es el tercer álbum de estudio de la banda de thrash metal estadounidense Metallica. Fue lanzado al mercado el 3 de marzo de 1986, bajo el sello de Elektra Records, alcanzando el puesto 292​ en el Billboard 200. El álbum fue el primer disco de oro de la banda tras vender 500 000 copias en Estados Unidos, aunque luego superaría las 6 millones.</p>
    <button class="text_mayus text_roman p_1020 m_30"><a Class="text_white" href="#">Leer más</a></button>

</div>

<div Class="content"> <!-- Contenedor de imagen -->

    <div Class="fila"> <!-- Primera fila -->

        <div Class="columna"> 

            <div class="filtro"> </div>
            <img src="/Proyecto/proyecto_thomas_html/Imagenes/edificioavion.jpeg">

            <div Class="medio">
                <div Class="border_top"></div>
                <h1 Class="text_roman text_mayus titulo text_center">Viaja Seguro</h1>
                <div Class="border_top"></div>
            </div>

        </div>

        <div Class="columna">

            <div class="filtro"> </div>
            <img src="/Proyecto/proyecto_thomas_html/Imagenes/mayami.jpeg">
        
            <div Class="medio">
                <div Class="border_top"></div>
                <h1 Class="text_roman text_mayus titulo text_center">Viaja Seguro</h1>
                <div Class="border_top"></div>
            </div>

        </div>

    </div>

    <div Class="fila"> <!-- Segunda fila -->

        <div Class="columna"> 

            <div class="filtro"> </div>
            <img src="/Proyecto/proyecto_thomas_html/Imagenes/casasblancas.jpeg">

            <div Class="medio">
                <div Class="border_top"></div>
                <h1 Class="text_roman text_mayus titulo text_center">Viaja Seguro</h1>
                <div Class="border_top"></div>
            </div>

        </div>

        <div Class="columna"> 

            <div class="filtro"> </div>
            <img src="/Proyecto/proyecto_thomas_html/Imagenes/velas.jpeg">

            <div Class="medio">
                <div Class="border_top"></div>
                <h1 Class="text_roman text_mayus titulo text_center">Viaja Seguro</h1>
                <div Class="border_top"></div>
            </div>

        </div>

    </div>

</div>

<div class="p_30 text_center">

    <div Class="border_top"></div>

    <form action="inicio.php">

        <h1 class="text_roman text_mayus titulo text_center">Reservación</h1>

        <label for="nombre">Nombre</label><br>
        <input id="nombre" type="text"><br><br>

        <label for="fecha">Fecha</label><br>
        <input Class="text_white" id="fecha" type="date"><br><br>

        <label for="mensaje">Mensaje</label><br>
        <textarea di="mensaje" cols="100" rows="8"></textarea><br>
     

        <div class="p_30">

            <button class="text_roman text_mayus p_1020" type="submit">Enviar</button>
            <button class="text_roman text_mayus p_1020" type="reset">Borrar</button>

        </div>

    </form>

</div>

<?php require_once('foot.php'); ?>