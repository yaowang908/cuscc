// JavaScript Document
$(document).ready(function(){
    //var userIp = $("#userip").text();
    var userIp = "67.244.13.242";
    console.log(userIp);
    var taobaoApi = "http://ip.taobao.com/service/getIpInfo.php";
    var chinaIp = "\u4e2d\u56fd";
   $.getJSON(taobaoApi, "ip="+userIp, function(data){
        console.log("successfully ajax ed "+data.country);
        if(data.country===chinaIp){
            $(".cuscc_intro_video_youku").css("display","block");
            $(".cuscc_intro_video_youtube").css("display","none");
        }else{
            $(".cuscc_intro_video_youku").css("display","none");
            $(".cuscc_intro_video_youtube").css("display","block");
        }
    });
});
//change video players base on ip
