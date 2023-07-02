function myCALCULATOR($num01, $oper , $num02){
    $sum;
    switch(oper){
        case "add":
            $sum = $num01 +num02;
            break;
        case "sub":
            $sum = $num01 - $num02;
            break;
        default:
        $sum = "There was a error ";
        break;    
    }
}