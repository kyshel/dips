#!/usr/bin/python
import cv2
import numpy as np
from sys import argv
import os


script_name, first_var, second_var = argv
file_path='upload/'+second_var

if first_var == 'smooth':

	img = cv2.imread(file_path)
	kernel = np.ones((20,20),np.float32)/400
	dst = cv2.filter2D(img,-1,kernel)

	effect='_smoothed'


else:
	print 'no op'

file_name0=os.path.splitext(second_var)[0]
file_name1=os.path.splitext(second_var)[1]
file_processed_path='processed/'+file_name0+effect+file_name1
cv2.imwrite(file_processed_path,dst)