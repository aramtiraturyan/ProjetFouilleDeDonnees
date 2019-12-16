#!/usr/bin/env python

import nltk
import numpy


with open('dataset.csv', encoding='utf8') as data:
    with open('out1.csv','w',encoding='utf8') as output:
        for line in data:
            tokens = nltk.word_tokenize(line)
            tagged = nltk.pos_tag(tokens)
            adj = [word for word,pos in tagged
                   if (pos == 'JJ' or pos == 'JJR' or pos == 'JJS')]
            downcased = [x.lower() for x in adj]
            joined = " ".join(downcased) + '\n'
            output.write(joined)
output.close()



