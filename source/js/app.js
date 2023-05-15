const song = document.getElementById("song");
const playBtn = document.querySelector(".player-inner");
const nextBtn = document.querySelector(".play-forward");
const prevBtn = document.querySelector(".play-back");
const durationTime = document.querySelector(".duration");
const remainingTime = document.querySelector(".remaining");
const rangeBar = document.querySelector(".range");
const musicName = document.querySelector(".music-name");
const musicThumbnail = document.querySelector(".music-thumb");
const musicImage = document.querySelector(".music-thumb img");
const playRepeat = document.querySelector(".play-repeat");

let isPlaying = true;
let indexSong = 0;
let isRepeat = false;
// const musics = ["holo.mp3", "summer.mp3", "spark.mp3", "home.mp3"];
// const musics = [
//   {
//     id: 1,
//     title: "Waiting For You (Mono)",
//     file: "wfy.mp3",
//     image:
//       "https://i.ytimg.com/vi/CHw1b_1LVBA/0.jpg",
//   },
//   {
//     id: 2,
//     title: "Vô Tình",
//     file: "votinh.mp3",
//     image:
//       "https://i.ytimg.com/vi/y3o7Dg9Ikpc/0.jpg",
//   },
// ];
/**
 * Music
 * id: 1
 * title: Holo
 * file: holo.mp3
 * image: unsplash
 */
let timer;
let repeatCount = 0;
window.onload = playPause();
playRepeat.addEventListener("click", function () {
  if (isRepeat) {
    isRepeat = false;
    playRepeat.removeAttribute("style");
  } else {
    isRepeat = true;
    playRepeat.style.color = "#ffb86c";
  }
});
nextBtn.addEventListener("click", function () {
  changeSong(1);
});
prevBtn.addEventListener("click", function () {
  changeSong(-1);
});
song.addEventListener("ended", handleEndedSong);
function handleEndedSong() {
  repeatCount++;
  if (isRepeat && repeatCount === 1) {
    // handle repeat song
    isPlaying = true;
    playPause();
  } else {
    changeSong(1);
  }
}
function changeSong(dir) {
  if (dir === 1) {
    // next song
    indexSong++;
    if (indexSong >= musics.length) {
      indexSong = 0;
    }
    isPlaying = true;
  } else if (dir === -1) {
    // prev song
    indexSong--;
    if (indexSong < 0) {
      indexSong = musics.length - 1;
    }
    isPlaying = true;
  }
  init(indexSong);
  // song.setAttribute("src", `./music/${musics[indexSong].file}`);
  playPause();
}
playBtn.addEventListener("click", playPause);
function playPause() {
  if (isPlaying) {
    musicThumbnail.classList.add("is-playing");
    song.play();
    playBtn.innerHTML = `<ion-icon name="pause-circle"></ion-icon>`;
    isPlaying = false;
    timer = setInterval(displayTimer, 500);
  } else {
    musicThumbnail.classList.remove("is-playing");
    song.pause();
    playBtn.innerHTML = `<ion-icon name="play"></ion-icon>`;
    isPlaying = true;
    clearInterval(timer);
  }
}
function displayTimer() {
  const { duration, currentTime } = song;
  rangeBar.max = duration;
  rangeBar.value = currentTime;
  remainingTime.textContent = formatTimer(currentTime);
  if (!duration) {
    durationTime.textContent = "00:00";
  } else {
    durationTime.textContent = formatTimer(duration);
  }
}
function formatTimer(number) {
  const minutes = Math.floor(number / 60);
  const seconds = Math.floor(number - minutes * 60);
  return `${minutes < 10 ? "0" + minutes : minutes}:${
    seconds < 10 ? "0" + seconds : seconds
  }`;
}
rangeBar.addEventListener("change", handleChangeBar);
//Yêu thích bài hát (đã đăng nhập) 
function liked(songID){
    if(document.getElementById("like-btn").className== "fa-regular fa-heart"){
      document.getElementById("like-btn").className= "fa fa-heart";
      $(function(){
        $.ajax({
        url: 'api/updatelike.php',
        data: {"songID": songID},
        type: 'post',
        success: function()
        {
        }
        })
      })
    }
    else{
      document.getElementById("like-btn").className= "fa-regular fa-heart";
      $(function(){
        $.ajax({
        url: 'api/dislike.php',
        data: {"songID": songID},
        type: 'post',
        success: function()
        {
        }
        })
      })
    }
};

function download(){

};



function handleChangeBar() {
  song.currentTime = rangeBar.value;
}
// function init(indexSong) {
//   song.setAttribute("src", `./music/${musics[indexSong].file}`);
//   musicImage.setAttribute("src", musics[indexSong].image);
//   musicName.textContent = musics[indexSong].title;
// }
displayTimer();
// init(indexSong);

//Thêm các bài hát vào playlist 
$('#add-btn').on('click', function() {
  var val = $('#selectedPL').val();
  var text = $("#selectedPL option:selected").text();
  if(val == "Chọn playlist")
  {
    alert("Vui lòng chọn playlist");
  }
  else{
    $(function(){
      $.ajax({
      url: './api/addplaylist.php',
      data: {"playlistID": val, "playlistName": text},
      type: 'post',
      success: function()
      {
        $("#playlistModal").modal('toggle');
        alert("Thêm thành công")
      }
      })
    })
  }
})
//Tạo playlist 
$("#makeplaylist-btn").on('click',function() {
  var newplaylist = "";
  $("#makeplaylist").each(function() {
      var name = $(this).find("#newplaylistName").val();
      newplaylist = name;
  });
  if(newplaylist == "")
  {
    alert("Vui lòng đặt tên cho playlist của mình");
  }
  else{
    $(function(){
      $.ajax({
      url: './api/createnewplaylist.php',
      data: {"playlistName": newplaylist},
      type: 'post',
      success: function()
      {
        $("#newplaylistModal").modal('toggle');     
        alert("Tạo thành công");
        location.reload();
      }
      })
    })
  }
});

//Chuyển bài hát 
nextBtn.addEventListener("click", function () {
  var u = location.href.split('&');
  var order = u[u.length - 1];
  var num = order.split('=');
  next = parseInt(num[1]);
  if(document.getElementsByClassName("card")[next])
  {
    var test = document.getElementsByClassName("card")[next].innerHTML;
    var tmp = test.slice(9,test.indexOf('>') - 1);
    tmp = tmp.replace(/amp;/g,'');
    window.location.href = tmp;
  }
  else{
    var test = document.getElementsByClassName("card")[0].innerHTML;
    var tmp = test.slice(9,test.indexOf('>') - 1);
    tmp = tmp.replace(/amp;/g,'');
    window.location.href = tmp;
  }
});

prevBtn.addEventListener("click", function () {
  var u = location.href.split('&');
  var order = u[u.length - 1];
  var num = order.split('=');
  prev = parseInt(num[1]) - 2;
  if(document.getElementsByClassName("card")[prev])
  {
    var test = document.getElementsByClassName("card")[prev].innerHTML;
    var tmp = test.slice(9,test.indexOf('>') - 1);
    tmp = tmp.replace(/amp;/g,'');
    window.location.href = tmp;
  }
  else{
    var a = document.getElementsByClassName("card");
    last = parseInt(a.length) - 1;
    var test = document.getElementsByClassName("card")[last].innerHTML;
    var tmp = test.slice(9,test.indexOf('>') - 1);
    tmp = tmp.replace(/amp;/g,'');
    window.location.href = tmp;
  }
});
//Rating bài hát (đã đăng nhập) 
$(".my-rating-4").starRating({
  totalStars: 5,
  starShape: 'rounded',
  starSize: 22,
  emptyColor: 'lightgray',
  hoverColor: 'salmon',
  activeColor: 'crimson',
  useGradient: false,
  disableAfterRate: false,
  callback: function(currentRating){
    $("#rating-num").html(currentRating);
    $.ajax({
      url: 'api/rating.php',
      data: {"rating": currentRating},
      type: 'post',
      success: function()
      {
      }
      })
  }
});


