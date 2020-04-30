# Gestión de usuarios | Tablas paramétricas del proyecto

_Este módulo permite la administración de usuarios centralizada, cargos, dependencias, Tablas parámetricas para el módulo de contratos, carga de obligaciones, compromisos y ejecución prsupuestal de una entidad asociada a SIIF Nacion II_

## Pre-requisitos 📋

_Para realizar la instalación del módulo se requiere aprovisionar un servidor | servidores con las siguientes carácterísticas_

* Sistema Operativo Linux | Windows Server
* Base de datos MySQL (Community) | MariaDB
* PHP versión 5.6 | Superior
* Espacio requerido para instalación 40 MB para la aplicación
* Memoria RAM mínimo 8 GB

### Comenzando 🚀

_Para comenzar descargue del enlace enviado a su correo electrónico los scripts SQL y ejecútelos creando las siguientes bases de datos teniendo en cuenta dejar los mismo nombres_

* **edl**.sql
* **dbct**.sql
* **dbusers**.sql
* **sep2**.sql

### Instalación 🔧

_Descarga el folder [GestionGlobal](https://github.com/agutierrezd/GestionGlobal) , descomprima y copie los archivos en el wwwroot_

```
www/Athena/GestionGlobal/
```

_Ubique en el folder **/connections** para modificar la cadena de conexión a la base de datos_

```
www/Athena/GestionGlobal/connections/
```
_Modifique el archivo **ConnectionManager.php** líneas entre **274 y 409**_

```
$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "edl_at_localhost";
		$data["connName"] = "edl at localhost";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;IP;usuario;password;;edl;;1"; //currently unused
		$this->_connectionsIdByName["edl at localhost"] = "edl_at_localhost";
```  
 _En caso en que la aplicación y la base de datos queden alojadas en el mismo servidor unicamente modifique el usuario y el password, deje localhost o cambielo por 127.0.0.1_

## Ejecutando las pruebas ⚙️

_Para verificar si todo anda bien, escriba en su navegador Web la URL de prueba_

```
http://localhost/Athena/GestionGlobal/
```

## Autores ✒️

* **Alex Fernando Gutierrez** - *Análisis, Diseño y Desarrollo* - [agutierrezd](https://github.com/agutierrezd/)

## Licencia 📄

Este proyecto está bajo la Licencia de uso de acuerdo al convenio entre MinCIT y la entidad interesada

## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* Da las gracias públicamente 🤓.

---
⌨️ por [agutierrezd](https://github.com/agutierrezd/)
 
