const divide = (array,num)=>{
  var cnt = 0;
  var hasil = [];
  for (var i = 0; i < array.length; i++) {
    hasil[i] = array[i];
    cnt++;
  }
  console.log(hasil);;
}
divide([1,2,3,4,5,6],2)
[[1,2],[4,5]]
