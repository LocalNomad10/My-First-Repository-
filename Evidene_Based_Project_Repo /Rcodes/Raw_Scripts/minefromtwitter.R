##Step-by-step script guide how to mine info from a twitter user
##From http://www.inside-r.org/howto/mining-twitter-airline-consumer-sentiment?##mkt_tok=3RkMMJWWfF9wsRoku6zLZKXonjHpfsX/##7OgtWaOg38431UFwdcjKPmjr1YIBTcp0dvycMRAVFZl5nR5dDO%2BZaZRJ9fteBEyiTS/2jqY%3D

##BASIC STUFF
##Load libraries
##dependicies load automatically
library(twitteR)

##2-connect to a user 
##example using @VinceKuraitis(Health Care Related)

kuraitis.tweets = searchTwitter('@VinceKuraitis', n=20)

#check length
length(kuraitis.tweets)

#check type
class(kuraitis.tweets)

#check last user name
tweet$getScreenName()

#check last tweet
tweet$getText()

##EXTRACT TEXT FROM TWEETS
##use the plyr package, it makes naming the functions cleaner

library(plyr)

##Write a function to process the data
##Use the apply family of functions apply() lapply(), mapply(), sapply(),
##tapply(), vapply(), etc
##use the getText() on each objet
##first letter = from state ex list second letter = to state ex array plyr ##functions always end in ply

kuraitis.text = laply(kuraitis.tweets, function(t)t$getText())
length(kuraitis.text)
head(kuraitis).text,5)##loads 5 tweets
class(kuraitis.tweets)

##ESTIMATING SENTIMENT:The ALgorithm
##KISS IT: counting positive words and negative words
##NExt Time we'll make a better algorithm, if there is time. 
##subtract occurances of negative words from number of positive
##larger negative scores receive a negative sentiment
##neutral scorces receive a number close to zero
##larger positive scores receive a positive sentiment

##LOADING THE OPINION LEXICON
##http://www.cs.uic.edu/~liub/FBS/opinion-lexicon-English.rar
##Scan both documents in order to score text
##the below objects make simple character vectors
##load lexicons into R-studio
hu.liu.pos = scan('/Users/jonathanschaller/Desktop/informaticsrepo/Evidene_Based_Project_Repo\ /opinion-lexicon-English/positive-words.txt', what='character',comment.char';')

hu.liu.neg = scan('/Users/jonathanschaller/Desktop/informaticsrepo/Evidene_Based_Project_Repo\ /opinion-lexicon-English/negative-words.txt', what='character',comment.char';')

##Run a couple checks
class(hu.liu.neg)
class(hu.liu.pos)
length(hu.liu.neg)
length(hu.liu.pos)

##update lexicon with industry and twitter specific keywords
## c() = combine function
pos.words = c(hu.liu.pos, 'efficient')
neg.words = c(hu.liu.neg, 'expensive')

##IMPLEMENT THE SCORING ALGORITHM TO SCORE SENTIMENT
##use our score.sentiment() function which applies the laply() 

score.sentiment = function(sentences, pos.words, neg.words, .progress='none')
{
	require(plyr)
	require(stringr)
#we got a vector of sentences. plyr will handle a list
#or a vector as an "l" for us
#we want a simple array of scores bac, so we use
#"l", + "a", + "ply" = "laply":
scores = laply(sentences, function(sentences, pos.words, neg.words){
#clean up sentences with R's regex-driven global substitute, gsub():
sentence = gsub('[[:punct:]]',",sentence)
sentence = gsub('[[:cntrl:]]',",sentence)
sentence = gsub('\\d+',", sentence)
#and convert to lower case
sentence = tolower(sentence)
#split into words.str_split is in the stringer package
word.list = str_split(sentence, '\\s+')
#sometimes a list() is one level of hierarchy too much
words = unlist(word.list)
#compare our words to the dictonaries of positive & negative terms
pos.matches = match(words, pos.words)
neg.matches = match(words, neg.words)
#match() returns the position of the matches term or NA
##we want TRUE/FALSE
pos.matches = !is.na(pos.matches)
neg.matches = !is.na(neg.matches)
#conviently, TRUE/FALSE will be treated as 1/0 by sum()
score = sum(pos.matches)- sum(neg.matches)
scores.df = data.frame(score=scores, text=sentences)
return(scores.df)}, pos.words, neg.words, .progress=.progress)
scores.df = data.rame(score=scores,text=sentences)
return(scores.df)
}



