GameZone es una plataforma para la gestión de ventas de videojuegos. El sistema cuenta con una base de datos con las siguientes tablas:

Ventas(id: int, id_juego: int, id_usuario: int, cantidad: int, total_pagado: float, fecha_venta: date)
Juegos(id: int, nombre: varchar, precio: float, fecha_lanzamiento: date, plataforma: varchar, stock: int)
Usuarios(id: int, nombre: varchar, email: varchar, activo: boolean, tipo_usuario: enum('admin', 'cliente'))

*Requerimiento:
-Implementar el siguiente requerimiento siguiendo el patrón MVC. No es necesario realizar las vistas, solo el/los controlador(es), modelo(s) y las invocaciones a la vista.
-Listar todas las ventas realizadas de un videojuego en una plataforma específica (por ejemplo, PlayStation o Xbox). Por cada venta, se debe indicar el id de la venta, el nombre del videojuego, la cantidad vendida, el total_pagado, y el nombre del usuario que realizó la compra.

*Realizar las siguientes validaciones y controles:
-Controlar posibles errores de carga y validar que la vista no realiza ningún control.
-Los filtros deben obtenerse mediante GET.
-Verificar que el videojuego esté disponible en la plataforma indicada.
-Comprobar que el videojuego tenga stock suficiente antes de registrar la venta.
-Si el stock del videojuego es menor a la cantidad solicitada, mostrar un mensaje de error.
-Al realizar una venta, actualizar el stock del videojuego en la base de datos.

*Requerimientos adicionales:
-Calcular el total pagado multiplicando el precio del videojuego por la cantidad comprada.
-Agregar un filtro opcional para buscar ventas en un rango de fechas.
-No es necesario implementar el router del sistema.
