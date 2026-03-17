-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS tecnoshop_db;
USE tecnoshop_db;



-- Tabla de Roles
CREATE TABLE roles (
    id_rol_PK INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre VARCHAR(50) NOT NULL UNIQUE, 
    descripcion VARCHAR(255).
);

-- Tabla de Usuarios
CREATE TABLE usuarios (
    id_usuario_PK INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    id_rol_FK INT NOT NULL DEFAULT 1,
    nombre_completo VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    activo BOOLEAN DEFAULT TRUE,
    FOREIGN KEY (id_rol_FK) REFERENCES roles(id_rol_PK)
);

-- Tabla de Direcciones (Un usuario puede tener múltiples direcciones)
CREATE TABLE direcciones (
    id_direccion_PK INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario_FK INT NOT NULL,
    calle VARCHAR(255) NOT NULL,
    numero_exterior VARCHAR(50) NOT NULL,
    numero_interior VARCHAR(50),
    colonia VARCHAR(150) NOT NULL,
    ciudad VARCHAR(100) NOT NULL,
    estado VARCHAR(100) NOT NULL,
    codigo_postal VARCHAR(20) NOT NULL,
    pais VARCHAR(100) DEFAULT 'España',
    telefono_contacto VARCHAR(20),
    es_principal BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (id_usuario_FK) REFERENCES usuarios(id_usuario_PK) ON DELETE CASCADE
);



-- Tabla de Categorías 
CREATE TABLE categorias (
    id_categoria_PK INT AUTO_INCREMENT PRIMARY KEY,
    nombreC VARCHAR(100) NOT NULL UNIQUE,
    descripcionC TEXT
);

-- Tabla de Productos
CREATE TABLE productos (
    id_producto_PK INT AUTO_INCREMENT PRIMARY KEY,
    id_categoria_FK INT NOT NULL,
    nombre VARCHAR(200) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL DEFAULT 0,
    imagen_url VARCHAR(255),
    destacado BOOLEAN DEFAULT FALSE, 
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_categoria_FK) REFERENCES categorias(id_categoria_PK)
);


-- Tabla de Pedidos
CREATE TABLE pedidos (
    id_pedido_PK INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario_FK INT NOT NULL,
    id_direccion_envio_FK INT NOT NULL,
    total DECIMAL(10, 2) NOT NULL,
    estado_actual VARCHAR(50) DEFAULT 'Pendiente',
    metodo_pago VARCHAR(50),
    fecha_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario_FK) REFERENCES usuarios(id_usuario_PK),
    FOREIGN KEY (id_direccion_envio_FK) REFERENCES direcciones(id_direccion_PK)
);

-- Tabla de Detalles del Pedido (Productos por cada pedido)
CREATE TABLE pedido_detalles (
    id_pedido_detalle_PK INT AUTO_INCREMENT PRIMARY KEY,
    id_pedido_FK INT NOT NULL,
    id_producto_FK INT NOT NULL,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (id_pedido_FK) REFERENCES pedidos(id_pedido_PK) ON DELETE CASCADE,
    FOREIGN KEY (id_producto_FK) REFERENCES productos(id_producto_PK)
);



-- Tabla de Seguimiento de Pedidos
CREATE TABLE pedido_seguimiento (
    id_seguimiento_PK INT AUTO_INCREMENT PRIMARY KEY,
    id_pedido_FK INT NOT NULL,
    estado VARCHAR(100) NOT NULL, 
    descripcion TEXT,
    ubicacion VARCHAR(150), 
    fecha_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    notificado_al_cliente BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (id_pedido_FK) REFERENCES pedidos(id_pedido_PK) ON DELETE CASCADE
);

-- Inserción de registros base

INSERT INTO roles (nombre, descripcion) VALUES 
('cliente', 'Usuario estándar que realiza compras'),
('admin', 'Administrador de la tienda');

INSERT INTO categorias (nombreC, descripcionC) VALUES 
('Ordenadores', 'Equipos completos de última generación'),
('Componentes', 'Hardware de vanguardia para tu PC'),
('Periféricos', 'Accesorios gaming de alta calidad');

INSERT INTO productos (id_categoria_FK, nombre, descripcion, precio, stock, destacado) VALUES 
(1, 'Portátil Gaming Nitro 5', 'Procesador i7, 16GB RAM, RTX 4060. Ideal para gaming pesado.', 1199.99, 10, TRUE),
(1, 'Sobremesa TecnoTower Pro', 'PC de escritorio con refrigeración líquida y Ryzen 9.', 1550.00, 5, FALSE),
(2, 'Tarjeta Gráfica RTX 4070 Ti', '12GB GDDR6X, perfecta para edición de video y 4K.', 850.50, 15, TRUE),
(3, 'Teclado Mecánico RGB Pro', 'Switches mecánicos ultra rápidos y retroiluminación personalizada.', 89.90, 50, FALSE),
(3, 'Ratón Óptico G-Series', 'Sensor de 25K DPI y 6 botones programables.', 45.00, 100, TRUE);