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