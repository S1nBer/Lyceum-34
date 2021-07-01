<?php 
foreach($sections as $s): 
if($s['type'] == "many"){
   echo '<li><a href="#">' .$s['title']. '<img class="arrow" src="../img/arrow down.png"></a>';
   $subsections = subsections_all($link, $s['id']);
      echo '<ul class="submenu">';
         foreach($subsections as $sub):
            echo '
            <li><a href="../components/subsection.php?id=' .$sub['id']. '">' .$sub['title']. '</a></li>';
         endforeach;
         echo '
         </ul></li>';
}

else{
   echo '<li><a href="../components/section.php?id=' .$s['id']. '">' .$s['title']. '</a></li>';
}
endforeach 
?>
