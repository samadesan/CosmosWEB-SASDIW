<?php
/**
 * CosmosWEB - Base de datos de objetos celestes
 * Este archivo contiene la información detallada de los planetas para su uso dinámico.
 */

$planetas = [
    "mercurio" => [
        "nombre" => "Mercurio",
        "tipo" => "Planeta Rocoso",
        "distancia" => "58 millones de km",
        "descripcion" => "Es el mundo de los extremos. Al ser el planeta más cercano al Sol, carece de una atmósfera sustancial que retenga el calor, lo que provoca las mayores oscilaciones térmicas del sistema solar: desde los 430°C al sol hasta los -180°C en la sombra. Su superficie, geológicamente muerta y plagada de cráteres, conserva las cicatrices de miles de millones de años de impactos de asteroides, asemejándose mucho a nuestra Luna.",
        "gif" => "assets/img/mercurio.gif",
        "datos" => [
            "Gravedad: 3.7 m/s²",
            "Atmósfera: Exosfera delgada (Oxígeno, Sodio, Hidrógeno)",
            "Curiosidad: Un día en Mercurio dura 59 días terrestres, pero su año solo 88 días."
        ]
    ],
    "venus" => [
        "nombre" => "Venus",
        "tipo" => "Planeta Rocoso",
        "distancia" => "108 millones de km",
        "descripcion" => "A menudo llamado el 'gemelo malvado' de la Tierra por su tamaño similar, Venus es el planeta más caliente de nuestro sistema. Su densa atmósfera de dióxido de carbono atrapa el calor en un efecto invernadero desbocado, generando presiones aplastantes equivalentes a estar a 900 metros bajo el océano. En Venus, el Sol sale por el oeste y se pone por el este debido a su rotación retrógrada.",
        "gif" => "assets/img/venus.gif",
        "datos" => [
            "Temperatura media: 462°C constantes",
            "Atmósfera: 96% Dióxido de Carbono",
            "Curiosidad: Gira tan lento sobre su eje que su día es más largo que su año."
        ]
    ],
    "tierra" => [
        "nombre" => "Tierra",
        "tipo" => "Planeta Rocoso (Habitable)",
        "distancia" => "150 millones de km",
        "descripcion" => "El 'Punto Azul Pálido'. Es el único mundo conocido con agua líquida estable en su superficie y una atmósfera rica en oxígeno que permite la vida compleja. Nuestra magnetosfera nos protege de la radiación solar dañina, mientras que la Luna estabiliza nuestra oscilación axial, permitiendo un clima predecible y estaciones marcadas durante milenios.",
        "gif" => "assets/img/tierra.gif",
        "datos" => [
            "Población: ~8 mil millones de humanos",
            "Composición: 71% agua, 29% tierra",
            "Curiosidad: Es el único planeta que no tiene nombre de un dios griego o romano."
        ]
    ],
    "marte" => [
        "nombre" => "Marte",
        "tipo" => "Planeta Rocoso",
        "distancia" => "228 millones de km",
        "descripcion" => "El Planeta Rojo debe su color al óxido de hierro en su superficie. Es un mundo desértico y frío que alberga el Monte Olimpo, el volcán más grande del sistema solar, y Valles Marineris, un cañón que dejaría pequeño al Gran Cañón del Colorado. Evidencias geológicas sugieren que en el pasado Marte fue un mundo húmedo con ríos y posiblemente océanos.",
        "gif" => "assets/img/marte.gif",
        "datos" => [
            "Satélites: 2 (Fobos y Deimos)",
            "Atmósfera: Delgada, mayormente CO2",
            "Curiosidad: En Marte, tu peso sería apenas un 38% de lo que es en la Tierra."
        ]
    ],
    "jupiter" => [
        "nombre" => "Júpiter",
        "tipo" => "Gigante Gaseoso",
        "distancia" => "778 millones de km",
        "descripcion" => "El rey de los planetas. Este gigante gaseoso posee una masa que duplica la de todos los demás planetas juntos. Actúa como un aspirador cósmico, protegiendo a los planetas interiores al desviar cometas con su inmensa gravedad. Su Gran Mancha Roja es un anticiclón masivo que ha persistido durante al menos 300 años y es lo suficientemente grande como para tragar a la Tierra entera.",
        "gif" => "assets/img/jupiter.gif",
        "datos" => [
            "Masa: 318 veces la de la Tierra",
            "Lunas principales: Ío, Europa, Ganimedes y Calisto",
            "Curiosidad: Posee el campo magnético más potente de todos los planetas."
        ]
    ],
    "saturno" => [
        "nombre" => "Saturno",
        "tipo" => "Gigante Gaseoso",
        "distancia" => "1.400 millones de km",
        "descripcion" => "Famoso por su espectacular sistema de anillos compuestos por miles de millones de fragmentos de hielo y roca. Saturno es el planeta menos denso; si encontráramos un océano lo suficientemente grande, ¡flotaría! Sus vientos alcanzan los 1.800 km/h y en su polo norte existe una extraña tormenta permanente con forma de hexágono perfecto.",
        "gif" => "assets/img/saturno.gif",
        "datos" => [
            "Densidad: Menor que la del agua",
            "Anillos: 7 grupos principales",
            "Curiosidad: Su luna Titán es la única con una atmósfera densa y lagos de metano."
        ]
    ],
    "urano" => [
        "nombre" => "Urano",
        "tipo" => "Gigante de Hielo",
        "distancia" => "2.900 millones de km",
        "descripcion" => "Un gigante de hielo que se distingue por su inclinación extrema: gira prácticamente 'de lado', lo que provoca estaciones que duran 21 años. Su color azul verdoso proviene del metano en su atmósfera superior, que absorbe la luz roja. Es un mundo de nubes de diamantes y temperaturas gélidas, rodeado por 13 anillos tenues y 27 lunas pequeñas.",
        "gif" => "assets/img/urano.gif",
        "datos" => [
            "Inclinación axial: 98 grados",
            "Descubrimiento: Primer planeta encontrado con un telescopio (1781)",
            "Curiosidad: Sus vientos pueden alcanzar los 900 km/h."
        ]
    ],
    "neptuno" => [
        "nombre" => "Neptuno",
        "tipo" => "Gigante de Hielo",
        "distancia" => "4.500 millones de km",
        "descripcion" => "El planeta más lejano y oscuro. Es un gigante de hielo azotado por los vientos más veloces del sistema solar, superando los 2.000 km/h. Se encuentra tan lejos que tarda 165 años en dar una sola vuelta al Sol. Fue el primer planeta cuya existencia se predijo mediante cálculos matemáticos antes de ser observado visualmente.",
        "gif" => "assets/img/neptuno.gif",
        "datos" => [
            "Distancia: 30 veces más lejos del Sol que la Tierra",
            "Color: Azul intenso debido al metano",
            "Curiosidad: Su luna Tritón gira en dirección opuesta al planeta."
        ]
    ],
    "ceres" => [
        "nombre" => "Ceres",
        "tipo" => "Planeta Enano (Cinturón de Asteroides)",
        "distancia" => "414 millones de km",
        "descripcion" => "Es el objeto más grande del cinturón de asteroides entre Marte y Júpiter y el único planeta enano situado en el sistema solar interior. Ceres es un mundo misterioso que contiene grandes cantidades de hielo de agua y curiosos puntos brillantes de sal en su cráter Occator, lo que sugiere actividad geológica reciente.",
        "gif" => "assets/img/ceres.gif",
        "datos" => [
            "Composición: Roca y hielo",
            "Misión destacada: Sonda Dawn (NASA)",
            "Curiosidad: Representa aproximadamente un tercio de la masa total del cinturón de asteroides."
        ]
    ],
    "pluton" => [
        "nombre" => "Plutón",
        "tipo" => "Planeta Enano (Cinturón de Kuiper)",
        "distancia" => "5.900 millones de km",
        "descripcion" => "Reclasificado en 2006, Plutón es el rey del Cinturón de Kuiper. Es un mundo complejo con montañas de hielo de agua, glaciares de nitrógeno y una tenue atmósfera. Su característica más famosa es una vasta llanura en forma de corazón llamada Tombaugh Regio. Posee cinco lunas, siendo Caronte tan grande que ambos orbitan alrededor de un punto común en el espacio.",
        "gif" => "assets/img/pluton.gif",
        "datos" => [
            "Satélites: 5 (Caronte, Nix, Hidra, Cerbero y Estigia)",
            "Temperatura: -229°C media",
            "Curiosidad: Un año en Plutón dura 248 años terrestres."
        ]
    ],
    "haumea" => [
        "nombre" => "Haumea",
        "tipo" => "Planeta Enano (Cinturón de Kuiper)",
        "distancia" => "6.450 millones de km",
        "descripcion" => "Es uno de los objetos más extraños del sistema solar. Debido a su rotación extremadamente rápida (un día dura menos de 4 horas), su forma se ha deformado hasta parecer un elipsoide o un balón de rugby. Haumea es casi tan brillante como la nieve fresca y es el primer objeto del Cinturón de Kuiper en el que se ha confirmado la presencia de anillos.",
        "gif" => "assets/img/haumea.gif",
        "datos" => [
            "Forma: Elipsoide (alargada)",
            "Satélites: 2 (Hiʻiaka y Namaka)",
            "Curiosidad: Es el cuerpo grande que más rápido gira en nuestro sistema."
        ]
    ],
    "makemake" => [
        "nombre" => "Makemake",
        "tipo" => "Planeta Enano (Cinturón de Kuiper)",
        "distancia" => "6.850 millones de km",
        "descripcion" => "Descubierto poco después de la Pascua de 2005, este mundo helado es el segundo objeto más brillante del Cinturón de Kuiper después de Plutón. Carece de una atmósfera significativa y su superficie está cubierta de metano y etano congelado, lo que le otorga un tono rojizo muy característico. Es un mundo solitario con un solo satélite pequeño detectado.",
        "gif" => "assets/img/makemake.gif",
        "datos" => [
            "Satélites: 1 (S/2015 (136472) 1)",
            "Temperatura: -239°C (extrema)",
            "Curiosidad: Tarda 305 años terrestres en completar una órbita al Sol."
        ]
    ],
    "eris" => [
        "nombre" => "Eris",
        "tipo" => "Planeta Enano (Disco Disperso)",
        "distancia" => "10.125 millones de km",
        "descripcion" => "Eris es el planeta enano más masivo del sistema solar. Su descubrimiento fue el catalizador que llevó a la comunidad científica a redefinir qué es un planeta. Se encuentra tan lejos que su atmósfera se congela y cae sobre la superficie como nieve de nitrógeno cuando se aleja del Sol. Es un mundo gélido y rocoso, casi del mismo tamaño que Plutón.",
        "gif" => "assets/img/eris.gif",
        "datos" => [
            "Satélites: 1 (Disnomia)",
            "Masa: 27% mayor que la de Plutón",
            "Curiosidad: Está tan lejos que la luz del Sol tarda más de 9 horas en llegar a él."
        ]
    ]
];