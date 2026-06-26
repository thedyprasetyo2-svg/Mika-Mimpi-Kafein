# ☕ MIMPI KAFEIN

### *Android-Based Cafe Ordering Application*

<p align="center">
  <img src="Assets/logo.png" width="180" alt="Mimpi Kafein Logo"/>
</p>

<p align="center">

![Android](https://img.shields.io/badge/Android-Java-3DDC84?logo=android\&logoColor=white)
![Java](https://img.shields.io/badge/Java-17-orange?logo=openjdk)
![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?logo=mysql)
![Retrofit](https://img.shields.io/badge/Retrofit-REST%20API-green)
![XAMPP](https://img.shields.io/badge/XAMPP-Local%20Server-FB7A24)

</p>

---

# 📖 About Project

**MIMPI KAFEIN** merupakan aplikasi pemesanan menu kafe berbasis Android yang dikembangkan sebagai proyek akhir mata kuliah **Mobile Programming** di Universitas Pamulang.

Aplikasi ini memungkinkan pelanggan melakukan pemesanan menu secara digital, sedangkan admin dapat mengelola data menu dan pesanan secara langsung melalui aplikasi Android.

Selain fitur pemesanan, aplikasi ini juga dilengkapi dengan **Voice Order** menggunakan Android Speech Recognition sehingga pengguna dapat melakukan pemesanan menggunakan perintah suara.

---

# ✨ Features

### 👤 User

* Login Pengunjung
* Login Admin
* Registrasi Admin
* Dashboard Pengunjung
* Daftar Menu
* Detail Menu
* Keranjang Belanja
* Checkout
* Riwayat Pesanan
* Voice Order (Speech Recognition)
* Quick Order
* Profil Pengguna

### 👨‍💼 Admin

* Dashboard Admin
* Kelola Menu
* Tambah Menu
* Upload Foto Menu
* Kelola Pesanan
* Laporan Penjualan
* Logout

---

# 📱 Screenshots

| Login                                     | Dashboard                                                |
| ----------------------------------------- | -------------------------------------------------------- |
| <img src="Assets/login.png" width="220"/> | <img src="Assets/dashboard_pengunjung.png" width="220"/> |

| Menu                                     | Keranjang                                     |
| ---------------------------------------- | --------------------------------------------- |
| <img src="Assets/menu.png" width="220"/> | <img src="Assets/keranjang.png" width="220"/> |

| Dashboard Admin                                     | Kelola Menu                                     |
| --------------------------------------------------- | ----------------------------------------------- |
| <img src="Assets/dashboard_admin.png" width="220"/> | <img src="Assets/kelola_menu.png" width="220"/> |

| Kelola Pesanan                                     |
| -------------------------------------------------- |
| <img src="Assets/kelola_pesanan.png" width="220"/> |

---

# 🛠 Technology

| Technology     | Description          |
| -------------- | -------------------- |
| Android Studio | IDE Development      |
| Java           | Programming Language |
| Retrofit       | REST API Client      |
| PHP            | Backend API          |
| MySQL          | Database             |
| XAMPP          | Local Server         |
| Gson           | JSON Converter       |

---

# 🗄 Database

Database menggunakan **MySQL** dengan nama:

```text
mimpikafein
```

### Tabel Database

* user
* menu
* cart
* cart_item
* orders
* order_detail
* pembayaran

---


# 🚀 Installation

### Clone Repository

```bash
git clone https://github.com/USERNAME/MimpiKafein-Android.git
```

### Import Database

* Jalankan XAMPP
* Aktifkan Apache
* Aktifkan MySQL
* Import file **mimpikafein.sql**

### Konfigurasi API

Ubah BASE_URL pada:

```java
ApiClient.java
```

Contoh:

```java
private static final String BASE_URL =
"http://192.168.xxx.xxx/mimpikafein/";
```

### Jalankan Project

* Buka Android Studio
* Sync Gradle
* Jalankan Emulator atau Android Device
* Login sebagai Admin atau Pengunjung

---

# 📖 API

REST API menggunakan PHP.

### Endpoint

| Method | Endpoint     |
| ------ | ------------ |
| POST   | register.php |
| POST   | login.php    |
| GET    | getMenu.php  |
| POST   | addMenu.php  |
| POST   | checkout.php |
| GET    | history.php  |

---

# 👨‍💻 Developer

<p align="center">

<img src="Assets/profile.jpg" width="180"/>

### **Thedy Lenggah Prasetyo**

S1 Teknik Informatika
Fakultas Teknik
Universitas Pamulang

**Mata Kuliah**
Mobile Programming

**Dosen Pengampu**
**Septa, S.Kom., M.Kom.**

</p>

---

# 📜 License

Project ini dikembangkan sebagai **proyek akademik** untuk memenuhi tugas Mata Kuliah **Mobile Programming** di **Program Studi Teknik Informatika, Universitas Pamulang**.

Hak cipta kode sumber tetap dimiliki oleh pengembang (**Thedy Lenggah Prasetyo**). Repository ini diperuntukkan sebagai media pembelajaran, dokumentasi portofolio, dan referensi akademik.

Anda diperbolehkan untuk melihat, mempelajari, dan mengembangkan proyek ini untuk tujuan pendidikan dengan tetap mencantumkan atribusi kepada pengembang.

---

<p align="center">

⭐ Jika repository ini bermanfaat, jangan lupa berikan **Star**.

CREATED by **Thedy Lenggah Prasetyo**

</p>
