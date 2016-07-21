<?php 
	include_once ('header.php') ; 
?>
<font color="black" size="3" align="justyfy">
Sedangkan NoSQL adalah tipe penyimpanan data selain yang berwujud tabular (tabel-tabel), 
NoSQL tidak mengikuti prinsip (ACID) RDBMS sepenuhnya.NoSQL, menurut Eric Brewer menganut prinsip BASE:<br>
1. Basic Availability: Setiap request sekedar mendapat garansi "response": Sukses/Gagal.<br>
2. Soft State: State NoSQL bisa berubah secara dinamis tanpa input manual untuk meyakinkan eventual consistency.<br>
3. Eventual Consistency: Untuk "sementara" waktu NoSQL mungkin tidak konsisten (Akan diabahas kemudian maksud & contohnya).
NoSQL bukan berarti "No SQL" atau "bukan SQL"/tidak mendukung bahasa Query, tapi "Not-Only SQL".<br> 
Masudnya database NoSQL tetap memiliki (support) "semacam" bahasa Query, namun dalam bentuk (terminology yang berbeda). 
Beberapa literature bahkan tidak menggolongkan NoSQL sebagai suatu bentuk database.  NoSQL bisa berupa Document (e.g. MongoDB), 
Key-Value (e.g. CouchDB), Graph (e.g. Neo4J), dsb.
<img src="DB.jpg" width="370px" height="280px" border="1">
<img src="nosql1.jpg" width="420px" height="280px" border="1">
<img src="nosql.jpg" width="400px" height="280px" border="1">
<img src="nosq_up.jpg" width="390px" height="280px" border="1">
<?php 
	include_once ('foter.php') ; 
?>