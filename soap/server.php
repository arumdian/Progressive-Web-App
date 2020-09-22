<?php

require_once('lib/nusoap.php'); //memanggil file dari library NuSOAP
$ns = "http://".$_SERVER['HTTP_HOST']."/beritaku/soap/server.php";//setting namespace
$server = new soap_server(); //membuat variabel baru untuk menyimpan soap server
$server->configureWSDL('WEB SERVICE BERITA', 'urn:beritaServerWSDL'); // configure WSDL file
$server->wsdl->schemaTargetNamespace = $ns; // server namespace

########################Data Berita##############################################################
 // Complex Array Keys and Types Data Berita++++++++++++++++++++++++++++++++++++++++++
 //Registrasi Tabel Berita
 $server->wsdl->addComplexType("beritaData","complexType","struct","all","", 
 array(
 //Identifikasi setiap field tabel berita
	"idBerita"=>array("name"=>"idBerita","type"=>"xsd:int"),
	"judulBerita"=>array("name"=>"judulBerita","type"=>"xsd:string"),
	"kategoriBerita"=>array("name"=>"kategoriBerita","type"=>"xsd:string"),
	"isiBerita"=>array("name"=>"isiBerita","type"=>"xsd:string"),
	"gambarBerita"=>array("name"=>"gambarBerita","type"=>"xsd:string")
	)
 );
 
 // Complex Array Data Berita++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 $server->wsdl->addComplexType("beritaArray","complexType","array","","SOAP-ENC:Array",
 array(),
 array(
 array(
 "ref"=>"SOAP-ENC:arrayType", 
 "wsdl:arrayType"=>"tns:beritaData[]"
 )
 ),
 "beritaData"
 );
 
 // End Complex Type kategori++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
########################/Data Berita##############################################################
########################/Register Data Berita######################################################
//Ambil Semua Data Berita
 //$input_readall = array(); // parameter ambil data kategori
 //$return_readall = array("return" => "xsd:beritaArray");
 $server->register('readall', // registrasi method
 array('input' => 'xsd:String'), // input parameters
 array('output' => 'xsd:Array'), // output parameters
 $ns, // namespace
 "urn:".$ns."/readall", // soapaction
 "rpc", // style
 "encoded", // use
 "Mengambil Semua Data Berita"); // documentation
//Ambil Semua Data Berita
 
function readall() { //method function readall
 //Koneksi ke database
$server = "localhost";
$username = "root" ;
$password = "" ;
$database = "news";
 
$con = new mysqli($server,$username,$password,$database);
if($con->connect_error){
 die("Koneksi gagal: ".$con->connect_error);
}
$r = $con->query("SELECT * FROM berita");
while($value= $r->fetch_assoc())
 {
$return_value[] = array(
 'id'=> $value['idBerita'],
 'judul'=> $value['judulBerita'],
 'kategori'=> $value['kategoriBerita'],
 'isi'=> $value['isiBerita'],
 'gambar'=> $value['gambarBerita']
 );
 }
 return $return_value;
}

//Create
$server->register('create',
 array('input' => 'xsd:Array'),
 array('output' => 'xsd:Array'),
 $ns,
 "urn:".$ns."/create",
 "rpc",
 "encoded",
 "Insert Data Berita"
);

function create($param) {
$server = "localhost";
$username = "root" ;
$password = "" ;
$database = "news";
 
$con = new mysqli($server,$username,$password,$database);
if($con->connect_error){
 die("Koneksi gagal: ".$con->connect_error);
}

 $r = $con->query("INSERT INTO berita (judulBerita,
 kategoriBerita,isiBerita, gambarBerita)
 VALUES('$param[judulBerita]','$param[kategoriBerita]',
 '$param[isiBerita]', '$param[gambarBerita]')");
 if($r === true){
 $s = 1;
 }else{
 $s = 0;
 }
 $return_value = array('status'=>$s);
 return $return_value;
 
}
 
 $server->register('readbyid',
 array('input' => 'xsd:Array'),
 array('output' => 'xsd:Array'),
 $ns,
 "urn:".$ns."/readbyid",
 "rpc",
 "encoded",
 "Mengambil Data Berita by id"
);
 
function readbyid($param) {
$server = "localhost";
$username = "root" ;
$password = "" ;
$database = "news";
 
$con = new mysqli($server,$username,$password,$database);
if($con->connect_error){
 die("Koneksi gagal: ".$con->connect_error);
}
$r = $con->query("SELECT * FROM berita WHERE idBerita = '$param[id]'");
while($value= $r->fetch_assoc()){
$return_value[] = array(
 'id'=> $value['idBerita'],
 'judul'=> $value['judulBerita'],
 'kategori'=> $value['kategoriBerita'],
 'isi'=> $value['isiBerita'],
 'gambar'=> $value['gambarBerita']
 );
 }
 return $return_value;
}
 
 $server->register('update',
 array('input' => 'xsd:Array'),
 array('output' => 'xsd:Array'),
 $ns,
 "urn:".$ns."/update",
 "rpc",
 "encoded",
 "Update Data Berita"
);
 
function update($param) {
 $server = "localhost";
 $username = "root" ;
 $password = "" ;
 $database = "news";
 
$con = new mysqli($server,$username,$password,$database);
 if($con->connect_error){
 die("Koneksi gagal: ".$con->connect_error);
 }
 $r = $con->query("UPDATE berita SET judulBerita ='$param[judul]',
 kategoriBerita ='$param[kategori]',isiBerita='$param[isi]', 
 gambarBerita='$param[gambar]' WHERE idBerita = '$param[id]'");
 if($r === true){
 $s = 1;
 }else{
 $s = 0;
 }
 $return_value = array('status'=>$s);
 return $return_value;
}

$server->register('delete',
 array('input' => 'xsd:Array'),
 array('output' => 'xsd:Array'),
 $ns,
 "urn:".$ns."/delete",
 "rpc",
 "encoded",
 "Delete Data Berita"
);
 
function delete($param) {
 $server = "localhost";
 $username = "root" ;
 $password = "" ;
 $database = "news";
 
$con = new mysqli($server,$username,$password,$database);
 if($con->connect_error){
 die("Koneksi gagal: ".$con->connect_error);
 }
 $r = $con->query("DELETE FROM berita WHERE idBerita = '$param[id]'");
 if($r === true){
 $s = 1;
 }else{
 $s = 0;
 }
 $return_value = array('status'=>$s);
 return $return_value;
}
 
/////////////////////////
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>