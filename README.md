# lab11web
Nama : M.IQBAL MAULANA

Kelas : TI.19.C1

NIM : 311910594

# Langkah-langkah Praktikum
# Buat folder baru dengan nama lab11_php_ci pada docroot webserver (htdocs)

![image](https://user-images.githubusercontent.com/82009410/123494576-8c051780-d64a-11eb-8da9-5d26aef8ff78.png)

# Instalasi Codeigniter 4
Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara manual.
![image](https://user-images.githubusercontent.com/82009410/122629138-0d0d5d80-d0e5-11eb-92a6-b45428a82ea3.png)

# Menjalankan CLI (Command Line Interface)
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt. Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (xampp/htdocs/lab11_php_ci/ci4/) Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah: ( php spark )
![image](https://user-images.githubusercontent.com/82009410/122629857-37154e80-d0ea-11eb-9e67-22e180cfee22.png)

# Mengaktifkan Mode Debugging
Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program. Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.
![image](https://user-images.githubusercontent.com/82009410/122629951-b73bb400-d0ea-11eb-972e-7faad780ec6b.png)

# Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable CI_ENVIRINMENT menjadi development
![image](https://user-images.githubusercontent.com/82009410/122630511-7b0a5280-d0ee-11eb-8b81-fc81aca2e684.png)

# Contoh error yang terjadi. Untuk mencoba error tersebut, ubah kode pada file app/Controller/Home.php hilangkan titik koma pada akhir kode.
![image](https://user-images.githubusercontent.com/82009410/122630891-6b403d80-d0f1-11eb-8dda-5b64693f693b.png)

# Routing dan Controller
Router terletak pada file app/config/Routes.php
![image](https://user-images.githubusercontent.com/82009410/122630773-78a8f800-d0f0-11eb-8b9f-7260c58ec7e0.png)

# Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut.
# yaitu php spark
![image](https://user-images.githubusercontent.com/82009410/122631277-e9521380-d0f4-11eb-8236-d726aab30f5b.png)

# Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about
![image](https://user-images.githubusercontent.com/82009410/122634828-cd596c80-d10a-11eb-8d89-dd96e718fc7f.png)

# Membuat Controller
Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/82009410/122657718-5e265b80-d190-11eb-9dfc-5728b0950091.png)

Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaotu halaman sudah dapat diakses.

![image](https://user-images.githubusercontent.com/82009410/122657746-8615bf00-d190-11eb-9287-e1a615131fdb.png)

# Tambahkan method baru pada Controller Page seperti berikut.
![image](https://user-images.githubusercontent.com/82009410/122657805-edcc0a00-d190-11eb-9852-1aeec86f9378.png)

# Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos
![image](https://user-images.githubusercontent.com/82009410/122657825-0b00d880-d191-11eb-8bcd-ea42ed96d2a3.png)

# Ubah method about pada class Controller Page menjadi seperti berikut:
![image](https://user-images.githubusercontent.com/82009410/122657857-44394880-d191-11eb-845a-2461b692eb29.png)

# Buat file css pada direktori public dengan nama style.css (copy file dari praktikum lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.
![image](https://user-images.githubusercontent.com/82009410/122657869-5dda9000-d191-11eb-9936-5004e1897f08.png)

# Membuat Layout Web dengan CSS
Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada Codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public. Buat file css pada direktori public dengan nama style.css

![image](https://user-images.githubusercontent.com/82009410/122658090-616f1680-d193-11eb-90d5-c8932e33e5a1.png)

Kemudian ubah file app/view/about.php seperti berikut.
include('template/header'); ?>
include('template/footer'); ?>
-Kemudian refresh browser atau akses alamat http://localhost:8080/about
![image](https://user-images.githubusercontent.com/82009410/122658094-819ed580-d193-11eb-8807-c0dd25409ce2.png)


# Pertanyaan dan Tugas
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.
Tampilan page about

Tampilan page artikel
![image](https://user-images.githubusercontent.com/82009410/122635265-16122500-d10d-11eb-93d5-81016770368e.png)

# tampilan page contact
![image](https://user-images.githubusercontent.com/82009410/122635301-39d56b00-d10d-11eb-8bce-506111e5770f.png)

# Praktikum 12 - Lanjutan Codeigniter - Pemrograman Web
# lab12web

# Buat Database

CREATE DATABASE lab_ci4;

# Buat Tabel

CREATE TABLE artikel (

 id INT(11) auto_increment,
 
 judul VARCHAR(200) NOT NULL,
 
 isi TEXT,
 
 gambar VARCHAR(200),
 
 status TINYINT(1) DEFAULT 0,
 
 slug VARCHAR(200),
 
 PRIMARY KEY(id)
 
);

![image](https://user-images.githubusercontent.com/82009410/123363167-1e9aad80-d59c-11eb-90d2-c0ffc4bd2c83.png)

![image](https://user-images.githubusercontent.com/82009410/123363362-818c4480-d59c-11eb-977b-28d7eb7e87d7.png)

# Langkah 1 - Konfigurasi Koneksi Database
# Konfigurasi dapat dilakukan dengan cara mengubah beberapa kode pada file htdocs\lab11_php_ci\ci4.env.

=>Cari pada line DATABASE

=>Ubah seperti berikut ini

#database.default.hostname = localhost

#database.default.database = lab_ci4

#database.default.username = root

#database.default.password = 

#database.default.DBDriver = MySQLi

#database.default.DBPrefix =

=>Hilangkan tanda pagar # didepan. Maka jadi seperti dibawah ini.

database.default.hostname = localhost

database.default.database = lab_ci4

database.default.username = root

database.default.password = 

database.default.DBDriver = MySQLi

database.default.DBPrefix =

![image](https://user-images.githubusercontent.com/82009410/123366146-e007f180-d5a1-11eb-8700-0d02525b6566.png)
# Langkah 2 - Membuat Model
Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada folder app/Models dengan nama ArtikelModel.php

![image](https://user-images.githubusercontent.com/82009410/123366392-53116800-d5a2-11eb-9f03-6e50bec1d7e3.png)

# Langkah 3 - Membuat Controller

Buat Controller baru dengan nama Artikel.php pada folder app/Controllers

![image](https://user-images.githubusercontent.com/82009410/123366482-80f6ac80-d5a2-11eb-9542-5565c7cef515.png)

# Langkah 4 - Membuat View
Buat folder baru dengan nama artikel pada folder app/views, kemudian buat file baru dengan nama index.php

![image](https://user-images.githubusercontent.com/82009410/123366692-d7fc8180-d5a2-11eb-8ca5-e71b385e92e3.png)

Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel

![image](https://user-images.githubusercontent.com/82009410/123492278-4bee6680-d643-11eb-8305-a078f5669cf5.png)

Kemudian tambahkan beberapa data pada database agar dapat ditampilkan datanya

# Langkah 5 - Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada Controller Artike dengan nama view()
![image](https://user-images.githubusercontent.com/82009410/123367023-75f04c00-d5a3-11eb-988f-25df0f2175b5.png)

# Langkah 6 - Membuat View Detail
Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php

![image](https://user-images.githubusercontent.com/82009410/123492399-88ba5d80-d643-11eb-8504-23b7c81834f4.png)

# Langkah 7 - Membuat Routing untuk artikel detail
Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail

![image](https://user-images.githubusercontent.com/82009410/123492418-a4256880-d643-11eb-988d-8ff76d63f693.png)

![image](https://user-images.githubusercontent.com/82009410/123492545-fc5c6a80-d643-11eb-9494-815cda702fb1.png)

# Langkah 8 - Membuat Menu Admin
=> Buat method baru pada Controller Artikel dengan nama admin_index()

![image](https://user-images.githubusercontent.com/82009410/123492591-1e55ed00-d644-11eb-909e-43636e98dbda.png)

=> Kemudian buat view untuk tampilan admin dengan nama admin_index.php

![image](https://user-images.githubusercontent.com/82009410/123492614-33328080-d644-11eb-826c-9804fa65cc2a.png)

![image](https://user-images.githubusercontent.com/82009410/123492624-3d547f00-d644-11eb-9120-613e10e04489.png)

=> Tambahkan routing untuk menu admin seperti berikut:

![image](https://user-images.githubusercontent.com/82009410/123492654-53fad600-d644-11eb-8e45-dc7bdef3b23f.png)

=> Setelah itu buat template header dan footer baru untuk Halaman Admin. Buat file baru dengan nama admin_header.php pada direktori app/view/template

![image](https://user-images.githubusercontent.com/82009410/123492690-6a089680-d644-11eb-854a-e2b6791a6dc0.png)

=> Dan Buat file baru lagi dengan nama admin_footer.php pada direktori app/view/template

![image](https://user-images.githubusercontent.com/82009410/123492714-7e4c9380-d644-11eb-9a13-36d7b32ccbcf.png)

=> Kemudian buat file baru lagi dengan nama admin.css pada direktori ci4/public untuk mempercantik tampilan Halaman Admin

![image](https://user-images.githubusercontent.com/82009410/123492743-92909080-d644-11eb-8023-84cba9b4b409.png)

![image](https://user-images.githubusercontent.com/82009410/123492757-9cb28f00-d644-11eb-9e84-67764960ad24.png)

=> Akses menu admin dengan url http://localhost:8080/admin/artikel

![image](https://user-images.githubusercontent.com/82009410/123492832-d5526880-d644-11eb-90b4-584ae1ff573c.png)

# Langkah 9 - Menambah Data Artikel
Tambahkan fungsi/method baru pada Controller Artikel dengan nama add()

![image](https://user-images.githubusercontent.com/82009410/123492860-ebf8bf80-d644-11eb-8b11-1f81b8c22487.png)

=> Kemudian buat view untuk form tambah dengan nama form_add.php

![image](https://user-images.githubusercontent.com/82009410/123492884-ff0b8f80-d644-11eb-8d5f-6ebf0e466c44.png)

=> Klik menu Tambah Artikel dan inilah hasilnya

![image](https://user-images.githubusercontent.com/82009410/123492959-37ab6900-d645-11eb-8a6b-49d9579728d5.png)

# Langkah 10 - Mengubah Data
=> Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit()

![image](https://user-images.githubusercontent.com/82009410/123492997-53af0a80-d645-11eb-90f1-b63371065ed0.png)

=> Kemudian buat view untuk form tambah dengan nama form_edit.php

![image](https://user-images.githubusercontent.com/82009410/123493015-675a7100-d645-11eb-94a1-5da118090f08.png)

=> Klik ubah pada salah satu artikel dan inilah hasilnya

![image](https://user-images.githubusercontent.com/82009410/123493094-a2f53b00-d645-11eb-867d-6b54dc233fd2.png)

# Langkah 11 - Menghapus Data
=> Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete()

![image](https://user-images.githubusercontent.com/82009410/123493148-d33cd980-d645-11eb-9106-eeda81319089.png)

