function user_image_male_female(gender){
    if(gender=="male"){
        return "avatar_boy.jpg";
    }else{
        return "avatar_girl.jpg";
    }
}

function capital_first(str){
    return str.charAt(0).toUpperCase()+str.slice(1);
}

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }

function get_thumb_name(name){
    return name.split('.').slice(0, -1).join('.')+"_thumb."+name.substr(name.lastIndexOf('.') + 1);
}

function show_hide_password(thiss){
    var new_inp_type=thiss.siblings("input").attr("type")=="password"?"text":"password";
    thiss.siblings("input").attr("type",new_inp_type);
    thiss.toggleClass('bi-eye');    
}

function limit_words(word_limit,sentence){
    if(sentence.length>word_limit){
       return sentence.slice(0,word_limit)+'...';
    }
    return sentence;
}

