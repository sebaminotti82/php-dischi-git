<?php
 $genre =['All'];
 $cerca='';
$musicDb=[
    [
      'artista'=>'avril lavigne',
      'album'=>'let go',
      'anno'=>'2002',
      'genere'=>'rock',
      'poster'=>'https://www.virginradio.it/upload/let_go-1656497254377.jpg'
    ],
    [
      'artista'=>'paramore',
      'album'=>'paramore',
      'anno'=>'2013',
      'genere'=>'rock',
      'poster'=>'https://upload.wikimedia.org/wikipedia/en/e/eb/ParamoreParamore.png'
    ],
    [
      'artista'=>'francesco gabbani',
      'album'=>'viceversa',
      'anno'=>'2020',
      'genere'=>'pop',
      'poster'=>'https://m.media-amazon.com/images/I/61iO0wz0uCL._AC_SL1200_.jpg'
    ],
    [
      'artista'=>'sistem of a down',
      'album'=>'toxicity',
      'anno'=>'2001',
      'genere'=>'metal',
      'poster'=>'https://m.media-amazon.com/images/I/91o4-BvL0fL._AC_SY355_.jpg'
      
    ],
    [
      'artista'=>'Ludovico Einaudi',
      'album'=>'in a time lapse',
      'anno'=>'2013',
      'genere'=>'classica',
      'poster'=>'https://ponderosa.it/wp-content/uploads/2021/03/IN-A-TIME-LAPSE.jpeg'

    ],
    [
      'artista'=>'emanuele aloia',
      'album'=>'sindrome di stendhal',
      'anno'=>'2021',
      'genere'=>'italiana',
      'poster'=>'https://cdn.blogo.it/0VL4qO-B3aXI-UnR7eMr7nD1sjw=/1200x800/smart/https://www.blogo.it/app/uploads/sites/5/2021/03/emanuele-aloia.jpg'

    ],
    [
      'artista'=>'daftPunk ft pandaBear',
      'album'=>'RandomAccesMemory',
      'anno'=>'2013',
      'genere'=>'dance',
      'poster'=>'https://upload.wikimedia.org/wikipedia/en/a/a7/Random_Access_Memories.jpg',

    ],
    [
      'album'=>'Al Night Opera',
      'artista'=>'Queen',
      'poster'=>'https://m.media-amazon.com/images/I/51h786SuyIL._AC_.jpg',
      'anno'=>'1973',
       'genere'=>'rock'
   ],
   [
      'album'=>'Non Siamo Mica Gli Americani',
      'artista'=>'Vasco Rossi',
      'poster'=>'https://static.vascorossi.net/images/content/460567_29972_2_W1N_0_600_0_3933786/nonsiamomica.jpg',
      'anno'=>'1979',
      'genere'=>'pop'
   ],
   [
      'album'=>'Eifel 65',
      'artista'=>'Eifel 65',
      'poster'=>'https://i1.sndcdn.com/artworks-G661E61UDdWUdPbq-x9iDkA-t500x500.jpg',
      'anno'=>'2003',
      'genere'=>'dance'
   ],
];
  
  
foreach($musicDb as $disco){
  $tipo = $disco['genere'];
     if(! in_array($tipo,$genre) ){
      $genre[]= $tipo;
     } ;
    

};



?>

