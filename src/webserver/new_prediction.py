import numpy as np                 #Library for arrays
import pandas as pd                #Library for high-preformance data dealing

data_sheet = pd.read_csv('Dataset.txt')
data_sheet = data_sheet.drop('typea', axis=1)
x = data_sheet.iloc[:, 1:9].values
y = data_sheet.iloc[:, 9].values
"""
Line 5 = deleting one column
Line 6-7 = putting input data and output data in arrays
"""

from sklearn.preprocessing import LabelEncoder
labelencoder = LabelEncoder()
x[:, 4] = labelencoder.fit_transform(x[:, 4])
"""
Line 14-15 = Label encoder encodes data betwen 0 and n (In this case from 0 to 1)
"""

from sklearn.preprocessing import StandardScaler
scaler = StandardScaler()
x = scaler.fit_transform(x)
"""
Line 21-22 = we scale whole data set to very small numbers because ANN (Artificial Neural Network) will handle them better than big numbers
"""

import keras
from keras.models import Sequential
from keras.layers import Dense
"""
Line 27-29 = These are libraries and modules for building the architecture of ANN
"""

heart_neural_network = Sequential()
heart_neural_network.add(Dense(units = 7, kernel_initializer = 'uniform',activation = 'relu', input_dim = 8))
heart_neural_network.add(Dense(units = 5, kernel_initializer = 'uniform', activation = 'relu'))
heart_neural_network.add(Dense(units = 1, kernel_initializer = 'uniform', activation = 'sigmoid'))
heart_neural_network.compile(optimizer = 'Adam', loss = 'binary_crossentropy', metrics = ['accuracy'])
"""
Line 34 = Booting up the ANN
Line 35 = Adding first layer with 7 neurons and 8 input values
Line 36 = Adding second layer with 5 neurons that is connected with first layer
LIne 37 = Adding third layer which is also output layer with 1 neuron because we have output value from 0-1
"""

heart_neural_network.load_weights('Heart_NN_weights_86.h5') #Uploads pretrained model weights to the architecture that is already explained up here

new_prediction = heart_neural_network.predict(scaler.transform(np.array([[150,25,4.2,40,1,38,4,23]])))

def testData(arr):
    language = arr[-1]
    info = arr[0:8]
    prediction = heart_neural_network.predict(scaler.transform(np.array([info])))
    prediction = (prediction > 0.47)
    if prediction == True:
        if language==1:
            return str('Znakovi srčanih bolesti')
        else:
            return str('Signs of Heart disease')
    elif prediction == False:
        if language==1:
            return str('Nema znakova srčanih bolesti')
        else:
            return str('No signs of Heart disease')

"""
Line 48 = in the first part we have 8 input values that go as follow
1. sbp
2. tobacco
3. ldl
4. adiposity
5. famhist
6. obesity
7. alcohol
8. age

After that data will be scaled to small numbers and the ANN will approximately calculate the prediction (new_prediction)
"""
