function Twitter() {}
Twitter.prototype = {
        consumerKey:    '',
        consumerSecret: '',
        accessToken:    '',
        tokenSecret:    ''
};
Twitter.prototype.get = function(api, content) {
    var accessor = {
        consumerSecret: this.consumerSecret,
        tokenSecret: this.tokenSecret
    };
 
    var message = {
        method: "GET",
        action: api,
        parameters: {
            oauth_version: "1.0",
            oauth_signature_method: "HMAC-SHA1",
            oauth_consumer_key: this.consumerKey,
            oauth_token: this.accessToken
        }
    };
    for (var key in content) {
        message.parameters[key] = content[key];
    }
    OAuth.setTimestampAndNonce(message);
    OAuth.SignatureMethod.sign(message, accessor);
    var target = OAuth.addToURL(message.action, message.parameters);
 
    var options = {
        type: message.method, //GET
        url: target,
        dataType: "jsonp",  //ここでjsonpを指定する
        jsonp: false,       //jQueryによるcallback関数名の埋め込みはしない
        cache: true         //リクエストパラメータに時刻を埋め込まない
    };
    $.ajax(options);
}
 
var twitter = new Twitter();
 
function update(data){
    for( var i = 0; i < data.length; i++ ) {
        $("#test").append("<p>"+ data[i].text+"</p>");
    }
}

function showList(data) {
  var $list = $('#test');
  $list.fadeOut(function(){
    $list.children().remove();
    for( var i = 0; i < data.statuses.length; i++ ) {
        document.getElementById("JS").innerHTML = "<div class=\"sur\">"+ data.statuses[i].text+"</div>"; 
        $("#test").append("<div class=\"sur\">"+ data.statuses[i].text+"</div>");
    }
      // 一覧を表示する
    $list.fadeIn();
  });
}

 
setInterval(function(){
    //オプションとコールバック関数の指定
    //var content = {count: "10", callback: "showList"};
    var content = {lang:"ja",q:"%23abcdef",count: "10", callback: "showList"}
    //Twitter APIの呼び出し
    twitter.get("https://api.twitter.com/1.1/search/tweets.json", content)
},10000);


