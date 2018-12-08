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

$.post(
    '../compte.php',
    {
        config : $("#select").id()
    },

function (data)
{
    var bouttons = data;
    for (var i = 0; i < ; i++) {
        var myBouton = document.createElement('button');
        var myH2 = document.createElement('h2');
        var myPara1 = document.createElement('p');
        var myPara2 = document.createElement('p');
        var myPara3 = document.createElement('p');
        var myList = document.createElement('ul');
    
       
        }
        var btn = document.createElement('button');
    button.textContent = data['text'];
    body.appendChild(premier);
    }
},
);
