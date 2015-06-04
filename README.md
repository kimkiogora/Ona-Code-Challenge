# Ona-Code-Challenge
Consider a dataset providing information on the functionality of infrastructure resources, for each water point it
includes the name of village it is in and its functional state. 
 
Implement a data processing module which takes a dataset URL as input and returns: 

 -The number of water points that are functional
 
 -The number of water points per community
 
 -The rank for each community by the percentage of broken water points
 
 
There should be a top level object or function ​
calculate("http://...").., which returns a data structure with the above information, something like
{ 
  number_functional: ..., 
  number_water_points: { 
    communityA: ..., 
  }, 
  community_ranking: ... 
}

This code above ( in src folder ) is a simple php approach to the above.

To run this challenge, download and extract. Open a terminal and navigate to the src folder. 

Execute php run.php

Sample test results https://github.com/kimkiogora/Ona-Code-Challenge/blob/master/SampleResponses/reponse.txt
