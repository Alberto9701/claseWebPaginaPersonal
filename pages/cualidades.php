<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/cualidades.css">
    <link rel="stylesheet" href="../styles/principalStyles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed:wght@100&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <h1>Mi Yo del 2028</h1>
    </header>


    <nav class="barraDeNav">
        <a href="../index.html">Inicio</a>
        <a href="../pages/escuelas.html">Mi vida académica</a>
        <a href="../pages/UnidadApren.php">Mi recorrido por ESCOM</a>
        <a href="../pages/cualidades.php">Mis cualidades y habilidades</a>
    </nav>

    <div class="contenedor">
        <?php
            class Cualidad{
                Public $cualidad;
                Public $calif;

                public function __construct($cualidad,$calif){
                    $this->cualidad = $cualidad;
                    $this->calif = $calif;
                }
            }


            //obtenemos un arreglo de objetos de la clase cualidad que provienen del archivo cualidad.txt
            $archivo = fopen("../datosUsuario/cualidades.txt","r");
            $cualidades = array();
            while(!feof($archivo)){
                $linea = fgets($archivo);
                $datos = explode("," ,$linea);


                $cualidad = new Cualidad($datos[0],$datos[1]);
                array_push($cualidades,$cualidad);
            }
            fclose($archivo);


            //creamos la tabla con las cualidades
            echo "<table class='tabla'>";
                echo "<thead class='cabezeraTabla'>";
                    echo "<td align='cen'>Cualidad</td>";
                    echo "<td>Calificación</td>";
                echo "</thead>";

                echo "<tbody class='cuerpoTabla'>";
                    foreach ($cualidades as $cualidad) {
                        echo "<tr>";
                        echo "<td align='center'>".$cualidad->cualidad."</td>";

                        $i = 0;
                        echo "<td align='center'>";
                        while($i < $cualidad->calif){
                            echo "<img class='estrella' src='../images/estrella2.png' alt='estrella'>";
                            $i++;
                        }
                        echo "</td>";

                        //echo "<td>".$cualidad->calif."</td>";
                        echo "</tr>";
                    }
                echo "</tbody>";
            echo "</table>";



        ?>
    </div>




    <footer class="footer">
        <div>
            <p>Alumno: Mejía Martínez José Alberto</p>
            <p>Materia: Tecnologías para el desarrollo web</p>

        </div>

        <div>
            <img class="logoEscom" src="../images/pngwing.com.png" alt="logo de ESCOM">
        </div>

        <div>
            <p>Escuela Superior de Cómputo</p>
            <p>ESCOM IPN, Unidad Profesional Adolfo López Mateos, Av. Juan de Dios Bátiz</p>
            <p>Nueva Industrial Vallejo, Gustavo A. Madero, 07320 Ciudad de México, CDMX</p>
        </div>
    </footer>

</body>
</html>