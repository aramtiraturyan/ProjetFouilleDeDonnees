
The scripts here are used to convert the 2 csv files into arff dataset.

1. specialcar.php
With the php script we remove all the special characters from 
the dataset, as later we may have conflicts while converting to arff.

2. merge.php 
We merge 2 csv files with the corresponding lines of 2 csv files.
Each line of the dataset corresponds to a lable in the same line in the labels

3. csv2arff.py 
Finally with this python script we convert the csv file to arff.