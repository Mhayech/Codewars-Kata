def divisors(integer):
    lst = []
    for i in range (2, integer):
        if integer % i == 0:
            lst.append(i)
    if (len(lst)==0):
        return f'{integer} is prime'
    else:
        return lst


print(divisors(13))