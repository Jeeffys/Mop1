<?php
    
    function leverancier($id) {
        $query = mysql_query("SELECT * FROM leveranciers WHERE leverancier_id = '".$id."'");
        $res = mysql_fetch_array($query);
        
        return $res['leverancier_naam'];
    }
    
    function product_id($id) {
        $query = mysql_query("SELECT * FROM producten WHERE product_id = '".$id."'");
        $res = mysql_fetch_array($query);
        
        return $res['product_id'];
    }
    
    function product_naam($id) {
        $query = mysql_query("SELECT * FROM producten WHERE product_id = '".$id."'");
        $res = mysql_fetch_array($query);
        
        return $res['inhoud'];
    }
    
    function product_icon($id) {
        $query = mysql_query("SELECT * FROM vakken WHERE vak_id = '".$id."'");
        $res = mysql_fetch_array($query);
        $pallet = $res['pallet_id'];
        $query2 = mysql_query("SELECT * FROM pallets WHERE pallet_id = '".$pallet."'");
        $res2 = mysql_fetch_array($query2);
        $product = $res2['product_id'];
        $query3 = mysql_query("SELECT icon FROM producten WHERE product_id = '".$product."'");
        $res3 = mysql_fetch_array($query3);
        
        return $res3['icon'];
    }
?>