function usernameCheck(username) {
  return /^[A-Z]{7}$/.test(username);
}
function passwordCheck(password) {
  return /^(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(?=.*[#])[\w|\W|\d]{9,15}$/.test(password);
}
console.log(usernameCheck("SABRINA"));
console.log(usernameCheck("KEVIN"));
console.log("================================");
console.log(passwordCheck("#DirumahAj4"));
console.log(passwordCheck("Cuci#Tangan"));
