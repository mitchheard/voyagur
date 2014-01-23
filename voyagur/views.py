# TODO: intercept search form
# TODO: run query, something like allBusinesses=Business.objects.all().list()
# TODO serve up results template

# All of the above will go into something like def search()

#from business.models import Business
from django.shortcuts import render_to_response, RequestContext

def home(request, template="home.html"):
    #all_businesses  = Business.objects.all()
    #data            = {'businesses': all_businesses}
    return render_to_response(template, context_instance=RequestContext(request))