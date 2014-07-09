<?php
$arr=['tanks'=>['Is-7','T-34-85','Tiger'],
      'aircraft'=>['I-153','P-51 Mustang','Fokker T.V'],
      'machinery'=>['vip'=>['Lamborghini Diablo'=>['Price'=>['7 500 000 ru','8 500 000 ru','9 500 000 ru'],],
                            'Mercedes-Benz'=>['Price'=>['7 000 000 ru','8 000 000 ru','9 000 000 ru'],],
                            'Porsche Cayenne'=>['Price'=>['6 192 416 ru','6 679 627 ru','7 400 000  ru'],],],
                    'premium'=>['Maserati Quattroporte','Maybach 62 Landaulet','Mercedes S 600 Pullman Guard'],
                    'standart'=>['Dodge Stratus ','Hyundai Sonata','Volkswagen Passat B6'],],
      'ships'=>['Frigata','Jacht,','Galion'],
];
function recursionMassiv($ar, $tabs='')
{
  foreach($ar as $key=>$el){
    if(!is_array($el)){ echo"\t$key=$el\n"; } 
    else {echo "$key=\n";recursionMassiv($el, $tabs . "\t");};    
  }
}
recursionMassiv($arr);
?>
