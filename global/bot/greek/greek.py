# coding=UTF-8

import sys

def main():    
    if sys.argv[1] == "Γειά" or sys.argv[1] == "ΓΕΙΑ":
        print "Χαίρετε, πώς μπορώ να σας εξυπηρετήσω;"

    elif sys.argv[1] == "πληροφορίες" or sys.argv[1] == "ΠΛΗΡΟΦΟΡΙΕΣ":
        print "Αυτή είναι η υπηρεσία <a href=\"/about\">eHOSP</a>"

    else:
        print "Συγγνώμη, δε βρέθηκαν αποτελέσματα για την ερώτησή σας."
