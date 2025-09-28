<?php

interface prestable {
    public function prestar();
    public function devolver();
    public function estaPrestado() : bool;
}

//clase abstracta Material (libro y revista)
abstract class Material {
    protected string $titulo;
    protected string $autor;
    protected string $anio;

    public function  __construct( string $titulo, string $autor, string $anio) {
        $this -> titulo = $titulo;
        $this -> autor = $autor;
        $this -> anio = $anio;
    }

    abstract public function mostrar() : string;

    public function getTitulo() : string {
        return $this -> titulo;
    }
        
    }


    //clase Libro
    class Libro extends Material implements Prestable {
        private bool $prestado = false;

        public function mostrar() : string {
            $estado = $this -> prestado ? "Prestado" : "Dispobible";
            return "Libro: {$this -> titulo}, Autor: {$this -> autor}. Año: {$this -> anio}, Estado: {$estado}";
        }
        public function prestar() {
            if ($this -> prestado) {
                echo "El libro '{$this -> titulo}' ya está prestado.\n";
            } else {
                $this -> prestado = true;
                echo "Has devuelto el libro '{$this -> titulo}'.\n";
            }
        }
        public function devolver() {
            if (!$this -> prestado) {
                echo "El libro '{$this -> titulo}' no estaba prestado. \n";
            } else {
                $this -> prestado = false;
                echo "Has devuelto el libro '{$this -> titulo}'. \n";
            }

        }
        public function estaPrestado() : bool {
            return $this -> prestado;
        }
    }

    //clase Revista
    class Revista extends Material {
        private int $numero;

        public function __construct(string $titulo, string $autor, int $anio, int $numero) {
            parent :: __construct($titulo, $autor, $anio);
            $this -> numero = $numero;
        }
        public function mostrar() : string {
            return "Revista: {$this -> titulo}, Nº {$this -> numero}, Año: {$this -> anio}";
        }
    }


    //clase Biblioteca
    class Biblioteca {
        private array $materiales = [];

        public function agregarMaterial(Material $material) {
            $this -> materiales[] = $material;
        }

        public function mostrarMateriales() {
            foreach ($this -> materiales as $material) {
                echo $material -> mostrar() . "\n";
            }
        }

        public function buscarPorTitulo(string $titulo) {
            foreach ($this -> materiales as $material) {
                if (strpos($material -> getTitulo(), $titulo) !== false) {
                    echo " Encontrado: " . $material -> mostrar() . "\n";
                    return;
                }
            }
            echo "No se econtro material con el titulo '{$titulo}'" . "\n";
        }
    }

    $biblioteca = new Biblioteca ();

    //agregar materiales
    $biblioteca -> agregarMaterial(new Libro("Los pilares de la tierra", "Ken Follet", 1989));
    $biblioteca -> agregarMaterial(new Libro("Persépolis", "Marjane Satrapi", 2007));
    $biblioteca -> agregarMaterial(new Revista("Muy interesante", "Equipo Editorial", 2022, 87));
    $biblioteca -> agregarMaterial(new Revista("National Geofraphic", "Varios", 2023, 120));


    //mostrar todo
    echo "MATERIALES EN LA BIBLIOTECA: \n";
    $biblioteca -> mostrarMateriales();

    //buscar por titulo
    echo "Búsqueda:";
    $biblioteca -> buscarPorTitulo("Persépolis");


    //prestar y devolver
    echo "Prestamos: ";
    $libro = new Libro("Aventura en el tocador de señoras", "Eduardo Mendoza", 2001);
    $biblioteca -> agregarMaterial($libro);

    $libro -> prestar();
    $libro -> prestar(); //ya estaba prestado

    $libro -> devolver();
    $libro -> devolver(); //ya estaba devuelto



