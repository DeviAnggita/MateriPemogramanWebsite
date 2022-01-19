<?php

$conn = mysqli_connect('localhost','root','','kampus');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [] ;
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] =$row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nim = $data ["nim"];
    $nama = $data ["nama"];
    $email = $data ["email"];
    $jurusan = $data ["jurusan"];

    $query="INSERT INTO tb_mahasiswa VALUES
    ('','$nim', '$nama', '$email','$jurusan')";
     
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    $query ="DELETE FROM tb_mahasiswa WHERE id=$id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function ubah($data){
    
    global $conn;
    $id = $data["id"];
    $nim=$data["nim"];
    $nama=$data["nama"];
    $email=$data["email"];
    $jurusan=$data["jurusan"];

    $query ="UPDATE tb_mahasiswa SET 
            nim='$nim', 
            nama='$nama',
            email='$email',
            jurusan='$jurusan'
            WHERE id='$id'
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function cari($keyword){
$query = "SELECT * FROM tb_mahasiswa WHERE nama LIKE '%$keyword%'
OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' ";

return query($query);
}

?>
