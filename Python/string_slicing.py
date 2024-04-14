

def solution(s):
    if(len(s) % 2 !=0):
        s+='_'
    
    lst = [s[i:i+2] for i in range (0,len(s))]
    return lst 


