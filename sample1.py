from smtplib import SMTP

# creates SMTP session
s = SMTP('smtp.gmail.com', 587)

# start TLS for security
s.starttls()

# Authentication
s.login("balapreethika.cb20@bitsathy.ac.in", "uzattzogieixptuu")

# message to be sent
message = "Recieved Blood. Thank You"

# sending the mail
s.sendmail("balapreethika.cb20@bitsathy.ac.in", "aruna.cb20@bitsathy.ac.in", message)

# terminating the session
s.quit()
