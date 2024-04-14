def parse(data):
    value = 0
    output = []
    for cmd in data :
        if cmd=='i':
            value+=1
        elif cmd=='d':
            value-=1
        elif cmd=='s':
            value**=2
        elif cmd=='o':
            output.append(value)
    return output