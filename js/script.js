function clock() {
  const fullDate = new Date();
  var hours = fullDate.getHours();
  var minutes = fullDate.getMinutes();
  var seconds = fullDate.getSeconds();

  if (hours < 10) {
    hours = "0" + hours;
  }
  if (minutes < 10) {
    minutes = "0" + minutes;
  }
  if (seconds < 10) {
    seconds = "0" + seconds;
  }
  document.getElementById('hour').innerHTML = hours;
  document.getElementById('minute').innerHTML = ":" + minutes;
  document.getElementById('second').innerHTML = ":" + seconds;
}


var myInput = document.getElementById('myFileInput');

function sendPic() {
  var file = myInput.files[0];
}

const fileInput = document.getElementById('myFileInput');

fileInput.addEventListener('change', (e) =>
  doSomethingWithFiles(e.target.files),
);

myInput.addEventListener('change', sendPic, false);

setInterval(clock, 100);