from django.db import models
from django.core.mail import send_mail, BadHeaderError

class Business(models.Model):
    longName    = models.CharField(max_length=50)
    location    = models.TextField()
    city        = models.TextField  ()
    state       = models.CharField(max_length=25)
    phoneNumber = models.IntegerField()
    zipCode     = models.IntegerField()
    verified    = models.BooleanField(default=False)
    lastUpdated = models.DateTimeField()