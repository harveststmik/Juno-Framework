# Juno-Framework

Juno-Framework adalah sebuah prototipe. Dibangun hanya untuk memperlihatkan kerangka dasar framework bertipe
MVC - (Model - View - Controller). Framework ini dibangun dengan PHP, dan meniru gaya MVC yang diterapkan pada
framework Yii. 

Juno-Framework hanyalah sebuah contoh dan ini dibuat sebagai pelengkap pembelajaran pada matakuliah "Pemrograman Web 3"
di STMIK Harvest.

# Model 1

Model 1, merupakan model yang sangat sederhana, tanpa konfigurasi. index.php langsung menangani `request` untuk
membangun sebuah `route` yang akan menentukan `controller` dengan `action` yang sesuai. `Controller` akan menginisiasi
`Model` yang diperlukan untuk kemudian melakukan `rendering` terhadap `View` yang diminta.

## Struktur Direktori

```
#--+ model-1
   |-- css
   |-- js
   |-- controller
   |-- view
   |-- model
```

# Model 2

Model 2 adalah versi yang lebih lengkap dan terstruktur, memisahkan inti framework dengan applikasinya.
Dengan struktur yang seperti ini maka framework lebih mudah untuk dikembangkan, serta diaplikasikan 
ke berbagai kasus.

## Struktur Direktori

```
#--+ model-2
   +--+ juno
   |  |-- base
   |  *-- helpers
   +--+ app    
      |-- css
      |-- js
      |-- controller
      |-- view
      +-- model
```
