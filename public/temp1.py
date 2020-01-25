import joblib
import sys
from sklearn.tree import DecisionTreeClassifier
# print("Hello World")
model=joblib.load("model.h5")
result=model.predict([[float(sys.argv[1]),float(sys.argv[2]),float(sys.argv[3]),float(sys.argv[4]),float(sys.argv[5]),float(sys.argv[6]),float(sys.argv[7])]])
result=result[0]
if result==1:
    print("Tomato")
elif result==2:
    print("Potato")
elif result==3:
    print("Soyabean")
elif result==4:
    print("Strawberry")
elif result==5:
    print("Bell Pepper")
elif result==6:
    print("Raspberry")
elif result==7:
    print("Peach")
elif result==8:
    print("Grapes")
elif result==9:
    print("Orange")
elif result==10:
    print("Corn")
elif result==11:
    print("Cherry")