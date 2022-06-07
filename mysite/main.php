<!DOCTYPE HTML >
<html  lang = "en">
<head>
    <meta charset ="UTF-8">
    <meta name  = "viewport" content = "width = device-width , initial-scale = 1,0">
    <title> practice PHP </title>
    <linc  rel = "stylesheet " href =" style.css "/>
</head>
<body>
    
    <div  class ="flex-container">

        <div class ="header">     
               <?php  include  'logo.inc.php'  ?>         
               <?php  include  'menu.inc.php'  ?>	   
        </div>       
     
        <div  class = "about_me">
         
          <h1>   <?php   echo  $p   ?>  </h1>

            <div  class = "data">
                <div  class = "myImg">
                    <?php
                    echo  '<img src="/img/php.jpg">' ; ?>                    
                </div>

                <div  class = "fullname">
                    <p> Меня зовут
                    <?php  echo  $name , ' ' , $surname .
                    '<br>' ;
                          echo  'город' , ' ' , $city ; ?>                                      
                    </р> 
           
                    <р> Мне
                    <?php   echo  $age ;   ?>          
                    лет </p> 
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили операции с ними </p>
                </div>
            </div>

            <div  class = "knowlege">
                                   
                    <?php   include  'knowledge.inc.php' ; ?>
                    <?php    echo  $a , '' , $b , '' , $c ; ?>  <br>
                                       
                    <?php
                        $а = 10 ;
                        $b = 20 ;
                        $с = $a + $b ;
                        echo  $с ;
                    ?>    < br >                
                     <?php
                        echo $d ;
                    ?> 

            </div>

            <div  class="article">
                <р  class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias!
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </р>
            </div>
        </div>

            <?php  include  'footer.inc.php'  ?>

    </div>


</body>
</html>