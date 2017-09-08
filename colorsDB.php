<?php
/* STRUCTURE DES DONNEES
$colorsDatabases[
>couleur
>>article[
>>>section1[
>>>>>P multiples[].
];END s1
>>>section2[
>>>>>P multiples[].
].END s2
];END art
>>proprietes = [0, 1, 2];
>>prix = valeur.
];END cDB



*/

$colorsDatabases = array(

'black' => array('article' => array(
'section1' =>
array(/*ARRAY SECTION*/
"Le noir est un champ chromatique regroupant les teintes les plus obscures. Les objets noirs n'émettent ou ne reflètent qu'une part négligeable du spectre de la lumière visible. Le noir s'oppose ainsi à toutes les couleurs, mais surtout au blanc, la plus claire de toutes les couleurs. Certains auteurs, qui prennent le mot « couleur » dans un sens restreint, estiment que le noir n'est pas une couleur.",
"La culture occidentale associe principalement le noir au renoncement, involontaire dans le deuil ou volontaire dans la sobriété."/*END para*/
) /*END array section*/,
'section2' =>
array(/*ARRAY SECTION*/
"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at dui vitae purus lacinia pulvinar sed quis ex. Nunc ullamcorper velit eget justo euismod, ut aliquam lectus convallis. Nam vitae ante molestie, egestas orci sed, condimentum ipsum. Donec nec augue aliquet, cursus diam et, feugiat diam. Suspendisse nec metus et nibh pellentesque rutrum. Integer nec metus sed arcu efficitur pellentesque vitae condimentum erat. Donec eu ipsum id velit imperdiet venenatis. Aliquam diam mi, varius et ornare sed, laoreet vitae lectus. Sed ultrices egestas aliquet. Etiam sagittis eros justo, ut fermentum nunc molestie ut. Aliquam sit amet rhoncus est.",
"Phasellus ultrices commodo euismod. Etiam elementum quam vel nisi vulputate, et varius nulla facilisis. Aenean pharetra nunc ac metus mollis, id imperdiet nisl convallis. Curabitur vitae justo in felis finibus posuere. Etiam auctor a nunc eu rutrum. Sed arcu dui, suscipit non libero et, auctor sollicitudin felis. Cras malesuada ac magna quis finibus. Praesent id facilisis justo, et posuere quam.",
"Integer blandit lorem et velit accumsan porttitor. Maecenas eleifend, sapien vel consequat tempus, mauris augue laoreet nisi, et semper quam sem eu libero. Ut viverra pharetra elit tincidunt porttitor. Vestibulum ante ipsum, molestie sed orci nec, lobortis lacinia lacus. Nunc purus metus, accumsan quis ornare pretium, dictum a sapien. Nam eget urna ut felis accumsan vehicula eu eu ante. Pellentesque vitae libero est. Quisque felis metus, imperdiet eget elit non, fermentum fermentum est. Praesent eget euismod nibh. Sed consectetur congue justo, vel feugiat eros varius a. Donec dignissim sem consequat lorem iaculis scelerisque.",
"Fusce posuere bibendum nunc vel suscipit. Suspendisse non turpis eget enim mollis rutrum. Pellentesque id faucibus urna. Nulla felis quam, feugiat a venenatis ac, pretium gravida eros. Integer ultricies elit vitae enim pellentesque imperdiet. Sed tristique varius justo quis ultricies. Quisque placerat lobortis arcu eget consequat. Donec nec dolor metus.",
"Nulla consectetur vel quam et convallis. Vivamus vitae lectus ligula. Duis congue augue lectus, in porttitor purus semper id. Aliquam tincidunt dolor in vulputate imperdiet. Sed placerat neque in nulla suscipit consequat egestas a arcu. Morbi sollicitudin mattis sem ut volutpat. Vestibulum malesuada lectus at risus malesuada tincidunt. Sed commodo, nisi sit amet tempor pretium, neque tellus sagittis dui, tempus semper lacus risus vitae lectus. Praesent vitae est felis."/*END para*/
) /*END array section*/),

'proprietes' => array (0, 0, 0),'prix' => "20 000 ฿" /*END article*/),



'white' => array('article' => array(
 /*END array section*/
'section1' =>
array(/*ARRAY SECTION*/
"Le blanc est un champ chromatique caractérisé par une impression de forte luminosité, sans aucune teinte dominante.",
"Pour certains, inspirés des expériences de décomposition et de recomposition de la lumière par Isaac Newton, le blanc n'est pas une couleur, mais « c'est la teinte obtenue en mélangeant la lumière de toutes les couleurs ». Pour d'autres, et suivant les théories de Goethe, de Hering et de nombreux autres, le blanc opposé au noir est une des trois paires de couleurs pures qui orientent la perception visuelle.",
"Le blanc s'associe dans la culture occidentale à de nombreux concepts positifs du domaine du sacré. Symboliquement, il s'oppose autant à la souillure, quelle qu'en soit la nature, matérielle ou morale, qu'au noir et aux autres couleurs."/*END para*/
) /*END array section*/,
'section2' =>
array(/*ARRAY SECTION*/
"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at dui vitae purus lacinia pulvinar sed quis ex. Nunc ullamcorper velit eget justo euismod, ut aliquam lectus convallis. Nam vitae ante molestie, egestas orci sed, condimentum ipsum. Donec nec augue aliquet, cursus diam et, feugiat diam. Suspendisse nec metus et nibh pellentesque rutrum. Integer nec metus sed arcu efficitur pellentesque vitae condimentum erat. Donec eu ipsum id velit imperdiet venenatis. Aliquam diam mi, varius et ornare sed, laoreet vitae lectus. Sed ultrices egestas aliquet. Etiam sagittis eros justo, ut fermentum nunc molestie ut. Aliquam sit amet rhoncus est.",
"Phasellus ultrices commodo euismod. Etiam elementum quam vel nisi vulputate, et varius nulla facilisis. Aenean pharetra nunc ac metus mollis, id imperdiet nisl convallis. Curabitur vitae justo in felis finibus posuere. Etiam auctor a nunc eu rutrum. Sed arcu dui, suscipit non libero et, auctor sollicitudin felis. Cras malesuada ac magna quis finibus. Praesent id facilisis justo, et posuere quam.",
"Integer blandit lorem et velit accumsan porttitor. Maecenas eleifend, sapien vel consequat tempus, mauris augue laoreet nisi, et semper quam sem eu libero. Ut viverra pharetra elit tincidunt porttitor. Vestibulum ante ipsum, molestie sed orci nec, lobortis lacinia lacus. Nunc purus metus, accumsan quis ornare pretium, dictum a sapien. Nam eget urna ut felis accumsan vehicula eu eu ante. Pellentesque vitae libero est. Quisque felis metus, imperdiet eget elit non, fermentum fermentum est. Praesent eget euismod nibh. Sed consectetur congue justo, vel feugiat eros varius a. Donec dignissim sem consequat lorem iaculis scelerisque.",
"Fusce posuere bibendum nunc vel suscipit. Suspendisse non turpis eget enim mollis rutrum. Pellentesque id faucibus urna. Nulla felis quam, feugiat a venenatis ac, pretium gravida eros. Integer ultricies elit vitae enim pellentesque imperdiet. Sed tristique varius justo quis ultricies. Quisque placerat lobortis arcu eget consequat. Donec nec dolor metus.",
"Nulla consectetur vel quam et convallis. Vivamus vitae lectus ligula. Duis congue augue lectus, in porttitor purus semper id. Aliquam tincidunt dolor in vulputate imperdiet. Sed placerat neque in nulla suscipit consequat egestas a arcu. Morbi sollicitudin mattis sem ut volutpat. Vestibulum malesuada lectus at risus malesuada tincidunt. Sed commodo, nisi sit amet tempor pretium, neque tellus sagittis dui, tempus semper lacus risus vitae lectus. Praesent vitae est felis."/*END para*/
) /*END array section*/),

'proprietes' => array (255, 255, 255),'prix' => "50 000 ฿" /*END article*/),



'grey' => array('article' => array(
'section1' =>
array(/*ARRAY SECTION*/
"Le gris est un champ chromatique défini par la faiblesse ou l'absence de l'impression de couleur, dont l'intensité lumineuse est moindre que celle du blanc et supérieure à celle du noir.",
"Les images photographiques ne présentant aucune impression de couleur sont généralement dites en noir et blanc. En peinture, on parle de grisaille1. Le lavis d'encre de Chine sert fréquemment pour produire des monochromes gris."/*END para*/
) /*END array section*/,
'section2' =>
array(/*ARRAY SECTION*/
"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at dui vitae purus lacinia pulvinar sed quis ex. Nunc ullamcorper velit eget justo euismod, ut aliquam lectus convallis. Nam vitae ante molestie, egestas orci sed, condimentum ipsum. Donec nec augue aliquet, cursus diam et, feugiat diam. Suspendisse nec metus et nibh pellentesque rutrum. Integer nec metus sed arcu efficitur pellentesque vitae condimentum erat. Donec eu ipsum id velit imperdiet venenatis. Aliquam diam mi, varius et ornare sed, laoreet vitae lectus. Sed ultrices egestas aliquet. Etiam sagittis eros justo, ut fermentum nunc molestie ut. Aliquam sit amet rhoncus est.",
"Phasellus ultrices commodo euismod. Etiam elementum quam vel nisi vulputate, et varius nulla facilisis. Aenean pharetra nunc ac metus mollis, id imperdiet nisl convallis. Curabitur vitae justo in felis finibus posuere. Etiam auctor a nunc eu rutrum. Sed arcu dui, suscipit non libero et, auctor sollicitudin felis. Cras malesuada ac magna quis finibus. Praesent id facilisis justo, et posuere quam.",
"Integer blandit lorem et velit accumsan porttitor. Maecenas eleifend, sapien vel consequat tempus, mauris augue laoreet nisi, et semper quam sem eu libero. Ut viverra pharetra elit tincidunt porttitor. Vestibulum ante ipsum, molestie sed orci nec, lobortis lacinia lacus. Nunc purus metus, accumsan quis ornare pretium, dictum a sapien. Nam eget urna ut felis accumsan vehicula eu eu ante. Pellentesque vitae libero est. Quisque felis metus, imperdiet eget elit non, fermentum fermentum est. Praesent eget euismod nibh. Sed consectetur congue justo, vel feugiat eros varius a. Donec dignissim sem consequat lorem iaculis scelerisque.",
"Fusce posuere bibendum nunc vel suscipit. Suspendisse non turpis eget enim mollis rutrum. Pellentesque id faucibus urna. Nulla felis quam, feugiat a venenatis ac, pretium gravida eros. Integer ultricies elit vitae enim pellentesque imperdiet. Sed tristique varius justo quis ultricies. Quisque placerat lobortis arcu eget consequat. Donec nec dolor metus.",
"Nulla consectetur vel quam et convallis. Vivamus vitae lectus ligula. Duis congue augue lectus, in porttitor purus semper id. Aliquam tincidunt dolor in vulputate imperdiet. Sed placerat neque in nulla suscipit consequat egestas a arcu. Morbi sollicitudin mattis sem ut volutpat. Vestibulum malesuada lectus at risus malesuada tincidunt. Sed commodo, nisi sit amet tempor pretium, neque tellus sagittis dui, tempus semper lacus risus vitae lectus. Praesent vitae est felis."/*END para*/
) /*END array section*/),

'proprietes' => array (128, 128, 128),'prix' => "5 000 ฿" /*END article*/),



'red' => array('article' => array(
'section1' =>
array(/*ARRAY SECTION*/
"Le rouge est un champ chromatique regroupant les couleurs vives situées sur le cercle chromatique entre l'orange et les pourpres. Lavé de blanc, le rouge devient rose, sombre, il s'appelle brun. Opposé au vert, il forme un des contrastes qui, avec celui entre le bleu et le jaune et celui entre le noir et le blanc, orientent la perception visuelle. Un rouge, un vert et un bleu suffisent pour la synthèse additive des couleurs ; différentes nuances de rouge peuvent servir de couleur primaire. Pour la théorie ondulatoire de la lumière, la bande rouge est à l'extrémité de moins d'énergie du spectre visible, à la limite de l'infrarouge.",
"Certaines cultures classent les sensations visuelles entre le sombre, dont le maximum est le noir, le clair, dont le maximum est le blanc, et le coloré, correspondant aux couleurs vives, dont le maximum est le rouge. Toutes les autres couleurs se placent dans ces catégories fondamentales. Même dans la culture occidentale, où la classification des couleurs par celles de l'arc-en-ciel domine, le rouge vif a un statut particulier, dans la signalisation et dans la symbolique."/*END para*/
) /*END array section*/,
'section2' =>
array(/*ARRAY SECTION*/
"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at dui vitae purus lacinia pulvinar sed quis ex. Nunc ullamcorper velit eget justo euismod, ut aliquam lectus convallis. Nam vitae ante molestie, egestas orci sed, condimentum ipsum. Donec nec augue aliquet, cursus diam et, feugiat diam. Suspendisse nec metus et nibh pellentesque rutrum. Integer nec metus sed arcu efficitur pellentesque vitae condimentum erat. Donec eu ipsum id velit imperdiet venenatis. Aliquam diam mi, varius et ornare sed, laoreet vitae lectus. Sed ultrices egestas aliquet. Etiam sagittis eros justo, ut fermentum nunc molestie ut. Aliquam sit amet rhoncus est.",
"Phasellus ultrices commodo euismod. Etiam elementum quam vel nisi vulputate, et varius nulla facilisis. Aenean pharetra nunc ac metus mollis, id imperdiet nisl convallis. Curabitur vitae justo in felis finibus posuere. Etiam auctor a nunc eu rutrum. Sed arcu dui, suscipit non libero et, auctor sollicitudin felis. Cras malesuada ac magna quis finibus. Praesent id facilisis justo, et posuere quam.",
"Integer blandit lorem et velit accumsan porttitor. Maecenas eleifend, sapien vel consequat tempus, mauris augue laoreet nisi, et semper quam sem eu libero. Ut viverra pharetra elit tincidunt porttitor. Vestibulum ante ipsum, molestie sed orci nec, lobortis lacinia lacus. Nunc purus metus, accumsan quis ornare pretium, dictum a sapien. Nam eget urna ut felis accumsan vehicula eu eu ante. Pellentesque vitae libero est. Quisque felis metus, imperdiet eget elit non, fermentum fermentum est. Praesent eget euismod nibh. Sed consectetur congue justo, vel feugiat eros varius a. Donec dignissim sem consequat lorem iaculis scelerisque.",
"Fusce posuere bibendum nunc vel suscipit. Suspendisse non turpis eget enim mollis rutrum. Pellentesque id faucibus urna. Nulla felis quam, feugiat a venenatis ac, pretium gravida eros. Integer ultricies elit vitae enim pellentesque imperdiet. Sed tristique varius justo quis ultricies. Quisque placerat lobortis arcu eget consequat. Donec nec dolor metus.",
"Nulla consectetur vel quam et convallis. Vivamus vitae lectus ligula. Duis congue augue lectus, in porttitor purus semper id. Aliquam tincidunt dolor in vulputate imperdiet. Sed placerat neque in nulla suscipit consequat egestas a arcu. Morbi sollicitudin mattis sem ut volutpat. Vestibulum malesuada lectus at risus malesuada tincidunt. Sed commodo, nisi sit amet tempor pretium, neque tellus sagittis dui, tempus semper lacus risus vitae lectus. Praesent vitae est felis."/*END para*/
) /*END array section*/),

'proprietes' => array (255, 0, 0),'prix' => " 30 000 ฿" /*END article*/),



'orange' => array('article' => array(
'section1' =>
array(/*ARRAY SECTION*/
"L'orange est un champ chromatique de couleurs vives qui, sur le cercle chromatique, prennent place entre le rouge et le jaune.",
"Les couleurs orangées sont des couleurs chaudes ; les couleurs chaudes se définissent par proximité avec l'orange. Elles sont considérées comme stimulantes et provocantes."/*END para*/
) /*END array section*/,
'section2' =>
array(/*ARRAY SECTION*/
"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at dui vitae purus lacinia pulvinar sed quis ex. Nunc ullamcorper velit eget justo euismod, ut aliquam lectus convallis. Nam vitae ante molestie, egestas orci sed, condimentum ipsum. Donec nec augue aliquet, cursus diam et, feugiat diam. Suspendisse nec metus et nibh pellentesque rutrum. Integer nec metus sed arcu efficitur pellentesque vitae condimentum erat. Donec eu ipsum id velit imperdiet venenatis. Aliquam diam mi, varius et ornare sed, laoreet vitae lectus. Sed ultrices egestas aliquet. Etiam sagittis eros justo, ut fermentum nunc molestie ut. Aliquam sit amet rhoncus est.",
"Phasellus ultrices commodo euismod. Etiam elementum quam vel nisi vulputate, et varius nulla facilisis. Aenean pharetra nunc ac metus mollis, id imperdiet nisl convallis. Curabitur vitae justo in felis finibus posuere. Etiam auctor a nunc eu rutrum. Sed arcu dui, suscipit non libero et, auctor sollicitudin felis. Cras malesuada ac magna quis finibus. Praesent id facilisis justo, et posuere quam.",
"Integer blandit lorem et velit accumsan porttitor. Maecenas eleifend, sapien vel consequat tempus, mauris augue laoreet nisi, et semper quam sem eu libero. Ut viverra pharetra elit tincidunt porttitor. Vestibulum ante ipsum, molestie sed orci nec, lobortis lacinia lacus. Nunc purus metus, accumsan quis ornare pretium, dictum a sapien. Nam eget urna ut felis accumsan vehicula eu eu ante. Pellentesque vitae libero est. Quisque felis metus, imperdiet eget elit non, fermentum fermentum est. Praesent eget euismod nibh. Sed consectetur congue justo, vel feugiat eros varius a. Donec dignissim sem consequat lorem iaculis scelerisque.",
"Fusce posuere bibendum nunc vel suscipit. Suspendisse non turpis eget enim mollis rutrum. Pellentesque id faucibus urna. Nulla felis quam, feugiat a venenatis ac, pretium gravida eros. Integer ultricies elit vitae enim pellentesque imperdiet. Sed tristique varius justo quis ultricies. Quisque placerat lobortis arcu eget consequat. Donec nec dolor metus.",
"Nulla consectetur vel quam et convallis. Vivamus vitae lectus ligula. Duis congue augue lectus, in porttitor purus semper id. Aliquam tincidunt dolor in vulputate imperdiet. Sed placerat neque in nulla suscipit consequat egestas a arcu. Morbi sollicitudin mattis sem ut volutpat. Vestibulum malesuada lectus at risus malesuada tincidunt. Sed commodo, nisi sit amet tempor pretium, neque tellus sagittis dui, tempus semper lacus risus vitae lectus. Praesent vitae est felis."/*END para*/
) /*END array section*/),

'proprietes' => array (255, 156, 0),'prix' => "30 000 ฿" /*END article*/),



'yellow' => array('article' => array(
'section1' =>
array(/*ARRAY SECTION*/
"Le jaune est un champ chromatique correspondant à des couleurs claires situées entre l'orange et le vert. Une des trois couleurs primaires de la synthèse soustractive des couleurs est un jaune.",
"En héraldique, le jaune s'appelle or."/*END para*/
) /*END array section*/,
'section2' =>
array(/*ARRAY SECTION*/
"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at dui vitae purus lacinia pulvinar sed quis ex. Nunc ullamcorper velit eget justo euismod, ut aliquam lectus convallis. Nam vitae ante molestie, egestas orci sed, condimentum ipsum. Donec nec augue aliquet, cursus diam et, feugiat diam. Suspendisse nec metus et nibh pellentesque rutrum. Integer nec metus sed arcu efficitur pellentesque vitae condimentum erat. Donec eu ipsum id velit imperdiet venenatis. Aliquam diam mi, varius et ornare sed, laoreet vitae lectus. Sed ultrices egestas aliquet. Etiam sagittis eros justo, ut fermentum nunc molestie ut. Aliquam sit amet rhoncus est.",
"Phasellus ultrices commodo euismod. Etiam elementum quam vel nisi vulputate, et varius nulla facilisis. Aenean pharetra nunc ac metus mollis, id imperdiet nisl convallis. Curabitur vitae justo in felis finibus posuere. Etiam auctor a nunc eu rutrum. Sed arcu dui, suscipit non libero et, auctor sollicitudin felis. Cras malesuada ac magna quis finibus. Praesent id facilisis justo, et posuere quam.",
"Integer blandit lorem et velit accumsan porttitor. Maecenas eleifend, sapien vel consequat tempus, mauris augue laoreet nisi, et semper quam sem eu libero. Ut viverra pharetra elit tincidunt porttitor. Vestibulum ante ipsum, molestie sed orci nec, lobortis lacinia lacus. Nunc purus metus, accumsan quis ornare pretium, dictum a sapien. Nam eget urna ut felis accumsan vehicula eu eu ante. Pellentesque vitae libero est. Quisque felis metus, imperdiet eget elit non, fermentum fermentum est. Praesent eget euismod nibh. Sed consectetur congue justo, vel feugiat eros varius a. Donec dignissim sem consequat lorem iaculis scelerisque.",
"Fusce posuere bibendum nunc vel suscipit. Suspendisse non turpis eget enim mollis rutrum. Pellentesque id faucibus urna. Nulla felis quam, feugiat a venenatis ac, pretium gravida eros. Integer ultricies elit vitae enim pellentesque imperdiet. Sed tristique varius justo quis ultricies. Quisque placerat lobortis arcu eget consequat. Donec nec dolor metus.",
"Nulla consectetur vel quam et convallis. Vivamus vitae lectus ligula. Duis congue augue lectus, in porttitor purus semper id. Aliquam tincidunt dolor in vulputate imperdiet. Sed placerat neque in nulla suscipit consequat egestas a arcu. Morbi sollicitudin mattis sem ut volutpat. Vestibulum malesuada lectus at risus malesuada tincidunt. Sed commodo, nisi sit amet tempor pretium, neque tellus sagittis dui, tempus semper lacus risus vitae lectus. Praesent vitae est felis."/*END para*/
) /*END array section*/),

'proprietes' => array (255, 255, 0),'prix' => "20 000 ฿" /*END article*/),



'green' => array('article' => array(
'section1' =>
array(/*ARRAY SECTION*/
"Le vert est un champ chromatique regroupant les couleurs situées sur le cercle chromatique entre le jaune et le bleu. Contrairement à d'autres couleurs, qui changent de nom quand elles sont lavées de blanc ou rabattues avec du noir, comme le rouge qui devient rose ou brun, le vert conserve son nom, vert pâle ou vert foncé, vert vif ou vert grisâtre.",
"Le vert dû à la chlorophylle est la couleur de la plupart des feuillages de la végétation."/*END para*/
) /*END array section*/,
'section2' =>
array(/*ARRAY SECTION*/
"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at dui vitae purus lacinia pulvinar sed quis ex. Nunc ullamcorper velit eget justo euismod, ut aliquam lectus convallis. Nam vitae ante molestie, egestas orci sed, condimentum ipsum. Donec nec augue aliquet, cursus diam et, feugiat diam. Suspendisse nec metus et nibh pellentesque rutrum. Integer nec metus sed arcu efficitur pellentesque vitae condimentum erat. Donec eu ipsum id velit imperdiet venenatis. Aliquam diam mi, varius et ornare sed, laoreet vitae lectus. Sed ultrices egestas aliquet. Etiam sagittis eros justo, ut fermentum nunc molestie ut. Aliquam sit amet rhoncus est.",
"Phasellus ultrices commodo euismod. Etiam elementum quam vel nisi vulputate, et varius nulla facilisis. Aenean pharetra nunc ac metus mollis, id imperdiet nisl convallis. Curabitur vitae justo in felis finibus posuere. Etiam auctor a nunc eu rutrum. Sed arcu dui, suscipit non libero et, auctor sollicitudin felis. Cras malesuada ac magna quis finibus. Praesent id facilisis justo, et posuere quam.",
"Integer blandit lorem et velit accumsan porttitor. Maecenas eleifend, sapien vel consequat tempus, mauris augue laoreet nisi, et semper quam sem eu libero. Ut viverra pharetra elit tincidunt porttitor. Vestibulum ante ipsum, molestie sed orci nec, lobortis lacinia lacus. Nunc purus metus, accumsan quis ornare pretium, dictum a sapien. Nam eget urna ut felis accumsan vehicula eu eu ante. Pellentesque vitae libero est. Quisque felis metus, imperdiet eget elit non, fermentum fermentum est. Praesent eget euismod nibh. Sed consectetur congue justo, vel feugiat eros varius a. Donec dignissim sem consequat lorem iaculis scelerisque.",
"Fusce posuere bibendum nunc vel suscipit. Suspendisse non turpis eget enim mollis rutrum. Pellentesque id faucibus urna. Nulla felis quam, feugiat a venenatis ac, pretium gravida eros. Integer ultricies elit vitae enim pellentesque imperdiet. Sed tristique varius justo quis ultricies. Quisque placerat lobortis arcu eget consequat. Donec nec dolor metus.",
"Nulla consectetur vel quam et convallis. Vivamus vitae lectus ligula. Duis congue augue lectus, in porttitor purus semper id. Aliquam tincidunt dolor in vulputate imperdiet. Sed placerat neque in nulla suscipit consequat egestas a arcu. Morbi sollicitudin mattis sem ut volutpat. Vestibulum malesuada lectus at risus malesuada tincidunt. Sed commodo, nisi sit amet tempor pretium, neque tellus sagittis dui, tempus semper lacus risus vitae lectus. Praesent vitae est felis."/*END para*/
) /*END array section*/),

'proprietes' => array (0, 255, 0),'prix' => "20 000 ฿" /*END article*/),



'blue' => array('article' => array(
'section1' =>
array(/*ARRAY SECTION*/
"Le bleu est un champ chromatique, regroupant les teintes rappelant celles du ciel ou de la mer par temps claira.",
"On rencontre des pierres, des oiseaux, des fleurs et des papillons bleus, mais les matières bleues sont moins fréquentes dans la nature que les vertes, les rouges et les jaunes."/*END para*/
) /*END array section*/,
'section2' =>
array(/*ARRAY SECTION*/
"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at dui vitae purus lacinia pulvinar sed quis ex. Nunc ullamcorper velit eget justo euismod, ut aliquam lectus convallis. Nam vitae ante molestie, egestas orci sed, condimentum ipsum. Donec nec augue aliquet, cursus diam et, feugiat diam. Suspendisse nec metus et nibh pellentesque rutrum. Integer nec metus sed arcu efficitur pellentesque vitae condimentum erat. Donec eu ipsum id velit imperdiet venenatis. Aliquam diam mi, varius et ornare sed, laoreet vitae lectus. Sed ultrices egestas aliquet. Etiam sagittis eros justo, ut fermentum nunc molestie ut. Aliquam sit amet rhoncus est.",
"Phasellus ultrices commodo euismod. Etiam elementum quam vel nisi vulputate, et varius nulla facilisis. Aenean pharetra nunc ac metus mollis, id imperdiet nisl convallis. Curabitur vitae justo in felis finibus posuere. Etiam auctor a nunc eu rutrum. Sed arcu dui, suscipit non libero et, auctor sollicitudin felis. Cras malesuada ac magna quis finibus. Praesent id facilisis justo, et posuere quam.",
"Integer blandit lorem et velit accumsan porttitor. Maecenas eleifend, sapien vel consequat tempus, mauris augue laoreet nisi, et semper quam sem eu libero. Ut viverra pharetra elit tincidunt porttitor. Vestibulum ante ipsum, molestie sed orci nec, lobortis lacinia lacus. Nunc purus metus, accumsan quis ornare pretium, dictum a sapien. Nam eget urna ut felis accumsan vehicula eu eu ante. Pellentesque vitae libero est. Quisque felis metus, imperdiet eget elit non, fermentum fermentum est. Praesent eget euismod nibh. Sed consectetur congue justo, vel feugiat eros varius a. Donec dignissim sem consequat lorem iaculis scelerisque.",
"Fusce posuere bibendum nunc vel suscipit. Suspendisse non turpis eget enim mollis rutrum. Pellentesque id faucibus urna. Nulla felis quam, feugiat a venenatis ac, pretium gravida eros. Integer ultricies elit vitae enim pellentesque imperdiet. Sed tristique varius justo quis ultricies. Quisque placerat lobortis arcu eget consequat. Donec nec dolor metus.",
"Nulla consectetur vel quam et convallis. Vivamus vitae lectus ligula. Duis congue augue lectus, in porttitor purus semper id. Aliquam tincidunt dolor in vulputate imperdiet. Sed placerat neque in nulla suscipit consequat egestas a arcu. Morbi sollicitudin mattis sem ut volutpat. Vestibulum malesuada lectus at risus malesuada tincidunt. Sed commodo, nisi sit amet tempor pretium, neque tellus sagittis dui, tempus semper lacus risus vitae lectus. Praesent vitae est felis."/*END para*/
) /*END array section*/),

'proprietes' => array (0, 0, 255),'prix' => "30 000 ฿" /*END article*/),



'violet' => array('article' =>  array(
'section1' =>
array(/*ARRAY SECTION*/
"Le violet est un champ chromatique qui désigne des couleurs situées sur le cercle chromatique entre les pourpres et les bleus."/*END para*/
) /*END array section*/,
'section2' =>
array(/*ARRAY SECTION*/
"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at dui vitae purus lacinia pulvinar sed quis ex. Nunc ullamcorper velit eget justo euismod, ut aliquam lectus convallis. Nam vitae ante molestie, egestas orci sed, condimentum ipsum. Donec nec augue aliquet, cursus diam et, feugiat diam. Suspendisse nec metus et nibh pellentesque rutrum. Integer nec metus sed arcu efficitur pellentesque vitae condimentum erat. Donec eu ipsum id velit imperdiet venenatis. Aliquam diam mi, varius et ornare sed, laoreet vitae lectus. Sed ultrices egestas aliquet. Etiam sagittis eros justo, ut fermentum nunc molestie ut. Aliquam sit amet rhoncus est.",
"Phasellus ultrices commodo euismod. Etiam elementum quam vel nisi vulputate, et varius nulla facilisis. Aenean pharetra nunc ac metus mollis, id imperdiet nisl convallis. Curabitur vitae justo in felis finibus posuere. Etiam auctor a nunc eu rutrum. Sed arcu dui, suscipit non libero et, auctor sollicitudin felis. Cras malesuada ac magna quis finibus. Praesent id facilisis justo, et posuere quam.",
"Integer blandit lorem et velit accumsan porttitor. Maecenas eleifend, sapien vel consequat tempus, mauris augue laoreet nisi, et semper quam sem eu libero. Ut viverra pharetra elit tincidunt porttitor. Vestibulum ante ipsum, molestie sed orci nec, lobortis lacinia lacus. Nunc purus metus, accumsan quis ornare pretium, dictum a sapien. Nam eget urna ut felis accumsan vehicula eu eu ante. Pellentesque vitae libero est. Quisque felis metus, imperdiet eget elit non, fermentum fermentum est. Praesent eget euismod nibh. Sed consectetur congue justo, vel feugiat eros varius a. Donec dignissim sem consequat lorem iaculis scelerisque.",
"Fusce posuere bibendum nunc vel suscipit. Suspendisse non turpis eget enim mollis rutrum. Pellentesque id faucibus urna. Nulla felis quam, feugiat a venenatis ac, pretium gravida eros. Integer ultricies elit vitae enim pellentesque imperdiet. Sed tristique varius justo quis ultricies. Quisque placerat lobortis arcu eget consequat. Donec nec dolor metus.",
"Nulla consectetur vel quam et convallis. Vivamus vitae lectus ligula. Duis congue augue lectus, in porttitor purus semper id. Aliquam tincidunt dolor in vulputate imperdiet. Sed placerat neque in nulla suscipit consequat egestas a arcu. Morbi sollicitudin mattis sem ut volutpat. Vestibulum malesuada lectus at risus malesuada tincidunt. Sed commodo, nisi sit amet tempor pretium, neque tellus sagittis dui, tempus semper lacus risus vitae lectus. Praesent vitae est felis."/*END para*/
) /*END array section*/),

'proprietes' => array (238, 130, 238),'prix' => "5 000 ฿" /*END article*/)

); //END BDD

