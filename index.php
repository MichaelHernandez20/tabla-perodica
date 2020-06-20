<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programacion Web</title>
    <link rel="stylesheet" type="teit/css" href="assets\css\style.css">
</head>
<body>
<h1>Tabla Periódica</h1>

<?php   $valor = array(array(
        '1 <br> H <br> hirogeno', '2 <br> He <br> Helio',
        '3 <br> Li <br> Litio', '4 <br> Br <br> Berillio',
        '5 <br> B <br> Boro', '6 <br> C <br> Carbono',
        '7 <br> N <br> Nitrogeno', '8 <br> O <br> Oiigeno',
        '9 <br> F <br> Fluor', '10 <br> Ne <br> Neon',
        '11 <br> Na <br> Sodio', '12 <br> Mg <br> Magnecio',
        '13 <br> Al <br> Alumnio', '14 <br> Si <br> Silicio',
        '15 <br> P <br> Fosforo', '16 <br> S <br> Azufre',
        '17 <br> Cl <br> Cloro', '18 <br> Ar <br> Argon',
        '19 <br> K <br> Potasio', '20 <br> Ca <br> Calcio',
        '21 <br> Sc <br> Escadio', '22 <br> Ti <br> Titanio',
        '23 <br> V <br> Vanadio', '24 <br> Cr <br> Cromo',
        '25 <br> Mn <br> Manganeso', '26 <br> Fe <br> Hierro',
        '27 <br> Co <br> Cobalto', '28 <br> Ni <br> Niquel',
        '29 <br> Cu <br> Cobre', '30 <br> Zn <br> Zinc',
        '31 <br> Ga <br> Galio', '32 <br> Gr <br> Germanio',
        '33 <br> As <br> Arsenico', '34 <br> Se <br> Selenio',
        '35 <br> Br <br> Bromo', '36 <br> Kr <br> Kripton',     
        '37 <br> Rb <br> Rubidio', '38 <br> Sr <br> Estroncio',
        '39 <br> Y <br> Itrio', '40 <br> Zr <br> Circonio',
        '41 <br> Nb <br> Niobio', '42 <br> Mo <br> Molibdeno',
        '43 <br> Tc <br> Tecnecio', '44 <br> Ru <br> Rutenio',
        '45 <br> Rh <br> Rodio', '46 <br> Pd <br> Paladio',
        '47 <br> Ag <br> Plata', '48 <br> Cd <br> Cadmnio',
        '49 <br> In <br> Indio', '50 <br> Sn <br> Estaño',
        '51 <br> Sb <br> Antimonio', '52 <br> Te <br> Telurio',
        '53 <br> I <br> Yodo', '54 <br> ie <br> ienon',
        '55 <br> Cs <br> Calsio', '56 <br> Ba <br> Bario',
        '57 71<br>La-Lu<br>Lantanidos', '72 <br> Hf <br> Hanfnio',
        '73 <br> Ta <br> Tantalo', '74 <br> W <br> Wolframio',
        '75 <br> Re <br> Renio', '76 <br> Os <br> Osmio',
        '77 <br> Ir <br> Iridio', '78 <br> Pt <br> Platino',
        '79 <br> Au <br> Oro', '80 <br> Hg <br> Mercurio',
        '81 <br> Tl <br> Talio', '82 <br> Pb <br> Plomo',
        '83 <br> Bi <br> Bismuto', '84 <br> Po <br> Polonio',
        '85 <br> At <br> Astato', '86 <br> Rn <br> Randon',  
        '87 <br> Fr <br> Francio', '88 <br> Ra <br> Radio',
        '89 103<br>Ac-Lr<br>Antinidos', '104 <br> Rf <br> Rutherfordio',
        '105 <br> Db <br> Dubnio', '106 <br> Sg <br> Seaborgio',
        '107 <br> Bh <br> Bohirio', '108 <br> Hs <br> Hasio',
        '109 <br> Mt <br> Meltnerio', '110 <br> Ds <br> Darmstatio',
        '111 <br> Rg <br> Roetgenio', '112 <br> Cn <br> Copernicio',
        '113 <br> Nh <br> Nihonio', '114 <br> Fl <br> Flerovio',
        '115 <br> Mc <br> Mascovio', '116 <br> Lv <br> Livermorio',
        '117 <br> Ts <br> Teneso', '118 <br> Og <br> Oganeson',
        '57 <br> La <br> Lantano', '58 <br> Ce <br> Cerio',
        '59 <br> Pr <br> Praseodimio', '60 <br> Nd <br> Neodimio',
        '61 <br> Pm <br> Prometio', '62 <br> Sm <br> Samario',
        '63 <bR> Eu <br> Europio', '64 <br> Gd <br> Gadolnio',
        '65 <br> Tb <br> Terbio', '66 <br> Dy <br> Disprosio',
        '67 <br> Ho <br> Holmio', '68 <br> Er <br> Erbio',
        '69 <br> Tm <br> Tulio', '70 <br> Yb <br> Lu',
        '71 <br> Lu <br> Lutecio', '89 <br> Ac <br> Actinio',
        '90 <br> Th <br> Torio', '91 <br> Pa <br> Protactinio',
        '92 <br> U <br> Uranio', '93 <br> Np <br> Neptunio',
        '94 <br> Pu <br> Plutonio', '95 <br> Am <br> Americio',
        '96 <br> Cm <br> Curio', '97 <br> Bk <br> Berkelio',
        '98 <br> Cf <br> Californio', '99 <br> Es <br> Einstenio',
        '100 <br> Fm <br> Fermio', '101 <br> Md <br> Mendelevio',
        '102 <br> No <br> Nobelio', '103 <br> Lr <br> Lawrencio',
       
)); ?>

<div class="tabla">
<table> 

<?php for($i=0;$i<count($Valor);$i++){?>

<tr>
<th><?php echo $Valor[$i][0]?></th>
<td colspan="16"></td>
<th><?php echo $Valor[$i][1]?></th></tr>

<tr>
<th><?php echo $Valor[$i][2]?></th>
<th><?php echo $Valor[$i][3]?></th>
<td colspan="10"></td>
<th><?php echo $Valor[$i][4]?></th>
<th><?php echo $Valor[$i][5]?></th>
<th><?php echo $Valor[$i][6]?></th>
<th><?php echo $Valor[$i][7]?></th>
<th><?php echo $Valor[$i][8]?></th>
<th><?php echo $Valor[$i][9]?></th></tr>

<tr>
<th><?php echo $Valor[$i][10]?></th>
<th><?php echo $Valor[$i][11]?></th>
<td colspan="10"></td>
<th><?php echo $Valor[$i][12]?></th>
<th><?php echo $Valor[$i][13]?></th>
<th><?php echo $Valor[$i][14]?></th>
<th><?php echo $Valor[$i][15]?></th>
<th><?php echo $Valor[$i][16]?></th>
<th><?php echo $Valor[$i][17]?></th></tr>

<tr>
<th><?php echo $Valor[$i][18]?></th>
<th><?php echo $Valor[$i][19]?></th>
<th><?php echo $Valor[$i][20]?></th>
<th><?php echo $Valor[$i][21]?></th>
<th><?php echo $Valor[$i][22]?></th>
<th><?php echo $Valor[$i][23]?></th>
<th><?php echo $Valor[$i][24]?></th>
<th><?php echo $Valor[$i][25]?></th>
<th><?php echo $Valor[$i][26]?></th>
<th><?php echo $Valor[$i][27]?></th>
<th><?php echo $Valor[$i][28]?></th>
<th><?php echo $Valor[$i][29]?></th>
<th><?php echo $Valor[$i][30]?></th>
<th><?php echo $Valor[$i][31]?></th>
<th><?php echo $Valor[$i][32]?></th>
<th><?php echo $Valor[$i][33]?></th>
<th><?php echo $Valor[$i][34]?></th>
<th><?php echo $Valor[$i][35]?></th>


</tr>
 
</tr>
<tr>
<th><?php echo $Valor[$i][36]?></th>
<th><?php echo $Valor[$i][37]?></th>
<th><?php echo $Valor[$i][38]?></th>
<th><?php echo $Valor[$i][39]?></th>
<th><?php echo $Valor[$i][40]?></th>
<th><?php echo $Valor[$i][41]?></th>
<th><?php echo $Valor[$i][42]?></th>
<th><?php echo $Valor[$i][43]?></th>
<th><?php echo $Valor[$i][44]?></th>
<th><?php echo $Valor[$i][45]?></th>
<th><?php echo $Valor[$i][46]?></th>
<th><?php echo $Valor[$i][47]?></th>
<th><?php echo $Valor[$i][48]?></th>
<th><?php echo $Valor[$i][49]?></th>
<th><?php echo $Valor[$i][50]?></th>
<th><?php echo $Valor[$i][51]?></th>
<th><?php echo $Valor[$i][52]?></th>
<th><?php echo $Valor[$i][53]?></th></tr>

<tr>
<th><?php echo $Valor[$i][54]?></th>
<th><?php echo $Valor[$i][55]?></th>
<th ><?php echo $Valor[$i][56]?></th>
<th><?php echo $Valor[$i][57]?></th>
<th><?php echo $Valor[$i][58]?></th>
<th><?php echo $Valor[$i][59]?></th>
<th><?php echo $Valor[$i][60]?></th>
<th><?php echo $Valor[$i][61]?></th>
<th><?php echo $Valor[$i][62]?></th>
<th><?php echo $Valor[$i][63]?></th>
<th><?php echo $Valor[$i][64]?></th>
<th><?php echo $Valor[$i][65]?></th>
<th><?php echo $Valor[$i][66]?></th>
<th><?php echo $Valor[$i][67]?></th>
<th><?php echo $Valor[$i][68]?></th>
<th><?php echo $Valor[$i][69]?></th>
<th><?php echo $Valor[$i][70]?></th>
<th><?php echo $Valor[$i][71]?></th></tr>

<tr>
<th><?php echo $Valor[$i][72]?></th>
<th><?php echo $Valor[$i][73]?></th>
<th><?php echo $Valor[$i][74]?></th>
<th><?php echo $Valor[$i][75]?></th>
<th><?php echo $Valor[$i][76]?></th>
<th><?php echo $Valor[$i][77]?></th>
<th><?php echo $Valor[$i][78]?></th>
<th><?php echo $Valor[$i][79]?></th>
<th><?php echo $Valor[$i][80]?></th>
<th><?php echo $Valor[$i][81]?></th>
<th><?php echo $Valor[$i][82]?></th>
<th><?php echo $Valor[$i][83]?></th>
<th><?php echo $Valor[$i][84]?></th>
<th><?php echo $Valor[$i][85]?></th>
<th><?php echo $Valor[$i][86]?></th>
<th><?php echo $Valor[$i][87]?></th>
<th><?php echo $Valor[$i][88]?></th>
<th><?php echo $Valor[$i][89]?></th></tr>
 
 </table>

</div>

<div class="row tabla2">  
<table> 
 
<tr>
<th><?php echo $Valor[$i][90]?></th>
<th><?php echo $Valor[$i][91]?></th>
<th><?php echo $Valor[$i][92]?></th>
<th><?php echo $Valor[$i][93]?></th>
<th><?php echo $Valor[$i][94]?></th>
<th><?php echo $Valor[$i][95]?></th>
<th><?php echo $Valor[$i][96]?></th>
<th><?php echo $Valor[$i][97]?></th>
<th><?php echo $Valor[$i][98]?></th>
<th><?php echo $Valor[$i][99]?></th>
<th><?php echo $Valor[$i][100]?></th>
<th><?php echo $Valor[$i][101]?></th>
<th><?php echo $Valor[$i][102]?></th>
<th><?php echo $Valor[$i][103]?></th>
<th><?php echo $Valor[$i][104]?></th>
</tr>

<tr>
<th><?php echo $Valor[$i][105]?></th>
<th><?php echo $Valor[$i][106]?></th>
<th><?php echo $Valor[$i][107]?></th>
<th><?php echo $Valor[$i][108]?></th>
<th><?php echo $Valor[$i][109]?></th>
<th><?php echo $Valor[$i][110]?></th>
<th><?php echo $Valor[$i][111]?></th>
<th><?php echo $Valor[$i][112]?></th>
<th><?php echo $Valor[$i][113]?></th>
<th><?php echo $Valor[$i][114]?></th>
<th><?php echo $Valor[$i][115]?></th>
<th><?php echo $Valor[$i][116]?></th>
<th><?php echo $Valor[$i][117]?></th>
<th><?php echo $Valor[$i][118]?></th>
<th><?php echo $Valor[$i][119]?></th>
</tr>
  
</table>
</div>

<?php } ?>

</body>
</html>