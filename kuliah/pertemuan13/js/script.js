<?php
/*
Muhammad Andrew Rahdi Rizanta
203040159
https://github.com/AndrewBeater/pw2021_203040159
Pertemuan 13 - 05 Juni 2021
Mempelajari mengenai Live Searching & Upload Gambar
*/
?>

const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container')

// hilangkan tombol cari
tombolCari.style.display = 'none';

// event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function () {
  // ajax

  //xmlhttprequest
  // const xhr = new XMLHttpRequest();

  // xhr.onreadystatechange = function () {
  //   if (xhr.readyState == 4 && xhr.status == 200) {
  //     container.innerHTML = xhr.responseText;
  //   }
  // };
  // xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
  // xhr.send();

  // fetch()
  fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));
});
// preview gambar untuk tambah dan ubah
function previewImage() {
  const gambar = document.querySelector('.gambar');
  const imgPreview = document.querySelector('.img-preview');


  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}