<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$sayisal_dogru=htmlspecialchars($_POST["sayisaldogru"]);
$sayisal_yanlis=htmlspecialchars($_POST["sayisalyanlis"]);
$sozel_dogru=htmlspecialchars($_POST["sozeldogru"]);
$sozel_yanlis=htmlspecialchars($_POST["sozelyanlis"]);
$obp=htmlspecialchars($_POST["obpnot"]);
$alan=htmlspecialchars($_POST["alan"]);
$yerlestinmi=htmlspecialchars($_POST["yerlestinmi"]);
$sayisal_net=$sayisal_dogru-($sayisal_yanlis/4);
$sozel_net=$sozel_dogru-($sozel_yanlis/4);
$sonuc=0;

    if($yerlestinmi=="1")
    {
        switch($alan)
       {
    case "1":
        $sonuc=($sayisal_net*3+250)+($sozel_net*0.6)+($obp*0.6);
        echo ("SAYİSAL PUANİNİNİZ = $sonuc");
        break;
    case "2":
        $sonuc=($sozel_net*3+120)+($sayisal_net*0.6)+($obp*0.6);
        echo ("SOZEL PUANİNİNİZ = $sonuc");
        break;
    case "3":
        $sonuc=(($sozel_net*1.8)+($sayisal_net*1.6)+($obp*0.6))+222;
        echo ("ESİT AGİRLİK PUANİNİNİZ = $sonuc");
        break;
     }
}
   elseif($yerlestinmi=="2")
   {
    switch($alan)
    {
    case "1":
        $sonuc=($sayisal_net*3+250)+($sozel_net*0.6)+($obp*0.45);
        echo ("SAYİSAL PUANİNİNİZ = $sonuc");
        break;
    case "2":
        $sonuc=($sozel_net*3+120)+($sayisal_net*0.6)+($obp*0.45);
        echo ("SOZEL PUANİNİNİZ = $sonuc");
        break;
    case "3":
        $sonuc=(($sozel_net*1.8)+($sayisal_net*1.6)+($obp*0.45))+222;
        echo ("ESİT AGİRLİK PUANİNİNİZ = $sonuc");
        break;
   }
}


}

?>
