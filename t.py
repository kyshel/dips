#!/usr/bin/python
import cv2
import numpy as np
from sys import argv
import os


script_name, first_var = argv
file_path='upload/'+first_var

img = cv2.imread(file_path)
kernel = np.ones((20,20),np.float32)/400
dst = cv2.filter2D(img,-1,kernel)

file_name0=os.path.splitext(first_var)[0]
file_name1=os.path.splitext(first_var)[1]
effect='_smoothed'

file_processed_path='processed/'+file_name0+effect+file_name1
cv2.imwrite(file_processed_path,dst)

