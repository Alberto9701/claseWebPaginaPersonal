
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/escom.css">
    <link rel="stylesheet" href="../styles/principalStyles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed:wght@100&display=swap" rel="stylesheet">
</head>
<body>

    <header class="header">
        <h1>Mi Recorrido por ESCOM</h1>
    </header>
    
    <nav class="barraDeNav">
        <a href="../index.html">Inicio</a>
        <a href="../pages/escuelas.html">Mi vida académica</a>
        <a href="../pages/UnidadApren.php">Mi recorrido por ESCOM</a>
        <a href="../pages/cualidades.php">Mis cualidades y habilidades</a>
        
    </nav>
    
    <div class="contenedor">
        <div class="colores">
            <div class="color">
                <p>Aprobada</p>
                <div class="aprobadaCuadro"></div>
            </div>

            <div class="color">
                <p>Reprobada</p>
                <div class="reprobadaCuadro"></div>
            </div>

            <div class="color">
                <p>No cursada</p>
                <div class="noCursadaCuadro"></div>
            </div>

            <div class="color">
                <p>Cursando</p>
                <div class="cursandoCuadro"></div>
            </div>

        </div>
        
        <?php
            class UnidadAprend{
                public $semestre;
                public $nombre;
                public $estado;

                public function __construct($semestre, $nombre, $estado){
                    $this->semestre=$semestre;
                    $this->nombre = $nombre;
                    $this->estado = $estado;
                }
            }
            
            //obtenemos los archivos 
            $archivo = fopen("../datosUsuario/unidadesAprendizaje.txt","r");

            $materias = [];

            while(!feof($archivo)){
                $linea = fgets($archivo);
                $datos = explode("," ,$linea);

                $materias[] = new UnidadAprend($datos[0],$datos[1],trim($datos[2]));
            }
            
            fclose($archivo);
            
            //desplegamos deacuerdo al semestre
            echo "<table>";

                echo "<div class = 'semestre'>";
                echo "<h2>Semestre 8</h2>";
                foreach($materias as $materia){
                    if( $materia->semestre == 8){
                        if($materia->estado=="aprobada"){
                            echo "<div class='materia aprobada'>";
                        }
                        else if($materia->estado ==="reprobada"){
                            echo "<div class='materia reprobada'>";
                        }
                        else if($materia->estado=="no cursada"){
                            echo "<div class='materia noCursada'>";

                        }
                        else if($materia->estado=="cursando"){
                            echo "<div class='materia cursando'>";

                        }
                        echo "<p>". "Semestre: ". $materia->semestre."</p>";
                        echo "<p>". $materia->nombre."</p>";
                        echo "<p>".$materia->estado."</p>";
                        echo "</div>";
                    }
                }
                echo "</div>";
                
                echo "<hr class='division'>";

                echo "<div class = 'semestre'>";
                echo "<h2>Semestre 7</h2>";
                foreach($materias as $materia){
                    if( $materia->semestre == 7){
                        if($materia->estado=="aprobada"){
                            echo "<div class='materia aprobada'>";
                        }
                        else if($materia->estado ==="reprobada"){
                            echo "<div class='materia reprobada'>";
                        }
                        else if($materia->estado=="no cursada"){
                            echo "<div class='materia noCursada'>";

                        }
                        else if($materia->estado=="cursando"){
                            echo "<div class='materia cursando'>";

                        }
                        echo "<p>". "Semestre: ". $materia->semestre."</p>";
                        echo "<p>". $materia->nombre."</p>";
                        echo "<p>".$materia->estado."</p>";
                        echo "</div>";
                    }
                }
                echo "</div>";
                
                echo "<hr class='division'>";
                

                echo "<div class = 'semestre'>";
                echo "<h2>Semestre 6</h2>";
                foreach($materias as $materia){
                    if( $materia->semestre == 6){
                        if($materia->estado=="aprobada"){
                            echo "<div class='materia aprobada'>";
                        }
                        else if($materia->estado ==="reprobada"){
                            echo "<div class='materia reprobada'>";
                        }
                        else if($materia->estado=="no cursada"){
                            echo "<div class='materia noCursada'>";

                        }
                        else if($materia->estado=="cursando"){
                            echo "<div class='materia cursando'>";

                        }
                        echo "<p>". "Semestre: ". $materia->semestre."</p>";
                        echo "<p>". $materia->nombre."</p>";
                        echo "<p>".$materia->estado."</p>";
                        echo "</div>";
                    }
                }
                echo "</div>";
                
                echo "<hr class='division'>";
                echo "<div class = 'semestre'>";
                echo "<h2>Semestre 5</h2>";
                foreach($materias as $materia){
                    if( $materia->semestre == 5){
                        if($materia->estado=="aprobada"){
                            echo "<div class='materia aprobada'>";
                        }
                        else if($materia->estado ==="reprobada"){
                            echo "<div class='materia reprobada'>";
                        }
                        else if($materia->estado=="no cursada"){
                            echo "<div class='materia noCursada'>";

                        }
                        else if($materia->estado=="cursando"){
                            echo "<div class='materia cursando'>";

                        }

                        echo "<p>". "Semestre: ". $materia->semestre."</p>";
                        echo "<p>". $materia->nombre."</p>";
                        echo "<p>".$materia->estado."</p>";
                        echo "</div>";
                    }
                }
                echo "</div>";
                
                echo "<hr class='division'>";
                
                echo "<div class = 'semestre'>";
                echo "<h2>Semestre 4</h2>";
                foreach($materias as $materia){
                    if( $materia->semestre == 4){
                        if($materia->estado=="aprobada"){
                            echo "<div class='materia aprobada'>";
                        }
                        else if($materia->estado ==="reprobada"){
                            echo "<div class='materia reprobada'>";
                        }
                        else if($materia->estado=="no cursada"){
                            echo "<div class='materia noCursada'>";

                        }
                        else if($materia->estado=="cursando"){
                            echo "<div class='materia cursando'>";

                        }
                        echo "<p>". "Semestre: ". $materia->semestre."</p>";
                        echo "<p>". $materia->nombre."</p>";
                        echo "<p>".$materia->estado."</p>";
                        echo "</div>";
                    }
                }
                echo "</div>";
                
                echo "<hr class='division'>";
                
                echo "<div class = 'semestre'>";
                echo "<h2>Semestre 3</h2>";
                foreach($materias as $materia){
                    if( $materia->semestre == 3){
                        if($materia->estado=="aprobada"){
                            echo "<div class='materia aprobada'>";
                        }
                        else if($materia->estado ==="reprobada"){
                            echo "<div class='materia reprobada'>";
                        }
                        else if($materia->estado=="no cursada"){
                            echo "<div class='materia noCursada'>";

                        }
                        else if($materia->estado=="cursando"){
                            echo "<div class='materia cursando'>";

                        }
                        echo "<p>". "Semestre: ". $materia->semestre."</p>";
                        echo "<p>". $materia->nombre."</p>";
                        echo "<p>".$materia->estado."</p>";
                        echo "</div>";
                    }
                }
                echo "</div>";
                
                echo "<hr class='division'>";
                
                echo "<div class = 'semestre'>";
                echo "<h2>Semestre 2</h2>";
                foreach($materias as $materia){
                    if( $materia->semestre == 2){
                        if($materia->estado=="aprobada"){
                            echo "<div class='materia aprobada'>";
                        }
                        else if($materia->estado ==="reprobada"){
                            echo "<div class='materia reprobada'>";
                        }
                        else if($materia->estado=="no cursada"){
                            echo "<div class='materia noCursada'>";
        
                        }
                        else if($materia->estado=="cursando"){
                            echo "<div class='materia cursando'>";

                        }
                        echo "<p>". "Semestre: ". $materia->semestre."</p>";
                        echo "<p>". $materia->nombre."</p>";
                        echo "<p>".$materia->estado."</p>";
                        echo "</div>";
                    }
                }
                echo "</div>";
                
                echo "<hr class='division'>";
                
                
                echo "<div class='semestre'>";
                echo "<h2>Semestre 1</h2>";
                foreach($materias as $materia){
                    if( $materia->semestre == 1){
                        if($materia->estado=="aprobada"){
                            echo "<div class='materia aprobada'>";
                        }
                        else if($materia->estado ==="reprobada"){
                            echo "<div class='materia reprobada'>";
                        }
                        else if($materia->estado=="no cursada"){
                            echo "<div class='materia noCursada'>";
        
                        }
                        else if($materia->estado=="cursando"){
                            echo "<div class='materia cursando'>";

                        }
                        echo "<p>". "Semestre: ". $materia->semestre."</p>";
                        echo "<p>". $materia->nombre."</p>";
                        echo "<p>". $materia->estado."</p>";
                        echo "</div>";
                    }
                }
                echo "</div>";
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



