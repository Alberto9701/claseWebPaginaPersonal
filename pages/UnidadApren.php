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
    $archivo = fopen("unidadesAprendizaje.txt","r");

    $materias = [];

    while(!feof($archivo)){
        $linea = fgets($archivo);
        $datos = explode("," ,$linea);

        $materias[] = new UnidadAprend($datos[0],$datos[1],$datos[2]);
    }

    fclose($archivo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <?php
                foreach($materias as $materia){
                    foreach($materia as $atributo){
                        echo "<th> <?php $atributo ?></th>";
                    }
                }
            ?>
        </tr>
    </table>
</body>
</html>

