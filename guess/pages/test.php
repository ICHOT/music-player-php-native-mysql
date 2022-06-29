<?php
// $query = "SELECT  `tbl_lagu` . `judul_lagu`,
//       `tbl_band` . `nama_band`,
//       `tbl_album` . `sampul`
//       FROM `tbl_lagu` INNER JOIN `tbl_band` ON `tbl_band` . `kode_band`=
//       `tbl_lagu`.`kode_band`
//       FROM `tbl_lagu` INNER JOIN `tbl_album` ON `tbl_album`.`kode_album`=
//       `tbl_lagu`.`kode_album`";
// while ($data = mysqli_fetch_array($sql)) {
//   $music = $data['judul_lagu'];
//   $band = $data['nama_band'];
//   $sampul = $data['sampul'];

//   echo $data['judul_lagu'];
//   echo ($band);
//   echo ($sampul);
//   var_dump($music);
// }

// $query = "SELECT * FROM tbl_lagu
// JOIN `tbl_band` ON `tbl_lagu`.`kode_band` = `tbl_band`.`kode_band`
// JOIN `tbl_album` ON `tbl_lagu`.`kode_album` = `tbl_album`.`kode_album`";
// $sql = mysqli_query($connect, $query);
// while ($data = mysqli_fetch_array($sql)) {
//   $music = $data['judul_lagu'];
//   $band = $data['nama_band'];
//   $sampul = $data['sampul'];
//   var_dump($data);
// }
echo "hi";

// $querys = "SELECT * FROM tbl_lagu";
// $sqls = mysqli_query($connect, $querys);
// while ($datas = mysqli_fetch_array($sqls)) {
//   $kode_musics($datas['slug']);
//   var_dump($kode_musics);
// }
$a = "SELECT * FROM tbl_lagu";
$s = mysqli_query($connect, $a);
while ($d = mysqli_fetch_array($s)) {
  $k = ($d['slug']);
}
