import smtplib
import sys
to = "temp@gmail.com";
if(len(sys.argv)>=1):
    to=sys.argv[1];
    too=sys.argv[2];
    num=sys.argv[3];
    name=sys.argv[4];
    print(to)
   
gmail_user = 'sujanr12121998@gmail.com'
gmail_password = 'tikoxnhtngmmaizt'
 
sent_from = gmail_user
 
subject = 'Service has been accepted'
body = "Dear customer, \n\n Your request has been accepted.\n"+name+" will reach you soon\n In order to get this service provider at your door step contact:\t"+num+" \n\nYour requested id is\t"+too+"\n\n\n Regards,\n One Click for Home Services. "
 
email_text = """\
From: %s
To: %s
Subject: %s
 
%s

""" % (sent_from, to, subject, body)
 
try:
    server = smtplib.SMTP_SSL('smtp.gmail.com', 465)
    server.ehlo()
    server.login(gmail_user, gmail_password)
    server.sendmail(sent_from, to, email_text)
    server.close()
 
    print 'Email sent!'
except:
    print 'Something went wrong...'
