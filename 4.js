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
console.log(validateColor("#FFF"));
console.log(validateColor("#e3e3e3"));
console.log(validateColor("#ata910"));
