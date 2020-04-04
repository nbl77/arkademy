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
duplicate("hari apa saja saya bisa!")
console.log("========================");
duplicate("cepat kerjakan!!!")
console.log("=========================");
duplicate("adobe")
console.log("=========================");
duplicate()
console.log("=========================");
duplicate(123)
