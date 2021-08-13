<?php

  include('./src/core.php');
  $MP = new SAPIDK_MP\Action(); 

//   //Listar tiendas
// 	 $qrCaja=  $MP->StoreList(804766238, 30, 0, "Your_ACCES_TOKEN");
//   var_dump($qrCaja);


//   Crear suscripcion
//   $data = array (

//     'reason' => 'Nombre_suscripcion',
//     'collector_id' => Ultimosdigitos_acces-token,
//     'status' => 'active',
//     'back_url' => 'https://www.google.com.ar/',
//     'external_reference' => 1212, // referencia interna
//     'payer_email' => "email-payer@email.com",
//     'auto_recurring' => array(
//         'frequency' => 30, // frecuencia de cobro
//         'frequency_type' => "days", // se cobraria cada dia o mes segun frequency
//         'transaction_amount' => 10, // monto a cobrar
//         'currency_id' => "ARS", // moneda con la que se cobrar
//         'debit_date' => 1, // que dia del mes se cobra

//     ),

// );

// $datos = $MP->RecurrentCreator($data, "Your_ACCES_TOKEN");
// var_dump($datos);



//Listar IPN
// var_dump($MP->IPN("Ultimosdigitos_acces-token", "Your_ACCES_TOKEN")); 


//Listar movimientos de una cuenta
// $movimientos=$MP->PaymentList(30, 0, "Your_ACCES_TOKEN");
// var_dump($movimientos);


?>