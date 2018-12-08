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

function loadconfig() {
    $.post(
        '../php/recupBtn.php',
        {
            config: $("#selectConf").val()
        },
        function (data)
        {
            var json = JSON.parse(data);
            var htmlCode = "";
            sounds = new Array(json.length);
            for (var i = 0; i < json.length; i ++) {
                htmlCode += '<a class="waves-effect waves-light btn col l2 s4" onclick="btnClick('+i+')"><span>'+json[i].text+'</span></a>';
                sounds[i] = json[i].urlSound;
            }
            htmlCode += '<a id="addBtn" class="waves-effect waves-light btn col l2 s4" style="display: none;" onclick="addBtn()"><span>+</span></a>';

            $(".soundboard").html(htmlCode);
        }
    );
}