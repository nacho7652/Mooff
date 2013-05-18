<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mi player</title>
 
<style type="text/css"><!--
#miPlayerCentro{
text-align:center;
margin:20px auto;
}
--></style>
 
<!--En color verde el extracto del archivo de la API de soundcloud. Podéis sustituir este script por el archivo que encontraréis en: https://github.com/soundcloud/Widget-JS-API/blob/master/soundcloud.player.api.js */-->
 <script type="text/javascript">
(function(){
  var isIE = (/msie (6|7|8)/i).test(navigator.userAgent) && !(/opera/i).test(navigator.userAgent);  
  var soundcloud = window.soundcloud = {
    version: "0.1",
    debug: false,
    _listeners: [],
    _redispatch: function(eventType, flashId, data) {
      var playerNode,
          lsnrs = this._listeners[eventType] || [],
          customEventType = 'soundcloud:' + eventType;
      try{
        playerNode = this.getPlayer(flashId);
      }catch(e){
        if(this.debug && window.console){
          console.error('unable to dispatch widget event ' + eventType + ' for the widget id ' + flashId, data, e);
        }
        return;
      }
      if(window.jQuery){
        jQuery(playerNode).trigger(customEventType, [data]);
      }else if(window.Prototype){
        $(playerNode).fire(customEventType, data);
      }else{      }
      for(var i = 0, l = lsnrs.length; i < l; i += 1) {
        lsnrs[i].apply(playerNode, [playerNode, data]);
      }
      if(this.debug && window.console){
        console.log(customEventType, eventType, flashId, data);
    }},
    addEventListener: function(eventType, callback) {
      if(!this._listeners[eventType]){
        this._listeners[eventType] = [];
      }
      this._listeners[eventType].push(callback);
    },
    removeEventListener: function(eventType, callback) {
      var lsnrs = this._listeners[eventType] || [];
      for(var i = 0, l = lsnrs.length; i < l; i += 1) {
        if(lsnrs[i] === callback){
          lsnrs.splice(i, 1);
    }}},
    getPlayer: function(id){
      var flash;
      try{
        if(!id){
          throw "The SoundCloud Widget DOM object needs an id atribute, please refer to SoundCloud Widget API documentation.";
        }
        flash = isIE ? window[id] : document[id];
        if(flash){
          if(flash.api_getFlashId){
            return flash;
          }else{
            throw "The SoundCloud Widget External Interface is not accessible. Check that allowscriptaccess is set to 'always' in embed code";
          }
        }else{
          throw "The SoundCloud Widget with an id " + id + " couldn't be found";
        }
      }catch(e){
        if (console && console.error) {
         console.error(e);
        }
        throw e;
    }},
    onPlayerReady: function(flashId, data) {this._redispatch('onPlayerReady', flashId, data);},
    onMediaStart : function(flashId, data) {this._redispatch('onMediaStart', flashId, data);},
    onMediaEnd : function(flashId, data) {this._redispatch('onMediaEnd', flashId, data);},
    onMediaPlay : function(flashId, data) {this._redispatch('onMediaPlay', flashId, data);},
    onMediaPause : function(flashId, data) {this._redispatch('onMediaPause', flashId, data);},
    onMediaBuffering : function(flashId, data) {this._redispatch('onMediaBuffering', flashId, data);},
    onMediaSeek : function(flashId, data) {this._redispatch('onMediaSeek', flashId, data);},
    onMediaDoneBuffering : function(flashId, data) {this._redispatch('onMediaDoneBuffering', flashId, data);},
    onPlayerError : function(flashId, data) {this._redispatch('onPlayerError', flashId, data);}
  };  
})();
</script>

 
<!--Script que permite a nuestro reproductor hacer play y pausa:-->
<script type="text/javascript">
/*Esperamos a que el reproductor de Soundcloud este listo para recibir ordenes:*/
soundcloud.addEventListener('onPlayerReady', function(player, data) {
 
/*Instanciamos el reproductor y lo asignamos a una variable*/
ctx_player = soundcloud.getPlayer('myPlayer');
 
/*Creamos la función que será llamada por nuestro reproductor al presionar en el <div> con id="btn_player"*/
play_miPlayer = function (){
/*Alternamos entre play y pausa según el estado actual del reproductor:*/
ctx_player.api_toggle();
};
/*Duración del track en segundos:*/
duraciontrack = ctx_player.api_getTrackDuration();
 
/*Función que lanzaremos al darle al play*/
soundcloud.addEventListener('onMediaPlay', function(player, data) {
//alert('El reproductor se ha iniciado');
/*Función para el tiempo reproducido:*/
FuncPeriodica = function(){
var d = ctx_player.api_getTrackPosition();
var minutos = Math.round(d/60);
var segundos = Math.round(d%60);
minutos = '00'+minutos;
minutos = minutos.substring(minutos.length-2);
segundos = '00'+segundos;
segundos = segundos.substring(segundos.length-2); 

document.getElementById('tiempo').innerHTML = minutos+':'+segundos;
}
/*Llamamos a la función para el tiempo reproducido cada segundo:*/
setInterval('FuncPeriodica()',1000);
});
/*Función que lanzaremos al darle al pause*/
soundcloud.addEventListener('onMediaPause', function(player, data) {
//alert('El reproductor se ha parado');
});
});
</script>
</head>
 
<body>
<div id="miPlayerCentro">
<object height="100" width="100" id="myPlayer" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
<param name="movie" value="http://player.soundcloud.com/player.swf?url=http://soundcloud.com/lordnocillo/ninos4&enable_api=true&object_id=myPlayer"></param>
<param name="allowscriptaccess" value="always"></param>
<embed allowscriptaccess="always" height="100" width="100" src="http://player.soundcloud.com/player.swf?url=http://soundcloud.com/lordnocillo/ninos4&enable_api=true&object_id=myPlayer" type="application/x-shockwave-flash" name="myPlayer"></embed>
</object>
</div>
 
<div id="miPlayerCentro">
<div id="miPlayer">
<a onclick="" href="javascript:play_miPlayer()">Play</a>
<a onclick="" href="javascript:play_miPlayer()">Pause</a>
</div>
<div id="tiempo">&nbsp;</div>
</div>
</body>
</html>
