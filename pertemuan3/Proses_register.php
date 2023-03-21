<?php
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];

    function skor_skill($skill){

        
        foreach($skill as $skill)
        $result = $result + $skill_list($skill);
    }

    

    echo "NIM: $nim";
    echo "<br> Nama: $nama";
    echo "<br> Jenis Kelamin: $gender";
    echo "<br> Program Studi: $prodi";
    echo "<br> Skill Programing: ";

    foreach($skill as $skill){
        echo $skill . ", ";
    }

    echo "<br> Domisili: $domisili";
    echo "<br> Email: $email";
}