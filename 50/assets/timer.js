let myTimer = setInterval(myClock, 1000);
let time = 300;
if(localStorage.getItem('time'))
{
    time = localStorage.getItem('time');
}
else{
    localStorage.setItem('time', time);
}


function myClock() {
    --time;
    localStorage.setItem('time', time);
    let seconds = time % 60;
    if ( seconds < 10 ){seconds = '0' + seconds;}
    let secondsInMinutes = (time - seconds) / 60;
    let minutes = secondsInMinutes % 60;
    document.getElementById("timer").innerHTML =  minutes + ":" + seconds;
    if (time <= 0) {
        clearInterval(myTimer);
        document.getElementById('end_wrap').style.display = "flex";
        document.getElementById('body').style.overflowY = "hidden";
        document.getElementById("timer").innerHTML = "0 : 00";
    }
}