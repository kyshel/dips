#!/usr/bin/python
import cv2
import numpy as np
from sys import argv
import os


script_name, first_var,second_var = argv
file_path='upload/'+second_var
img = cv2.imread(file_path)

if first_var == 'smooth':	
	kernel = np.ones((20,20),np.float32)/400
	dst = cv2.filter2D(img,-1,kernel)


elif first_var == 'shift':
	img = cv2.imread(file_path,1)
	rows,cols,ch= img.shape
	M = np.float32([[1,0,100],[0,1,50]])
	dst = cv2.warpAffine(img,M,(cols,rows))





elif first_var == 'rot':
	img = cv2.imread(file_path,1)
	rows,cols,ch = img.shape

	M = cv2.getRotationMatrix2D((cols/2,rows/2),90,1)
	dst = cv2.warpAffine(img,M,(cols,rows))

elif first_var == 'sobelx':	
	img = cv2.imread(file_path,0)
	laplacian = cv2.Laplacian(img,cv2.CV_64F)
	sobelx = cv2.Sobel(img,cv2.CV_64F,1,0,ksize=5)
	sobely = cv2.Sobel(img,cv2.CV_64F,0,1,ksize=5)
	dst = sobelx

elif first_var == 'sobely':	
	img = cv2.imread(file_path,0)
	laplacian = cv2.Laplacian(img,cv2.CV_64F)
	sobelx = cv2.Sobel(img,cv2.CV_64F,1,0,ksize=5)
	sobely = cv2.Sobel(img,cv2.CV_64F,0,1,ksize=5)
	dst = sobely
	
elif first_var == 'edge':	

	edges = cv2.Canny(img,100,200)
	dst = edges

elif first_var == 'hist':
	img = cv2.imread(file_path,0)
	hist = cv2.calcHist([img],[0],None,[256],[0,256])
	dst = hist

elif first_var == 'fft':
	img = cv2.imread(file_path,0)
	f = np.fft.fft2(img)
	fshift = np.fft.fftshift(f)
	magnitude_spectrum = 20*np.log(np.abs(fshift))
	dst = magnitude_spectrum



else:
	print 'no op'

file_name0=os.path.splitext(second_var)[0]
effect='_' + first_var
file_name1=os.path.splitext(second_var)[1]
file_processed_path='processed/'+file_name0+effect+file_name1
cv2.imwrite(file_processed_path,dst)