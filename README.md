# Arkademy Bootcamp

## Soal No. 1
* JSON (JavaScript Object Notation) adalah sebuah format data yang digunakan untuk pertukaran dan penyimpanan data.JSON sebagai format untuk bertukar data client dan server atau antar aplikasi seperti penggunaan REST API.

## Soal No. 2
Format username: hanya boleh huruf besar dengan panjang tepat 7 karakter

    function usernameCheck(username) {
      return /^[A-Z]{7}$/.test(username);
    }
    console.log(usernameCheck("SABRINA"));
    console.log(usernameCheck("KEVIN"));

Format password: merupakan kombinasi huruf kecil, huruf besar, angka dan simbol pagar "#" dengan panjang antara 9 - 15 karakter

    function passwordCheck(password) {
      return /^(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(?=.*[#])[\w|\W|\d]{9,15}$/.test(password);
    }
    console.log(passwordCheck("#DirumahAj4"));
    console.log(passwordCheck("Cuci#Tangan"));

## Soal No. 3
Buatlah sebuah fungsi untuk membagi sebuah array pada parameter pertama menjadi sub sub array dengan isi masing-masing sub array sesuai parameter kedua. Ketentuan: sub array terakhir tidak boleh hanya berisi satu, kecuali parameter kedua bernilai 1.
# Belum jadi

## Soal No. 4
Diketahui salah satu kode warna di komputer menggunakan Hex Code, yaitu 3/6 digit yang diawali pagar “#” dan merupakan kombinasi dari angka 0-9 dan/atau huruf A-F. Buatlah fungsi/method untuk memvalidasi input parameter yang diberikan merupakan kode hex yang valid atau tidak. Tidak boleh menggunakan regex!

    function validateColor(hex) {
      hex = hex.split("");
      let codeHexa = ['a','b','c','d','e','f','0','1','2','3','4','5','6','7','8','9'];
      let hasil = "Format kode Hex salah!";
      if (((hex.length - 1) == 3 || (hex.length - 1) == 6) && hex.indexOf("#") == 0) {
          for (var i = 1; i < hex.length; i++) {
              hex[i] = hex[i].toLowerCase();
              hasil = codeHexa.includes(hex[i]);
              if (!hasil) {
                return "Format kode Hex salah!";
              }
          }
          hasil = "Format kode Hex benar!"
          return hasil;
      }else{
        return hasil;
      }
    }
    console.log(validateColor("#FFF"));//Output: True
    console.log(validateColor("#e3e3e3"));//Output:True
    console.log(validateColor("#ata910"));//Output False

## Soal No. 5
Buatlah sebuah fungsi/method yang hanya menerima parameter "string", lalu menentukan karakter apa saja yang berulang dan berapa banyak karakter yang berulang tersebut. Buatlah pengecekan parameter "Harus memasukan parameter dan harus string!" jika parameter tidak ada/bukan string!

    const duplicate = (string) =>{
      if (string == "" || typeof string != "string") {
        return console.log("Harus memasukan parameter dan harus string!");
      }
      let arr = string.replace(/ /g,"").split("");
      arr.sort();
      let hurufSebelumnya = null;
      let jumlahHuruf = 0;
      let huruf = {};
      for (var i = 0; i < arr.length; i++) {
        if (arr[i] != hurufSebelumnya) {
          if (jumlahHuruf > 1) {
            huruf[hurufSebelumnya] = jumlahHuruf;
          }
          hurufSebelumnya = arr[i];
          jumlahHuruf = 1;
        }else{
          jumlahHuruf++;
        }
      }
      let total = 0;
      for (var h in huruf) {
        console.log(h+":"+huruf[h]);
        total++;
      }
      if (total == 0) {
        console.log("Tidak ada karakter yang berulang!");
      }
    }
     duplicate("hari apa saja saya bisa!");

## Soal No. 6
### Jawaban Soal No.6 Ada di dalam folder 6
  # Penyelesaian 6a
  Buatlah query untuk menampilkan seluruh data pada table:
  SELECT cashier.name as cashier,
  product.name as product,
  category.name as category,
  product.price as price
  FROM product JOIN category ON product.id_category = category.id
  JOIN cashier ON product.id_cashier=cashier.id

  # Penyelesaian 6b

  # Penyelesaian 6c
