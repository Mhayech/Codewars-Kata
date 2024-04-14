def in_array(array1,array2):
    result = []
    for i in array1:
        for j in array2:
            if i in j:
                result.append(i)
                result = sorted(list(set(result)))
    return result

print(in_array(["arp", "live", "strong"], ["lively", "alive", "harp", "sharp", "armstrong"]))