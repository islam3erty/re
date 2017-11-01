<?php

$API_KEY = '452891721:AAEQVr-RF3OO4FUoBLKBroBpZaJ2t1TRdP0';
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}


$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$mid = $message->message_id;
$id = $message->from->id;
$us = $message->from->username;
$n1 = $message->from->first_name;
$n2 = $message->from->last_name;
$type = $message->chat->type;
$gn = $message->chat->title;
$admin1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@llteam_beboll&user_id=$id");
$admin = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$id");

$txt = file_get_contents("https://omarrealxp.000webhostapp.com/pp.php");
$re = $message->reply_to_message;
if($re and $text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$txt
]);
}

if(preg_match('/^(عمر)(.*)/',$text) and $type == "supergroup"){
bot('sendVoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/hhttr/6",
'caption'=>"@Omar_Real",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(علي نواب|علي النواب)(.*)/',$text) and $type == "supergroup"){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>"https://t.me/hhttr/8",
'caption'=>"@xAliAlnawab",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(شهد|البومه)(.*)/',$text) and $type == "supergroup"){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>"https://t.me/hhttr/10",
'caption'=>"@xXxsha7odxXx",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(كاسبر|كسبوري|كاستر|@[Kk][Aa][Ss][Pp][Ee][Rr]_[Dd][Ee][Vv])(.*)/',$text) and $type == "supergroup"){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>"https://t.me/hhttr/12",
'caption'=>"@Kasper_Dev",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(حموشي|محمد حسن|@[Mm][Oo][Hh][Aa][Mm][Mm][Ee][Dd][Hh][Aa][Ss][Ss][Aa][Nn])(.*)/',$text) and $type == "supergroup"){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>"https://t.me/hhttr/11",
'caption'=>"@MohammedHassan",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(محمد هشام)(.*)/',$text) and $type == "supergroup"){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>"https://t.me/hhttr/14",
'caption'=>"@TH3BOSS",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(جوكر)(.*)/',$text) and $type == "supergroup"){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>"https://t.me/hhttr/15",
'caption'=>"@PYTHON_JOKER",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(كيكو)(.*)/',$text) and $type == "supergroup"){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>"https://t.me/hhttr/16",
'caption'=>"@ikeko",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(ابن كريم)(.*)/',$text) and $type == "supergroup"){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>"https://t.me/hhttr/17",
'caption'=>"@lll0D",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(مايكو)(.*)/',$text) and $type == "supergroup"){
bot('sendVoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/hhttr/20",
'reply_to_message_id'=>$mid,
]);
bot('sendVoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/hhttr/21",
'reply_to_message_id'=>$mid,
]);
bot('sendVoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/hhttr/22",
'reply_to_message_id'=>$mid,
]);
bot('sendVoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/hhttr/23",
'reply_to_message_id'=>$mid,
]);
bot('sendVoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/hhttr/24",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(صوفي)(.*)/',$text)){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>"https://t.me/hhttr/19",
'caption'=>"@FREE_MAN00",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(توفي|توفيكو|@[Ii][Tt][Oo][Ff][Ii][Kk][Oo])(.*)/',$text) and $type == "supergroup"){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>"https://t.me/hhttr/25",
'caption'=>"@iTofiko",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(بكر)(.*)/',$text) and $type == "supergroup"){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>"https://t.me/hhttr/26",
'caption'=>"@XXYXX",
'reply_to_message_id'=>$mid,
]);
}

if($preg_match('/^(قفاص)(.*)/',$text) and $type == "supergroup"){
bot('sendVoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/hhttr/27",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(انجب|فرخ|كواد|مطي|حيوان|زاحف|دي|جلب)(.*)/',$text) and $type == "supergroup"){
bot('sendVoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/hhttr/28",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(اه)(.*)/',$text) and $type == "supergroup"){
bot('sendVoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/hhttr/29",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(🌚|🌝|🌞)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"عود ثكيل ه ه ه 😕😂",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(😂|🤣|😹)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"باع باع باع شكد يضحك وفاتحـ/ـة حلكهـ/ـا عبالك مطي طابه بخشمه ذبانه 🌚😹",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(شونك|اشونك|شلونك)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"الحمد لله حبي انتـ/ـي شلونكـ/ـج 😊💚",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(شخبارك|اخبارك)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"الحمد لله حبي انتـ/ـي شلونكـ/ـج 😊💚",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(مرحبا)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"مراحب ❣️💋",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(هلا|اهلا|ياهلا)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اهلا بيك كبد حياتي 💋",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(منور|منوره|منورة|نورت|نورتي|منورين)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"من بعد نوركـ/ـج حبيقي 😍💚",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(💚|💙|❤|️💋|😍|😘|💛|💜|🖤|💔|💘|💖|💗|💓|💞|💕|❣|💝|💟)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لك لك لك باع المايستحون شيدزون له له 😔😂",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(كلخرا|خرا|اكل خرا|يا خره)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"خرا ليترس حلكك/ج ياخرا يابنلخرا خختفووو ابلع😸🙊💋",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(كحبه|كحبة|قحبه|قحبة|كس|فرختي|كحبتي|جلبتي)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"امك 😔😂",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(سوسو)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ها شتريد بدت رحمة الله 😕😂",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(رابط الحذف|اريد رابط الحذف|اريد رابط حذف)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⚠️¦ رابط حذف حـساب التيليگرام ↯
⚠️¦ لتتندم فڪر قبل ڪلشي ❤️
⚠️¦ احذف وعيـــِش حياتك 🌞
⚠️¦ـ  https://telegram.org/deactivate",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(احبك|حبك|احوبك|احبج|حبج|احوبج)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"حبتكـ/ـج حية ام سبع روس زاحفـ/ـه 😐😕",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(غنيلي)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اي ليش لا 😊 \n تحب تسمع منو 🤔⁉️
- محمد السالم  🎤
- نور الزين 🎧
- عبدلله الهميم 🎼
- عهود 
- صلاح حسن 
- مهند العزاوي 
- بلال
------ او لطميات ------
- باسم الكربلائي
- حسين فيصل
- علي الصغير 
- حسين الاكرف
- محمد الحجيرات
- علي الدلفي 
- عمار الكناني ",
'reply_to_message_id'=>$mid,
]);
}

if($re and preg_match('/^(اتفل|تفل)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لاا عيب استحي ",
'reply_to_message_id'=>$mid,
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ختفوووووووووو💦💦️ختفوووووووووو💦💦️ختفوووووووووو💦💦️ختفوووووووووو💦💦️ختفوووووووووو💦💦️
خخخخخخخخخخخخخخخخخخخخخخخخخخخخختتتتتتتتتتتتتتتتففففففففففففففففففوووووووووو💦💦
خلاص تعبت 😔😂",
'reply_to_message_id'=>$mid->message_id,
}

if(preg_match('/^(حلو|حلوة|حلوه|صاكه|صاكا|صاكة|حاته|حتيت|صاك|حات)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"بربك 😳 صورة صورة عسريع 😍 اوففف 😘😂",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(🇮🇶)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تاج الراس 😍",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(😭|😢|😞|😔|😟|☹|️😣|😖|😫|😩|😰|😢|😥|😓)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"شبيكـ/ـج حياتي منو وياكـ/ـج 😢",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(مح)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"محات يبعد جبدي والجلاوي مالتي 😍😂",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(هلو|هلاو)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"يا هلا ويا مرحبا 😊😂",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(باي|جاو)(.*)/',$text and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"سد الباب وراك",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(شكرا)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"عفوا",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(وين)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"شعليك ليش تتدخل ليش حشري ",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(خاص)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ايا زواحيف يا ما تستحون",
'reply_to_message_id'=>$mid,
]);
}

if(preg_match('/^(اتصل|اتصال)(.*)/',$text) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ها ها شراح تحجون",
'reply_to_message_id'=>$mid,
]);
}

if($message->new_chat_members) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"هلا بالضلع الما ينشلع $message->from->first_name",
'reply_to_message_id'=>$mid,
]);
}

$get_progile = file_get_contents("https://api.telegram.org/bot$API_KEY/getUserProfilePhotos?user_id=$id&limit=1");
$json = json_decode($get_progile);
$user_photo = $json->result->photos[0][0]->file_id;
if($text == "صورتي" or preg_match('/^(صورتي)(.*)/',$text) and $type == "supergroup"){
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$user_photo
'caption'=>"صورتك"
]);
}

$get = file_get_contents("https://omarrealxp.000webhostapp.com/sex.php");
$json = json_decode($get);
$word = $json->word;
for($i = 0;$i < count($word); $i++){
if(preg_match("/$word[$i]/",$text) and $type == "supergroup"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
}
