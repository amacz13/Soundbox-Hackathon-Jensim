var sounds = ['http://cdn-preview-8.deezer.com/stream/c-85f7213d2d51e89fceddf14179c96b36-3.mp3',"http://cdn-preview-7.deezer.com/stream/c-76c344e16e1f2214e33bfae48b878128-4.mp3"];
var audio;

function btnClick(i) {
    audio = new Audio(sounds[i]);
    audio.play();
}

function stop(){
    audio.pause();
    audio.currentTime = 0;
}

function pause(){
    audio.pause();
}
    


M.AutoInit();
