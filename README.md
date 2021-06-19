# lab11web
Nama : M.IQBAL MAULANA

Kelas : TI.19.C1

NIM : 311910594

# Langkah-langkah Praktikum
# Buat folder baru dengan nama lab11_php_ci pada docroot webserver (htdocs)

![lab11web](https://user-images.githubusercontent.com/82009410/122627833-602ee280-d0dc-11eb-9afa-171d4170b75d.PNG)

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

# Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php
![image](https://user-images.githubusercontent.com/82009410/122657883-79459b00-d191-11eb-9bb3-b9ad009262ce.png)

# Kemudian ubah file app/view/about.php seperti berikut
![image](https://user-images.githubusercontent.com/82009410/122657907-b4e06500-d191-11eb-815e-bb9cb61f7e7f.png)

# Selanjutnya refresh tampilan pada alamat http://localhost:8080/about
![image](https://user-images.githubusercontent.com/82009410/122657926-d9d4d800-d191-11eb-9245-b3f998d926f5.png)

# Pertanyaan dan Tugas
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.
Tampilan page about

Tampilan page artikel
![image](https://user-images.githubusercontent.com/82009410/122635265-16122500-d10d-11eb-93d5-81016770368e.png)

# tampilan page contact
![image](https://user-images.githubusercontent.com/82009410/122635301-39d56b00-d10d-11eb-8bce-506111e5770f.png)

