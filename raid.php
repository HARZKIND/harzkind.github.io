<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Raids</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="assets/css/style.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
    <?php    
        $apiKey = '005500ccaab5466fa021277bae3e91f7';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.bungie.net/platform/Destiny/Manifest/InventoryItem/1274330687/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));

        $json = json_decode(curl_exec($ch));
        echo $json->Response->data->inventoryItem->itemName; //Gjallarhorn
    ?>
</body>

</html>
