import sys
# sys.argv[0] is the script name

def handleOperations(x, operator, y): 
  x = float(x)
  y = float(y)
  # here we are
  operations = {
    '+': lambda x, y: x + y,
    '-': lambda x, y: x - y,
    '*': lambda x, y: x * y,
    '/': lambda x, y: x / y
  }
  # I'm access the operations dictionary, using the incoming operator to match with, then performing it with the variables
  result = operations[operator](x, y)
  print(result)

if len(sys.argv) == 4:
  handleOperations(sys.argv[1], sys.argv[2], sys.argv[3])
else: 
  print('Please use 2 numbers and an operator. Such as 5 * 4')
