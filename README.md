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

