<?php 
	include_once ('header.php') ; 
?>
<font color="black" size="3" align="justyfy">
<h5>Pengertian MongoDB</h5>
MongoDB merupakan basis data yang tidak relasional. 
MongoDB ini bersifat open source yang memiliki High Performance. 
MongoDB adalah sebuah database yang menggunakan konsep manajemen 
database berorientasi dokumen (document-oriented) yang dibuat 
menggunakan pemograman C++. 
<h5>Poin Penting Document-Oriented pada MongoDB</h5>
<li>Data unit dari MongoDB dikatakan sebagai document, ini sama dengan row dalam relational database.</li>
<li>Koleksi beberapa dokumen disimpan dalam collection, ini sama dengan table dalam relational database.</li>
<li>Database merupakan kumpulan dari beberapa collection. MongoDB dapat menerima lebih dari satu database secara independen.</li>
<li>MongoDB memiliki javascript shell yang sangat berguna untuk urusan administrasi dan manipulasi data.</li>
<li>Data-data document akan dipisah dan kemudian di store ke beberapa komputer cluster.

<h5>Kelebihan MongoDB</h5>
1. MongoDB merupakan sistem basis data yang menggunakan konsep key-value, yaitu setiap dokumen dalam MongoDB pasti memiliki key. Saat membuat dokumen tanpa menggunakan sebuah primary key, 
secara otomatis MongoDB akan memberikan sebuah key. Key-value ini berperan penting karena membuat sistem basis data pada MongoDB semakin lebih cepat dibandingkan dengan non key-value seperti RDBMS.</br>
2. MongoDB mendukung replikasi. Repiklasi ini dapat membuat pemilik sistem yang memiliki trafik membaca tinggi akan sangat terbantu ketika sistemnya menggunakannya.
3. MongoDB juga mendukung Sharding. Sharding digunakan ketika memiliki website yang sudah sangat besar jumlah penggunaannya, datanya dapat mencapai jutaan giga byte. 
Dengan penggunakan sharding ini akan dikerjakan dengan membaris-baris data dengan per regional.</br>
4. MongoDB mendukung modul pemograman MapReduce. Yaitu sebuah konsep yang sangat fenomenal yang pernah dikeluarkan oleh Google dan saat ini banyak diimplementasikan seperti pada Apache Hadoop. 
MapReduce membantu ketika melakukan operasi agregasi. Dimana semua entry datangnya dari collection dan outputnya akan menjadi collection juga. Pada MySQL biasanya menggunakan query Group By.</br>
5. MongoDB mendukung bahasa pemograman C, C++, C#, Erlang, Haskell, Java, JavaScript, .NET (C#F#, PowerShell), Lips, PHP, Python, Ruby, dan Scala.</br>
6. Cross-platform. MongoDB akan dapat digunakan di Windows, Linux, OS X, dan Solarus.</br>
7. Proses CRUD (create, read, update, dan delete) terasa ringan.</br>
8. GridFS. GridFS ini digunakan untuk menyimpan data yang sangat besar.

<h5>Kekurangan MongoDB</h5>
1. MongoDB harus diinstall disebuah server.<br>
2. MongoDB belum support dibanyak hosting.<br>
3. Tidak cocok untuk aplikasi proses transaksi.<br>
<img src="MongoDB.png" width="370px" height="280px" border="1">

<?php 
	include_once ('foter.php') ; 
?>