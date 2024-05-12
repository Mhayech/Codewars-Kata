def beeramid(bonus, price):
    total_beers_can = bonus / price
    total = 0
    n = 1
    while(total+n**2<=total_beers_can):
        total += n**2
        n += 1
    return n -1