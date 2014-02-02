from django.db import models
from django.core.urlresolvers import reverse
from datetime import datetime, date


class Location(models.Model):
    address     = models.CharField(max_length=100, blank=False)
    city        = models.CharField(max_length=100, blank=False)
    state       = models.CharField(max_length=50, blank=False)
    country     = models.CharField(max_length=100, blank=False)

    def __unicode__(self):
        return (self.city + ', ' + self.country)

class Traveler(models.Model):
    firstName       = models.CharField(max_length=50, blank=False)
    lastName        = models.CharField(max_length=50, blank=False)
    homeLocation    = models.OneToOneField(Location, blank=False)
    email_address   = models.EmailField()

    def __unicode__(self):
        return (self.firstName + ' ' + self.lastName)

class Voyage(models.Model):
    voyageName  = models.CharField(max_length=50, blank=False)
    location    = models.OneToOneField(Location, blank=False)
    beginning   = models.DateTimeField()
    end         = models.DateTimeField()
    planner     = models.OneToOneField(Traveler, blank=False)

    def __unicode__(self):
        return self.voyageName