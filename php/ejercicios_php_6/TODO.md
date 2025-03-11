# Lista de Tareas - PHP Forms

## Tareas Generales
- [x] Incluir bloque de autor en TODOS los archivos PHP
- [x] Crear PDF con capturas de código + resultados en navegador
- [x] Subir todos los archivos PHP finalizados
- [x] Organizar código en carpetas por ejercicio (opcional)

----------------------------------

## Ejercicio 1: Formulario de Saludo
### Formulario (saludo.html)
- [ ] Crear campo "nombre" (text)
- [ ] Crear campo "email" (email)
- [ ] Botón submit llamado "enviar"

### Procesamiento (procesar_saludo.php)
- [ ] Validar que ambos campos no estén vacíos
- [ ] Mostrar error si falta algún campo
- [ ] Mostrar mensaje de bienvenida con nombre y email
- [ ] Sanitizar inputs contra XSS (htmlspecialchars)

----------------------------------

## Ejercicio 2: Calculadora
### Formulario (calculadora.html)
- [x] Dos campos numéricos
- [x] Selector con 4 operaciones
- [x] Botón submit llamado "calcular"

### Procesamiento (procesar_calculadora.php)
- [x] Recuperar números y operación
- [x] Validar división por cero
- [x] Implementar switch para operaciones
- [x] Mostrar fórmula completa (ej: "5 + 3 = 8")

----------------------------------

## Ejercicio 3: Sistema de Login
### Formulario (login.html)
- [ ] Campo usuario (text)
- [ ] Campo contraseña (password)
- [ ] Botón submit llamado "ingresar"

### Procesamiento (procesar_login.php)
- [ ] Credenciales fijas: admin/1234
- [ ] Comparación estricta (===)
- [ ] Mensaje de bienvenida personalizado
- [ ] Mensaje de error genérico para credenciales inválidas

----------------------------------

## Ejercicio 4: Subida de Archivos
### Formulario (subida.html)
- [ ] Input type="file"
- [ ] Atributo enctype="multipart/form-data"
- [ ] Botón submit

### Procesamiento (procesar_subida.php)
- [ ] Crear carpeta "uploads" si no existe
- [ ] Validar errores de subida ($_FILES['error'])
- [ ] Mover archivo con move_uploaded_file()
- [ ] Mostrar nombre del archivo subido
- [ ] Limitar tamaño máximo (opcional avanzado)

----------------------------------

## Ejercicio 5: Encuesta de Preferencias
### Formulario (encuesta.html)
- [x] Campos nombre y email
- [x] 3 radio buttons para género
- [x] 3 checkboxes para intereses
- [x] Textarea para comentarios
- [x] Botón submit

### Procesamiento (procesar_encuesta.php)
- [x] Validar campos obligatorios
- [x] Mostrar resumen con todos los datos
- [x] Manejar campos opcionales (checkboxes no seleccionados)
- [x] Formatear salida con estilos básicos

----------------------------------

## Testing Obligatorio (para mínimo 2 ejercicios)
- [ ] Probar con datos válidos
- [ ] Probar con campos vacíos
- [ ] Verificar sanitización de inputs
- [ ] Probar casos extremos:
  - Ej2: División por cero
  - Ej4: Archivos muy grandes
  - Ej5: Solo algunos checkboxes seleccionados

## Testing Adicional (para versión completa)
- [ ] Probar todos los ejercicios
- [ ] Verificar compatibilidad móvil
- [ ] Probar con caracteres especiales (tildes, emojis)
- [ ] Agregar validación HTML5 (required, pattern)

## Entrega Final
- [ ] Comprimir SOLO archivos necesarios (.php y .html)
- [ ] Excluir archivos temporales y node_modules
- [ ] Nombrar ZIP: "PHPForms_TuNombre.zip"
- [ ] Verificar que el PDF incluya:
  - Captura de código de cada ejercicio
  - Captura de resultado en navegador
  - Nombre y curso visible en todas las páginas

## Ideas para Mejorar (opcional)
- [ ] Agregar CSS a los formularios
- [ ] Implementar redireccionamiento después del login
- [ ] Guardar encuestas en archivo .txt
- [ ] Galería de imágenes para ejercicio 4
- [ ] Selector de temas (dark/light mode)