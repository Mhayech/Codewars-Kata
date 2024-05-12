function translate(sentence){
    const vowels = 'aeiou';
    if(vowels.includes(sentence[0].tolowerCase())){
        return sentence + 'ay';
    }else{
        for(let i=0;i<sentence.length;i++){
            if(vowels.includes(sentence[i])){
                return sentence.substring(i) + sentence.substring(0,i) + 'ay';
            }
    }
}
    return word + "ay";
}