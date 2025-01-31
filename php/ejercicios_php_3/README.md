# Ejercicios PHP 3

Este repositorio contiene soluciones a ejercicios de PHP enfocados en funciones, manejo de arrays, fechas y horas. Cada archivo incluye comentarios con información del alumno y cumple con los requisitos especificados.

---

## Enunciados completos de los ejercicios

### **Creación y llamada a funciones sencillas**

#### Ejercicio 1: Función para saludar
**Pseudocódigo:**
1. Crear una función `saludar` que reciba un nombre como parámetro.
2. La función debe devolver un saludo con ese nombre.
3. Llama a la función con un nombre y muestra el resultado.

---

#### Ejercicio 2: Función para calcular el doble de un número
**Pseudocódigo:**
1. Crear una función `doble` que reciba un número como parámetro.
2. La función debe devolver el doble de ese número.
3. Llama a la función con un número y muestra el resultado.

---

#### Ejercicio 3: Función con un valor por defecto
**Pseudocódigo:**
1. Crear una función `saludarConDefecto` que reciba un nombre y un saludo opcional (valor por defecto: "Hola").
2. La función debe devolver el saludo y el nombre.
3. Llama a la función con y sin especificar el saludo.

---

#### Ejercicio 4: Diferencia entre parámetros por valor y referencia
**Pseudocódigo:**
1. Crear una función que reciba un número **por valor** y lo incremente.
2. Crear otra función que reciba un número **por referencia** y lo incremente.
3. Llama a ambas funciones y muestra la diferencia.

---

#### Ejercicio 5: Función recursiva para calcular el factorial
**Pseudocódigo:**
1. Crear una función `factorial` que reciba un número.
2. Si el número es ≤ 1, devolver 1 (caso base).
3. Si no, devolver el número multiplicado por el factorial del número - 1.
4. Llama a la función con un número y muestra el resultado.

---

### **Funciones para trabajar con arrays**

#### Ejercicio 6: Comparar arrays
**Pseudocódigo:**
1. Crear dos arrays con números.
2. Usar `array_diff` para encontrar elementos del primer array que no están en el segundo.
3. Mostrar el resultado.

---

#### Ejercicio 7: Unir arrays
**Pseudocódigo:**
1. Crear dos arrays con números.
2. Usar `array_merge` para unirlos en un solo array.
3. Mostrar el array resultante.

---

#### Ejercicio 8: Ordenar arrays
**Pseudocódigo:**
1. Crear un array desordenado.
2. Usar `sort` para ordenarlo.
3. Mostrar el array ordenado.

---

#### Ejercicio 9: Barajar arrays
**Pseudocódigo:**
1. Crear un array con letras.
2. Usar `shuffle` para barajar el array.
3. Mostrar el array barajado.

---

#### Ejercicio 10: Contar elementos de un array
**Pseudocódigo:**
1. Crear un array con elementos.
2. Usar `count` para obtener el número de elementos.
3. Mostrar el resultado.

---

### **Funciones para trabajar con fechas y horas**

#### Ejercicio 11: Obtener la fecha actual
**Pseudocódigo:**
1. Usar `date("d-m-Y")` para obtener la fecha actual en formato `dd-mm-yyyy`.
2. Mostrar la fecha.

---

#### Ejercicio 12: Obtener detalles de la fecha
**Pseudocódigo:**
1. Usar `getdate()` para obtener información detallada de la fecha actual.
2. Mostrar el año, mes y día.

---

## Instrucciones de entrega
- Cada archivo `.php` debe incluir en comentarios:
  - Nombre del alumno/a
  - Curso (ej: 2ºASIR - Implantación de Aplicaciones Web)
  - Año (ej: 2024-2025).
- Adjuntar un PDF con capturas de pantalla del código y resultados en el navegador.