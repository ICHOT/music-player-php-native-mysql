function main() {
  document.getElementById("main").style.visibility = "visible";
  document.getElementById("artis").style.visibility = "hidden";
  document.getElementById("album").style.visibility = "hidden";
  // document.getElementById("albumsongs").style.visibility = "hidden";
  // document.getElementById("bandsongs").style.visibility = "hidden";
  document.getElementById("playlist").style.visibility = "hidden";
  document.getElementById("love").style.visibility = "hidden";
}
function artis() {
  document.getElementById("main").style.visibility = "hidden";
  document.getElementById("artis").style.visibility = "visible";
  document.getElementById("album").style.visibility = "hidden";
  // document.getElementById("albumsongs").style.visibility = "hidden";
  // document.getElementById("bandsongs").style.visibility = "hidden";
  document.getElementById("playlist").style.visibility = "hidden";
  document.getElementById("love").style.visibility = "hidden";
}
function album() {
  document.getElementById("main").style.visibility = "hidden";
  document.getElementById("artis").style.visibility = "hidden";
  document.getElementById("album").style.visibility = "visible";
  // document.getElementById("albumsongs").style.visibility = "hidden";
  // document.getElementById("bandsongs").style.visibility = "hidden";
  document.getElementById("playlist").style.visibility = "hidden";
  document.getElementById("love").style.visibility = "hidden";
}
// function albumsongs() {
//   document.getElementById("main").style.visibility = "hidden";
//   document.getElementById("artis").style.visibility = "hidden";
//   document.getElementById("album").style.visibility = "hidden";
//   document.getElementById("albumsongs").style.visibility = "visible";
//   document.getElementById("bandsongs").style.visibility = "hidden";
//   document.getElementById("playlist").style.visibility = "hidden";
//   document.getElementById("love").style.visibility = "hidden";
// }
// function bandsongs() {
//   document.getElementById("main").style.visibility = "hidden";
//   document.getElementById("artis").style.visibility = "hidden";
//   document.getElementById("album").style.visibility = "hidden";
//   document.getElementById("albumsongs").style.visibility = "hidden";
//   document.getElementById("bandsongs").style.visibility = "visible";
//   document.getElementById("playlist").style.visibility = "hidden";
//   document.getElementById("love").style.visibility = "hidden";
// }
function playlist() {
  document.getElementById("main").style.visibility = "hidden";
  document.getElementById("artis").style.visibility = "hidden";
  document.getElementById("album").style.visibility = "hidden";
  // document.getElementById("albumsongs").style.visibility = "hidden";
  // document.getElementById("bandsongs").style.visibility = "hidden";
  document.getElementById("playlist").style.visibility = "visible";
  document.getElementById("love").style.visibility = "hidden";
}
function love() {
  document.getElementById("main").style.visibility = "hidden";
  document.getElementById("artis").style.visibility = "hidden";
  document.getElementById("album").style.visibility = "hidden";
  // document.getElementById("albumsongs").style.visibility = "hidden";
  // document.getElementById("bandsongs").style.visibility = "hidden";
  document.getElementById("playlist").style.visibility = "hidden";
  document.getElementById("love").style.visibility = "visible";
}