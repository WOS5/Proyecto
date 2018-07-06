create table Anios( 
id_anios int, 
descripcion_anios datetime, primary key(id_anios));

create table Marcas(
id_marca int,
nombre_marca varchar(50),primary key (id_marca));

create table Modelos(
id_modelo int,
descripcion_modelo varchar(50), 
id_marca int,
primary key (id_modelo),
foreign key (id_marca) references Marcas(id_marca));

create table Tipo_Motores( 
id_tipoMotor int, 
descripcion_tipoMotor varchar(20), primary key (id_tipoMotor));

create table estados(
id_estado int,
nombre_estado varchar (50), primary key (id_estado));

create table ciudad(
id_ciudad int,
nombre_ciudad varchar (50),
id_estado int,
primary key(id_ciudad),
foreign key (id_estado) references estados(id_estado));

create table proveedores( 
id_prov int,
rfc_prov int,
nombre_prov varchar (50),
telefono_prov bigint,
cp_prov int,
id_ciudad int,
primary key(id_prov),
foreign key (id_ciudad) references ciudad(id_ciudad));

create table almacenes(
id_alm int,
nombre_alm varchar (50),
id_ciudad int, 
primary key(id_alm),
foreign key (id_ciudad) references ciudad(id_ciudad));

create table vehiculos(
id_vehiculo int,
id_anios int,
id_marca int,
id_modelo int,
id_tipoMotor int,
primary key (id_vehiculo),
foreign key (id_anios) references Anios(id_anios),
foreign key (id_marca) references Marcas(id_marca),
foreign key (id_modelo) references Modelos(id_modelo),
foreign key (id_tipoMotor) references Tipo_Motores(id_tipoMotor));

create table categorias(
id_categoria int auto_increment,
nombre_categoria varchar (50),
primary key(id_categoria));

create table subCategorias( 
id_subcategoria int auto_increment,
nombre_subcategoria varchar(50),
id_categoria int,
primary key (id_subcategoria),
foreign key (id_categoria) references categorias(id_categoria));

create table Catalogos(
id_catalogo int,
id_vehiculo int,
id_subcategoria int,
primary key(id_catalogo),
foreign key (id_subCategoria) references subCategorias(id_subcategoria),
foreign key (id_vehiculo) references vehiculos(id_vehiculo));

create table Refacciones( 
folio_refaccion int,
descripcion_refaccion varchar(50),
existencia_refaccion int,
id_catalogo int,
id_prov int,
primary key (folio_refaccion),
foreign key (id_catalogo) references Catalogos(id_catalogo),
foreign key (id_prov) references proveedores(id_prov));

Create table Salidas( 
folio_salida int,
fecha_salida datetime,
folio_refaccion int,
cantidad_salida int,
id_alm int,
primary key (folio_salida),
foreign key (folio_refaccion) references Refacciones(folio_refaccion),
foreign key (id_alm) references almacenes(id_alm));

create table devoluciones(
folio_devulucion int,
fecha_devolucion datetime,
salida_devolucion datetime,
observacion_devolucion varchar(50),
id_alm int,
primary key(folio_devulucion),
foreign key (id_alm) references almacenes(id_alm));

create table entradas(folio_entrada int,
fecha_entrada datetime, 
folio_refaccion int,
id_alm int,
primary key(folio_entrada),
foreign key (folio_refaccion) references Refacciones(folio_refaccion),
foreign key (id_alm) references almacenes(id_alm));
