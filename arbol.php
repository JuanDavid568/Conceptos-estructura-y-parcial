<?php
class Nodo {
    public $valor;
    public $izquierdo;
    public $derecho;

    public function __construct($valor) {
        $this->valor = $valor;
        $this->izquierdo = null;
        $this->derecho = null;
    }
}

class ArbolBinario {
    public $raiz;

    public function __construct() {
        $this->raiz = null;
    }

    public function insertar($valor): void {
        $nuevoNodo = new Nodo($valor);
        if ($this->raiz === null) {
            $this->raiz = $nuevoNodo;
        } else {
            $this->insertarNodo($this->raiz, $nuevoNodo);
        }
    }

    private function insertarNodo($nodoActual, $nuevoNodo): void {
        if ($nuevoNodo->valor < $nodoActual->valor) {
            if ($nodoActual->izquierdo === null) {
                $nodoActual->izquierdo = $nuevoNodo;
            } else {
                $this->insertarNodo($nodoActual->izquierdo, $nuevoNodo);
            }
        } else {
            if ($nodoActual->derecho === null) {
                $nodoActual->derecho = $nuevoNodo;
            } else {
                $this->insertarNodo($nodoActual->derecho, $nuevoNodo);
            }
        }
    }

    public function recorrerEnOrden($nodo): void {
        if ($nodo !== null) {
            $this->recorrerEnOrden($nodo->izquierdo);
            echo $nodo->valor . " ";
            $this->recorrerEnOrden($nodo->derecho);
        }
    }
}

// --- Ejemplo de uso ---
$arbol = new ArbolBinario();
$arbol->insertar(8);
$arbol->insertar(3);
$arbol->insertar(10);
$arbol->insertar(6);
$arbol->insertar(14);
$arbol->insertar(7);
$arbol->insertar(13);

echo "<h3>Recorrido en orden del árbol:</h3>";
$arbol->recorrerEnOrden($arbol->raiz);
?>




