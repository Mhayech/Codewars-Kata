def findMisiingLetter(chars):
    for i in range(len(chars)-1):
        if(ord(chars[i+1]-ord(chars[i]))==2):
            return chr(ord(chars[i])+1)