# Ejercicios PHP 4 - Manejo de Archivos y Directorios

Este repositorio contiene una serie de ejercicios en PHP diseñados para practicar la lectura, escritura y manipulación de archivos y directorios. Cada ejercicio aborda diferentes funciones y técnicas relacionadas con el manejo de ficheros en PHP.

---

## Lista de Ejercicios

1. **Leer un fichero línea a línea**  
   Usa `fopen()`, `fgets()` y `feof()` para leer y mostrar el contenido de "archivo.txt" línea por línea.

2. **Escribir datos en un fichero**  
   Crea/abre "salida.txt" en modo escritura y escribe una cadena de texto usando `fwrite()` y `fflush()`.

3. **Añadir contenido a un fichero existente**  
   Abre "registro.txt" en modo *append* y agrega una nueva línea al final del archivo.

4. **Contar el número de caracteres de un fichero**  
   Lee "texto.txt" con `fread()` y calcula el total de caracteres usando `filesize()`.

5. **Listar el contenido de un directorio**  
   Cambia el directorio actual con `chdir()` y lista los archivos usando `scandir()`.

6. **Leer un fichero carácter a carácter**  
   Utiliza `fgetc()` para leer y mostrar cada carácter del archivo "letras.txt".

7. **Leer un fichero completo con `file_get_contents()`**  
   Obtiene el contenido completo de "completo.txt" en una sola operación.

8. **Reescribir el contenido de un fichero**  
   Modifica "datos.txt" reemplazando una palabra específica y guarda los cambios.

9. **Obtener metadatos de un fichero**  
   Usa `stat()` para mostrar el tamaño y fecha de modificación de "info.txt".

10. **Leer un fichero en un arreglo de líneas**  
    Almacena cada línea de "lineas.txt" en un array con `file()` y muestra su contenido.

11. **Releer un fichero con `rewind()`**  
    Lee parcialmente "releer.txt", reinicia el puntero con `rewind()` y vuelve a leerlo.

12. **Registro de visitas en un log**  
    Registra la fecha y hora de cada visita en "log.txt" usando modo *append*.

13. **Comprobar existencia de un fichero**  
    Verifica si "config.txt" existe: si sí, lo lee; si no, lo crea con contenido por defecto.

14. **Copiar contenido entre ficheros**  
    Copia el contenido de "origen.txt" a "destino.txt".

15. **Cambiar directorio y listar archivos**  
    Cambia a un directorio específico y lista sus archivos (similar al Ejercicio 5, enfocado en flujo de trabajo).