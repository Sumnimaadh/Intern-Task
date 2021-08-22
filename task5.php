<!-- task 5 -->
<?php

$allnames = ["Trapper Wolf", "Cara Dune", "Bo-Katan Kryze", "Paul Sun-Hyung Lee", "Dee Bradley Baker"];
function getNames($namestrs){

    $allnames= array();
    $namestrs = str_replace(array(',',' and ',' & ', '&amp;','/'),'|',$namestrs);
    foreach($namestrs as $key=> $namestr){
        $namestr = explode(' ',trim($namestr) );

        if(count($namestr)==1 || (count($namestr)==2 && strlen(trim($namestr[1]) )<3)){ 
            $firstname = $namestr[0];
            if(isset( $namestr[1])){
            $middlename = $namestr[1];  
            }
            else{
            $middlename ='';    
            }
            $lastname='';
            $thenames = $namestrs; //print_r($thenames); //echo $key;
            $thenames = array_slice($thenames, $key+1, NULL, TRUE);  //print_r($thenames);

            foreach($thenames as $c=>$a){
                $a = explode(' ',trim($a) );// print_r( $a);

                    if(count($a)>1 && trim($lastname) ==''){
                    $lastname = $a[count($a)-1];

                }                   
            }
        } 
        
 else if(count($namestr)==2){
            $firstname = $namestr[0];
            $middlename = '';
            $lastname = $namestr[1];
        }
        else if(count($namestr)==3){
            $firstname = $namestr[0];
            $middlename = $namestr[1];
            $lastname = $namestr[2];
        }
        else if(count($namestr)>3){
            $firstname = $namestr[0];
            $middlename = $namestr[1];
            $lastname = str_replace(array( $firstname,$middlename ),"", implode(' ',$namestr));
            $lastname = trim($lastname);
        }

        if($lastname=='3rd')    {
        $lastname = trim($middlename) ." "  .trim($lastname) ;
        $middlename ='';
        }       

        $allnames[] = array('Firstname'=>$firstname,'Middlename'=>$middlename,'Lastname'=>$lastname );
    }

    return $allnames;
}

print_r(getNames($allnames));

?>
