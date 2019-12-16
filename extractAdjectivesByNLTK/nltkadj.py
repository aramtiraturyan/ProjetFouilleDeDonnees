#!/usr/bin/env python

import nltk
import numpy

f = open(r'dataset.csv', encoding="utf8")
data = f.readlines()

tagged_list = []

result_list = []

for line in data:
   	tokens = nltk.word_tokenize(line)
   	tagged = nltk.pos_tag(tokens)
   	adj = [word for word,pos in tagged \
           	if (pos == 'JJ' or pos == 'JJR' or pos == 'JJS')]
   	downcased = [x.lower() for x in adj]
   	joined = " ".join(downcased)
   	into_string = str(adj)
   	result_list.append(joined)

output = open(r"datasetadj.csv", "w", encoding='utf8')
for item in result_list:
	output.write(str(item) + "\n")
output.close()
