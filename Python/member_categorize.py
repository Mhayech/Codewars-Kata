def open_or_senior(data):
    lst = []
    for person in data:
        age,handicap = person
        if age>=55 and handicap>7:
            lst.append('Senior')
        else:
            lst.append('Open')
    return lst

print(open_or_senior([[18, 20], [45, 2], [61, 12], [37, 6], [21, 21], [78, 9]]))
