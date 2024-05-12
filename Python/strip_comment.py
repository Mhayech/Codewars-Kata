def strip_comments(strng, markers):
    lst1 = strng.split('\n')
    lst2 = []
    for i in lst1:
        for marker in markers:
            index = i.find(marker)
            if index != -1:
                i = i[:index].strip()
        lst2.append(i.strip())
    return '\n'.join(lst2)

print(strip_comments("apples, pears # and bananas\ngrapes\nbananas !apples", ["#", "!"]))