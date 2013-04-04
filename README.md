# Static Analysis Tool Evaluation Project (SATEP) #

----------

## Introduction ##

This evaluation project contains a collection of PHP test cases useful to evaluate
the various features of Static Analysis tools.

## Test cases ##

The test cases are named according to the following syntax:

CWEID_TYPE_TESTID_I_of_N_INPUT_DESC

where:

CWEID: is the CWE identification, for example CWE80.

TYPE: can be Vuln to signal that the test case contains a vulnerability, Safe to signal that the test case doesn't contains a vulnerability and Mixed to signal that the test case contain a vulnerability and a safe invocation..

TESTID: is the identifier of the test case.

I_of_N: identify different files associated at the same test case. I is the index and N is the total number of files for this test cases.

INPUT: the type of taint input, for example GET, POST, COOKIE, ...

DESC: a brief description of the meaning of the test case. The description has all whitespace replace with the character '_'.

For example the following test case name: CWE80_Vuln_AA_1_of_1_GET_Simple_XSS.php has as:

CWEID: CWE80

TYPE: Vuln

TESTID: AA

I_of_N: 1 as I and 1 as N. This mean that the test cases has only one file

INPUT: the parameters are taken by the query string

DESC: Simple_XSS
