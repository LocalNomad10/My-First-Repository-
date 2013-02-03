# How to download csv file from webpage
#url for kindle Comments
#works
 fileUrl <-"https://api.scraperwiki.com/api/1.0/datastore/sqlite?format=csv&name=kindle_most_highlighted_passages_-_healthcare_1&query=select+*+from+%60swdata%60&apikey="
> download.ffile(fileUrl, destfile="./data/kindle.csv", method="curl")
Error: could not find function "download.ffile"
> download.file(fileUrl, destfile="./data/kindle.csv", method="curl")
100  237k    0  237k    0     0  49313      0 --:--:--  0:00:04 --:--:-- 547720

#ignore errors, how to format CSV into readable file
#works
> kindleData <-read.csv(./data/kindle.csv, sheetIndex=1)
Error in read.table(file = file, header = header, sep = sep, quote = quote,  : 
  unused argument(s) (sheetIndex = 1)
> kindleData <-read.table(./data/kindle.csv, sheetIndex=1)
Error in read.table(./data/kindle.csv, sheetIndex = 1) : 
  unused argument(s) (sheetIndex = 1)
> kindleData <-read.table(./data/kindle.csv, sep=",", header=TRUE)
Error in read.table(./data/kindle.csv, sep = ",", header = TRUE) : 
  object '.' not found
> kindleData <- read.csv("./data/kindle.csv")
> head(kindleData)


#connect to live data feed
#works
con <-rl("https://api.scraperwiki.com/api/1.0/datastore/sqlite?format=csv&name=kindle_most_highlighted_passages_-_healthcare_1&query=select+*+from+%60swdata%60&apikey=", method"curl", "r")
kindleData <- readlines(con)
close(con)
head(kindleData)


#getting data in JSON format using kindle scraper wiki data
#important for trolling social media data
#works
library(RJSONIO)
> 
> library(RJSONIO)
> fileUrl <- "https://api.scraperwiki.com/api/1.0/datastore/sqlite?format=json&name=kindle_most_highlighted_passages_-_healthcare_1&query=select+*+from+%60swdata%60&apikey="
> download.file(fileUrl,destfile="./data/kindleData.json",method="curl")

#read data from JSON data
#works
jsonKindle = fromJSON(con)
close(con)
head(jsonKindle)

##connect to a webfile
fileUrl1 <- "https://dl.dropbox.com/u/7710864/data/reviews-apr29.csv"
fileUrl2 <- "https://dl.dropbox.com/u/7710864/data/reviews-apr29.csv"

##download webfile and store in on local dir
##file is also named
download.file(fileUrl1, destfile="./data/reviews.csv", method="curl")
download.file(fileUrl2, destfile="./data/solutions.csv",method="curl")

##read file from local dir 
reviews <-read.csv("./data/reviews.csv"); solutions <-read.csv("./data/solutions.csv")

## show the data in the R concole
## reviews calls the file, 2 is the number of reviews shown
##reviews can change

head(reviews, 2)

##Data Munging

## change a name in data
sub()

##change name and substitute all data
gsub()

##Makes quantitative varibles into ranges 
cut()
reviews$time_left
##example of making a range vector and the cut function
timeRanges <- cut(reviews$times_left, seq=0,n by=450)

##how to merge data sets together
## combine reviewers and solutions
##merge two data tables(sets)
##merges by common data names
##important parameters: x, y, by, by.x, by.y,all
merge()
names(reviews)

##example
mergedData <- merge(reviews, solutions, all=TRUE)
head(mergedData)

##skill example merge by parameters
##the red values can be changed to anything
mergedData2 <-merge(reviews, solutions, by.x"solution.id", by.y="id",all=TRUE)
head(mergedData2[,1:6,3])

##sort values
##important parameters, x#vector of values, decreasing
##example
sort()
mergedData2$reviewer_id[1:10]

##sort data frame by a particular varible
##important parameters: list of variables to order, na.last, decreasing
order()
##example remember the merged data is  vector previously created
##multiple varibles can be passed 
reorderedData <- order(mergedData2$reviewer_id)
head(reorderedData[,1:6],3)

##Reshape data
melt()
##important load reshape 2 package, id.vars, measure.vars, variable.name 
##example
melt(misShaped, id.vars="people", variable.name"treatment", )






