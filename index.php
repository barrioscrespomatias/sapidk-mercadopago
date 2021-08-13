<?php

  include('./src/core.php');
  $MP = new SAPIDK_MP\Action(); 

//   //Listar tiendas
// 	$qrCaja=  $MP->StoreList(804766238, 30, 0, "Your_ACCES_TOKEN");
//   var_dump($qrCaja);


  //Crear tienda

  // $data = array (

	// 	'name' => 'Sucursal Instore',
	// 	'external_id' => '1234',
	// 	'business_hours' =>  array (
	// 		'monday' => array (
	// 			0 =>  array (
	// 				'open' => '08:00',
	// 				'close' => '12:00',
	// 			),
	// 			1 =>  array (
	// 				'open' => '14:00',
	// 				'close' => '18:00',
	// 			),
	// 		),

	// 		'tuesday' => array (
	// 		  	0 => array (
	// 		        'open' => '09:00',
	// 		        'close' => '18:00',
	// 		    ),
	// 		),
	// 	),
	// 	'location' =>  array (
	// 		'street_number' => '3039',
	// 		'street_name' => 'Caseros',
	// 		'city_name' => 'Belgrano',
	// 		'state_name' => 'Capital Federal',
	// 		'latitude' => -32.8897322,
	// 		'longitude' => -68.8443275,
	// 		'reference' => '3er Piso',
	// 	),

	// );



	// $tiendaNueva=$MP->StoreNew($data, ULTIMOS_9_DIGITOS_Your_ACCES_TOKEN, "Your_ACCES_TOKEN");
  // var_dump($tiendaNueva);



  //Crear Caja
  // $data = array (

	// 	'name' => "NombredeQR/Caja", 
	// 	'fixed_amount' => false,  // si es false EL CLIENTE INGRESA EL MONTO, si es true el monto lo indicamos nosotros
	// 	// 'store_id' => "idstore",  Identificador de la sucursal a la que pertenece el Punto de Venta, es omitible
	// 	'external_id' => mt_rand(3,20000), // Identificador único de la caja definido por el integrador, le recomendamos usar mt_rand(3,20000) 

	// );


	// $MP->NewBox($data, "Your_ACCES_TOKEN");



  // Suscripcion
//   $data = array (

//     'reason' => 'Nombre_suscripcion',
//     'collector_id' => ULTIMOS_9_DIGITOS_Your_ACCES_TOKEN,
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
// var_dump($MP->IPN("ULTIMOS_9_DIGITOS_ACCES_TOKEN", "Your_ACCES_TOKEN")); 


// $movimientos = $MP->PaymentList(30, 0, "Your_ACCES_TOKEN");
// var_dump($movimientos);



// $movimientos=$MP->PaymentList(30, 0, "Your_ACCES_TOKEN");
// var_dump($movimientos);


?>