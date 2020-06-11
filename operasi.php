<?php 

function kirimFile()
{
    for($i=0; $i<count($_FILES['file']['name']); $i++){
        move_uploaded_file($_FILES['file']['tmp_name'][$i], 'file/' . $_FILES['file']['name'][$i]);
    }
}

function bacaFile(){
	return $files = scandir('file');
}


?>