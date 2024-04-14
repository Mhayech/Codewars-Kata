def valid_braces(string):
    stack = []
    brace_match = {')':'(','}':'{',']':'['}
    for char in string :
        if char in '({[':
            stack.append(char)
        elif char in ')}]':
            if not stack or stack[-1] != brace_match[char]:
                return False 
            else:
                stack.pop()
    return not stack
