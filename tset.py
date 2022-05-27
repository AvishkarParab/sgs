list = ["vijay@gmail.com","Mahesh@yahoo.com","Nitesh@hotmail.com"]
# domain ={"gmail":0,"hotmail":0,"rediffmail":0,"yahoo":0}
gmail,yahoo,hotmail,rediffmail=0,0,0,0
domain={}
for email in list:
    curDomain = email[email.index("@")+1:email.index(".")]
    if(curDomain == "gmail"):
        if(gmail == 0):
            gmail+=1
            domain["gmail"] = gmail
        else:
            domain["gmail"]=gmail
    elif(curDomain == "hotmail"):
        if(hotmail == 0):
            hotmail+=1
            domain["hotmail"] = hotmail
        else:
            domain["hotmail"]=hotmail
    elif(curDomain == "rediffmail"):
        if(rediffmail == 0):
            rediffmail+=1
            domain["rediffmail"] = rediffmail
        else:
            domain["rediffmail"]=rediffmail
    elif(curDomain == "yahoo"):
        if(yahoo == 0):
            yahoo+=1
            domain["yahoo"] = yahoo
        else:
            domain["yahoo"]=yahoo

print(domain)