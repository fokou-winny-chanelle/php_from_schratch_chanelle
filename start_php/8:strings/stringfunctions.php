<?php
    $content = "You can do string operations easily with String functions <br><br>";
    $findWord = "operations";
    echo "\"$content\"" ;

    //Number of Words
    echo "Number of Words in the String: " . str_word_count($content),"<br><br>";
    
    //Replace Strings
    echo "Find and Replace operations with manipulation:<br> " . str_replace("operations", "manipulations", $content) ,"<br><br>";
    //Reverse Strings
    echo "reverse the string<br>",strrev($content),"<br><br>" ;

    //Remove White Spaces - ltrim and rtrim
    $content = "    " . $content . "    ";
    echo "Trim the content<br><br>",trim($content);

    //Shuffle Strings
    echo "shuffle the string <br>",str_shuffle($content),"<br><br>" ;

    //UPPER and lower case
    echo "convert from lower case to upper<br>",strtoupper($content),"<br><br>" ;
    
    //Word Wrap the String and display it.
    $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
    echo wordwrap($content, 20) ;
    echo "<br><br>",$content ;

?>