def to_weird_case(words):
    wordsArray = words.split()
    for i in range (len(wordsArray)):
        word = list(wordsArray[i])
        for j in range(len(word)):
            if j%2==0 :
                word[j] = word[j].upper()
            else:
                word[j]=word[j].lower()
        wordsArray[i] = "".join(word)
    return ' '.join(wordsArray)