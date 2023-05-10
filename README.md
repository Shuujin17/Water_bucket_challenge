# Water Bucket Challenge

------------


## Descripción General

------------
Cree una aplicación que resuelva el acertijo de la jarra de agua para entradas dinámicas (X, Y, Z). La simulación debe tener una interfaz de usuario (si es SPA) para mostrar los cambios de estado para cada estado de cada jarra
(Vacío, Lleno o Parcialmente Lleno).
Tienes una jarra de galón X y una de galón Y que puedes llenar de un lago. (Suponga que el lago tiene una cantidad ilimitada de agua). Al usar solo una jarra de X galones y de Y galones (sin una tercera jarra), mida Z galones de agua.
OBJETIVOS
1. Mida Z galones de agua de la manera más eficiente.
2. Cree una interfaz de usuario donde un usuario pueda ingresar cualquier entrada para X, Y, Z y ver la solución.
3. Si no hay solución, muestre "Sin solución".
LIMITACIONES
• Acciones permitidas: Llenar, Vaciar, Transferir.

El sistema cuenta con una estructura de carpetas MVC en la cual tenemos las carpetas controllers, models y views, mas el archivo index.php.

### Empecemos explicando el archivo index.

![](https://scontent-mia3-2.xx.fbcdn.net/v/t39.30808-6/346089825_1023877778591934_5922485972768541063_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=0debeb&_nc_eui2=AeER6M0YlPNum5gxOQinRYBIXpjBrDBOYTZemMGsME5hNs8ESdts7j-X4gB3M-k7KBw&_nc_ohc=ILYnjNRq2qkAX9aQDbW&_nc_ht=scontent-mia3-2.xx&oh=00_AfCV-8ERp-qfHYHY17CKCX3jajnMemAAo8CAAAKgmHKrZQ&oe=646083B4)

Este código es una vista simple que permite al usuario ingresar dos valores (x e y) que representan la capacidad de dos cubetas y un valor (z) que representa la cantidad de agua que se desea medir utilizando las dos cubetas. Cuando el usuario hace clic en el botón "Solve", el formulario se envía a "BucketController.php"

![](https://scontent-mia3-2.xx.fbcdn.net/v/t39.30808-6/346084754_718744100048310_8210255995372070090_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=0debeb&_nc_eui2=AeGuEIb4xNk6Q9hX6E56qHtGKQwLFT7TsrkpDAsVPtOyuRTmRLVKNz9re7_ldItDwyU&_nc_ohc=HjVgy8rFRtYAX-wrXtS&_nc_ht=scontent-mia3-2.xx&oh=00_AfByK0zcnNDqNnm82xkVZsCGLe8gfBrMfa37eRIqBlO6OA&oe=6460AB4E)

### BucketController.php

![](https://scontent-mia3-2.xx.fbcdn.net/v/t39.30808-6/346077851_940702780392035_831860367901078104_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=0debeb&_nc_eui2=AeHfNE9i2edql97ygk0rFWavscQt764u7-mxxC3vri7v6eYBJzH5_HCQNd8rmWWcbgY&_nc_ohc=RshyS2skbKcAX8E8QvL&_nc_ht=scontent-mia3-2.xx&oh=00_AfB5ZMEr8pXjL43q4m-GZGYAaqKtNW-wKyoCORsjqEPtKw&oe=6460930D)

Es un controlador recibe tres parámetros: el tamaño de dos cubetas de agua y el objetivo que se quiere alcanzar. El controlador llama al método "solve()" en el modelo "BucketModel" para resolver el problema y devuelve una respuesta. Si la solución se encontró, el controlador genera una tabla HTML que muestra los pasos necesarios para llegar a la solución. 

![](https://scontent-mia3-1.xx.fbcdn.net/v/t39.30808-6/345885714_200987249447528_213017434300599930_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=0debeb&_nc_eui2=AeHcPIebp9-vKkcgIxcVgIZ6ZXRbXIvHqUlldFtci8epSZkd6b5SX_jOENNjt0ayJek&_nc_ohc=7xc2XbriNLcAX9aUpzX&_nc_ht=scontent-mia3-1.xx&oh=00_AfCOujOTVTSkGGaLxqAe51Xrb_Q54AH2HXLRA-mCYiVZjQ&oe=6460285B)

Si no se encontró una solución, se muestra un mensaje indicando que no se pudo encontrar una solución.

![](https://scontent-mia3-1.xx.fbcdn.net/v/t39.30808-6/346076267_986416236119501_399683857455527418_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=0debeb&_nc_eui2=AeHDIy81dcqO9dU0za4HHv-hz5LOH24Kwf7Pks4fbgrB_o4xVu-uwQI0DABSTT8vdCc&_nc_ohc=Pw8ISyc0lqQAX8m3tNP&_nc_ht=scontent-mia3-1.xx&oh=00_AfCEx9sbdHZOFNu5TK2azNupXU5rP5k4ZMkdBuVb0oIYTg&oe=6460308E)


La solución del problema se logra a través del método "solve()" en el modelo "Bucket.php". En este modelo, se implementa la lógica del algoritmo que resuelve el problema.

### Bucket.php

![](https://scontent-mia3-1.xx.fbcdn.net/v/t39.30808-6/346265853_756554302578807_8019310225274835398_n.jpg?stp=dst-jpg_s552x414&_nc_cat=100&ccb=1-7&_nc_sid=0debeb&_nc_eui2=AeEu7YR5J5zs4MMXbDcWVbu_rd-DP_it2qCt34M_-K3aoAB5Smou8mGGhOVgUcy6hQk&_nc_ohc=bFTcjeUTQQMAX95AQS-&_nc_ht=scontent-mia3-1.xx&oh=00_AfD6uKhKS9tpbWbE33pRQ4vYbf4Qu0cq30d20vo6_3eO0w&oe=646094F4)
![](https://scontent-mia3-1.xx.fbcdn.net/v/t39.30808-6/346092731_129829983424296_8931304771957301946_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=0debeb&_nc_eui2=AeGhviIPKgwfB_VMITkuFxcfRV0q0oiWqvJFXSrSiJaq8t_Q_ghIUlmAkjNxlqSYtUw&_nc_ohc=CSCOowbo6loAX8RxSlS&_nc_ht=scontent-mia3-1.xx&oh=00_AfCHwWnEqPjgxOfHoWp3dlK_bXMHZN_ToVoSgNY86uehMw&oe=64601D48)

El código define una clase BucketModel que tiene un constructor que toma la capacidad de dos cubetaas y un nivel objetivo para una de ellas. También tiene un método solve que implementa un algoritmo de búsqueda en anchura para encontrar una solución al problema de llenar una cubeta con la capacidad dada mediante la combinación de operaciones de llenado, vaciado y vertido de las dos cubetas dados. El método devuelve un array con los pasos necesarios para llegar a la solución o un valor booleano falso si no se encuentra una solución.

Gracias por su tiempo