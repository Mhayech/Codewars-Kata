def persistence(n):
    persist = 0
    lst = list(str(n))
    while len(lst)>1:
        n = 1
        for i in lst:
            n*=int(i)
        lst = list(str(n))
        persist+=1
    return persist

