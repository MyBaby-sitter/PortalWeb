# My Babysitter
Sitio web, para una compañia de servicios de cuidado de niños a domicilio. Proyecto para asignatura "Taller de Integración de Software", Inacap Temuco, 2018
## Importante

Para poder ejecutar correctamente el sitio web, se recomienda hacer unas cuantas configuraciones. 

###VirtualHost
En  *"C:\xampp\apache\conf\extra\httpd-vhosts.conf"*

Editar el archivo con cualquier editor de texto y añadir lo siguiente

```
<VirtualHost mybabysitter.cl:80>
  ServerName www.mybabysitter.cl
ServerAlias mybabysitter.cl
ServerAdmin webmaster@host.example.com
DocumentRoot C:\xampp\htdocs\PortalWeb\

ErrorDocument 404 /404.php

  <Directory C:\xampp\htdocs\PortalWeb\>
    Options +Indexes +FollowSymLinks
    AllowOverride All
    Require all granted
  </Directory>
</VirtualHost>
```
**Nota:** El directorio *"C:\xampp\htdocs\PortalWeb\"* es donde estan alojados los archivos del proyecto
 
### Vhost

Ejecutar como administrador el editor de texto y abrir *"C:\Windows\System32\drivers\etc\vhost"*

Añadir lo siguiente

```
127.0.0.1		mybabysitter.cl www.mybabysitter.cl
```

### Como ejecutar?

Se recomienda utilizar Xampp, ingresar desde navegador a [www.mybabysitter.cl](http://www.mybabysitter.cl)

## Desarrolladores

* **Camilo Espinoza** - [CasteroideYT](https://github.com/CasteroideYT)
* **Rodrigo Ayacura** - [rodrigoayacura](https://github.com/rodrigoayacura)
