import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import nltk


from nltk.tokenize import RegexpTokenizer
from nltk.stem.porter import PorterStemmer
from nltk.corpus import stopwords

#Init Objects
tokenizer=RegexpTokenizer(r'\w+')
en_stopword=set(stopwords.words('english'))
ps=PorterStemmer()


def getStemmedReview(review):
    review=review.lower()
    review=review.replace('<br /><br />'," ")
    
    #tokanize
    tokens=tokenizer.tokenize(review)
    new_tokens=[token for token in tokens if token not in en_stopword]
    stemmed_tokens=[ps.stem(token) for token in new_tokens]
    
    cleaned_review=' '.join(stemmed_tokens)
    return cleaned_review

def getstemmedDocument(inputfile,outputfile):
    
    out=open(outputfile,'w',encoding='utf-8')
    with open(inputfile,encoding='utf-8') as f:
        reviwes=f.readlines()
    for review in reviwes:
        clened_review=getStemmedReview(review)
        print((clened_review),file=out)
    out.close()
    

import sys

inputfile=sys.argv[1]
outputfile=sys.argv[2]
getstemmedDocument(inputfile,outputfile)