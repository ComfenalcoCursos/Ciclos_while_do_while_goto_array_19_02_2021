


<?php






    $papitas = (int) 10;
    while($papitas){
        if($papitas<=10){
            $papitas--;
            $cadena = (string) <<<FIN
        Me comi $papitas <br>
FIN;
        print_r($cadena);
            continue;
        }
    }






//     $papitas = (int) 10;
//     while(true){
//         if($papitas==0){
//             break;
//         }
//         $cadena = (string) <<<FIN
//         Me comi $papitas <br>
// FIN;
//         print_r($cadena);
//         $papitas--;
//     }







//     $papitas = (int) 11;
//     llamar:
//     $papitas--;
//     while($papitas){
//         $cadena = (string) <<<FIN
//         Me comi $papitas <br>
// FIN;
//         print_r($cadena);
//         goto llamar;
//     }






//     $papitas = 10;
//     while($papitas==true){
//         $papitas--;
//         $cadena = (string) <<<FIN
//         Me comi $papitas <br>
// FIN;
//         print_r($cadena);
//     }









    // $lista = (array) ["Programar",23, true,"Netflix", function(){ return 'Hola mundo :V';}];

    // $lista2 = (array) ['Pasatiempo1' => "Programar", 'Pasatiempo2' => "Netflix", 'saludar' => function(){ return 'Hola mundo :V';} ];

    // for ($i=0; $i < count($lista); $i++) { 
    //     if(gettype($lista[$i])=="object"){
    //         echo $lista[$i]();
    //     }
    // }


    // foreach ($lista as $key => $value) {
    //     if(gettype($value)=="object"){
    //         echo $value();
    //     }
        
    // }
?>