<?php
    $data = '{"Coords":[{"Accuracy":"65","Latitude":"53.277720488429026","Longitude":"-9.012038778269686","Timestamp":"Fri Jul 05 2013 11:59:34 GMT+0100 (IST)"},{"Accuracy":"65","Latitude":"53.277720488429026","Longitude":"-9.012038778269686","Timestamp":"Fri Jul 05 2013 11:59:34 GMT+0100 (IST)"},{"Accuracy":"65","Latitude":"53.27770755361785","Longitude":"-9.011979642121824","Timestamp":"Fri Jul 05 2013 12:02:09 GMT+0100 (IST)"},{"Accuracy":"65","Latitude":"53.27769091555766","Longitude":"-9.012051410095722","Timestamp":"Fri Jul 05 2013 12:02:17 GMT+0100 (IST)"},{"Accuracy":"65","Latitude":"53.27769091555766","Longitude":"-9.012051410095722","Timestamp":"Fri Jul 05 2013 12:02:17 GMT+0100 (IST)"}]}';

    $manage = json_decode($data, true);
    
    echo 'Before: <br>';
    print_r($manage);
    
    $manage['Coords'][] = Array(
        'Accuracy' => '90',
        'Latitude' => '53.277720488429026',
       'Longitude' => '-9.012038778269686',
       'Timestamp' => 'Fri Jul 05 2013 11:59:34 GMT+0100 (IST)'
        );
    
    echo '<br>After: <br>';
    print_r($manage);
    
?>