<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Ejercicios con php</title>
    </head>
    <body>
        <h2>Ejercicio 1:</h2>
        <p>
        En un curso de “fundamentos de algoritmos”, se tienen las siguiente notas (Cada
una de ellas entre 1 y 5) con sus respectivos porcentajes:
- Taller 1: 20%
- Taller 2: 15%
- Cuestionario 1:22%
- Cuestionario 2:10%
- Proyecto final: 33%
Escribir un algoritmo que lea las cinco notas de un estudiante e imprima la nota
definitiva.
        </p>

        <form name="form1" method="POST" action="definitiva.php">

            Taller 1(20%): <input type="text" name="txttaller1">
            <br>
            Taller 2(15%): <input type="text" name="txttaller2">
            <br>
            Cuestionario 1(22%): <input type="text" name="txtcuestionario1">
            <br>
            Cuestionario 2(10%): <input type="text" name="txtcuestionario2">
            <br>
            Proyecto final(33%): <input type="text" name="txtproyectofinal">
            <br>
            <input type="submit" name="calcular" value="Calcular">

        </form>


        <h2>Ejercicio 2:</h2>
        <p>
Elaborar un algoritmo que muestre un mensaje de acuerdo a la 
edad de una persona: 
Si la edad es de 0 a 10 años “niño”, 
si la edad es de 11 a 14 Años “pre- adolescente”, 
si la edad es de 15 a 18 años “adolescente”, 
si la edad es de 19 a 25 años “joven”, 
si la edad es de 26 a 65 años “adulto”, 
si la edad es Mayor de 65 “anciano”.
        </p>
        <form name="form2" method="POST" action="edad.php">

            Edad: <input type="text" name="txtedad">
            <br>
            <input type="submit" name="evaluar" value="Evaluar">

        </form>


    </body>
</html>