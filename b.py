import smtplib
import sys
to = "temp@gmail.com";
if(len(sys.argv)>=1):
    to=sys.argv[1];
    too=sys.argv[2];
    print(to)
   
gmail_user = 'sujanr12121998@gmail.com'
gmail_password = 'tikoxnhtngmmaizt'
 
sent_from = gmail_user
 
subject = 'Service has been Completed'
body = "Dear Customer,\n Your Requested id \t"+too+"\n Our team has completed the service requested by you.  \n\nThanks for your business. We look forward to working with you again in the future.\n\nRegards,\n One Click for Home Services."
 
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
