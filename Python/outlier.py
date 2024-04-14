def find(numbers):
    even = []
    odd = []

    for i in numbers:
        if i%2==0:
            even.append(i)
        else:
            odd.append(i)
    if len(even)>1:
        return odd[0]
    else:
        return even[0]