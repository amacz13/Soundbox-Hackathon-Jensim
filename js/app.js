var sounds;
var audio;
var selectedConfig = 0;

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
            htmlCode += '<a id="addBtn" class="waves-effect waves-light btn col l2 s4 modal-trigger" href="#modal1" style="display: none;" onclick="addBtn()"><span>+</span></a>';
            selectedConfig = $("#selectConf").val();
            $(".soundboard").html(htmlCode);
        }
    );
}

function editMode()
{
    if (selectedConfig != 0) {
        $("#infoEdit").show();
        $("#addBtn").show();
    } else {
        M.toast({html: 'Sélectionnez une configuration dans un premier temps !'});
    }
}

function ajouterBouton()
{
    $.post(
        '../php/ajoutBouton.php',
        {
            texte: $("#texte").val(),
            url: $("#url").val(),
            color: $("input[name='group1']:checked").val(),
            config: $("#selectConf").val()
        },
        function (data)
        {
            alert(data);
            htmlCode="";
            if(data.includes('okay'))
            {
                var tempSounds = sounds;
                sounds = new Array(tempSounds.length + 1);
                
                for (var i = 0; i < tempSounds.length; i ++) {
                    sounds[i] = tempSounds[i];
                }
                sounds[tempSounds.length+1] = $("#url").val();
                htmlCode += '<a class="waves-effect waves-light btn col l2 s4" onclick="btnClick('+(tempSounds.length+1)+')"><span>'+$("#texte").val()+'</span></a>';
            }else{

            }
           
            
                
            htmlCode += '<a id="addBtn" class="waves-effect waves-light btn col l2 s4 modal-trigger" href="#modal1" style="display: none;" onclick="addBtn()"><span>+</span></a>';

            $(".soundboard").html(htmlCode);
        }
    );
}

function addConfig() {
    $.post(
        '../php/addConfig.php',
        {
            name: $("#configName").val()
        },
        function (data)
        {
            if (data == "Ok") location.reload();
            else M.toast({html: 'Une erreur est survenue !'});
        }
    );
}