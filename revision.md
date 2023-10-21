# Revisión de la maquetación

## Tipografía

No está cargada la tipografía que se va a usar. Conviene ponerla desde el principio porque si tiene un tamaño ligeramente diferente a la utilizada durante el desarrollo, puede implicar tener que hacer ajustes adicionales más adelante. Te he dado acceso a AR\DE, un proyecto en BitBucket que también usa Tailwind, en el que se incluye tipografía a partir de ficheros y no de Google Fonts. Te puede servir de ejemplo (mira los archivos app.css, tailwind.config.js y el directorio /resources/fonts).

## Mosaico de eventos en la página de inicio

### Sobre la rejilla

El espacio entre cada «card» ha de ser siempre el mismo y el conjunto de tarjetas de una fila debe ocupar todo el ancho del container. Ahora mismo se cumple lo segundo pero no lo primero. Al hacerlo así, cuando aumente el ancho de la pantalla aumentará el ancho y alto de cada «card» hasta cierto límite. No importa, creo que va a quedar bien.

Tendrás que quitar el height: 572px por lo dicho en el anterior párrafo. Además, de forma general intentaremos evitar poner medidas fijas porque luego tendremos que estar haciendo muchos ajustes para diferentes tamaños de pantalla.

Te recomiendo usar la propiedad gap de flex para los espacios entre filas y entre columnas.

### Sobre la maquetación dentro de un card

Ahora mismo se ve bien pero porque la longitud de los textos es idéntica pero si cambiamos el nombre de un evento y le ponemos uno corto, por ejemplo, el texto «acceso libre» ya no queda en línea con los demás.

La imagen que aparezca ahí la sacaremos de la base de datos del cliente y no tenemos control sobre ella, así que por CSS tendremos que hacer algo para que siempre se muestre con determinadas proporciones (16:9 por ejemplo). Este es un problema clásico para el que hay muchas soluciones por internet pero no te mates buscando: pregúntale a Ricardo que esta misma semana ayudo a Lara con ese mismo problema.

La idea es que:
- Todas las imágenes tengan la misma proporción y por tanto la misma altura
- Acceso abierto / acceso libre… estén a la misma altura en las tarjetas de la misma fila
- Ídem con fecha
- Lo mismo con título, con la salvedad de que unos serán más altos que otros
- El botón «ver detalles», junto a la fila que le precede con el logo del congreso y la palabra «congreso», estará siempre al final de la tarjeta. De esta manera, todas las tarjetas de la misma fila tendrán la misma altura (el de la tarjeta más alta)
Puedes ver un ejemplo en esta página (sección «suggested for you»): https://esc365.escardio.org/home
